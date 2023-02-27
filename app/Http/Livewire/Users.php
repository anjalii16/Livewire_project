<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class Users extends Component
{
    use WithPagination;

    public $name,
        $email,
        $user_id,
        $search,
        $filtermode = false,
        $filterEmail,
        $filterName,
        $max_page,
        $updateMode = false,
        $sortField = 'id',
        $sortDirection = 'asc';

    public function sortBy($field)
    {
        if ($this->sortField === $field) {
            $this->sortDirection = $this->sortDirection === 'asc' ? 'desc' : 'asc';
        } else {
            $this->sortField = $field;
            $this->sortDirection = 'asc';
        }
    }
    public function filter()
    {
        $this->filtermode = true;
    }
    public function render()
    {
        $users = User::query()
            ->when($this->search, function ($query) {
                $query->where(function ($query) {
                    $query->where('name', 'like', '%' . $this->search . '%')->orWhere('email', 'like', '%' . $this->search . '%');
                });
            })
            ->orderBy($this->sortField, $this->sortDirection)
            ->paginate($this->max_page);
            $this->serach="";

        if ($this->filtermode) {
         $users = User::query()
            ->when($this->filterName || $this->filterEmail, function ($query) {
                $query->where(function ($query) {
                    $query->where('name', '=', $this->filterName)
                        ->orWhere('email', '=', $this->filterEmail);
                });
            })
            ->orderBy($this->sortField, $this->sortDirection)
            ->paginate($this->max_page);
            $this->filtermode=false;
        }
     

        return view('livewire.users', ['users' => $users])
            ->extends('layout.theme')
            ->section('content');
    }

    private function resetInputFields()
    {
        $this->name = '';
        $this->email = '';
    }

    public function store()
    {
        $validatedData = $this->validate([
            'name' => 'required',
            'email' => 'required|email',
        ]);

        User::create($validatedData);

        session()->flash('message', 'Users Created Successfully.');

        $this->resetInputFields();
    }

    public function edit($id)
    {
        $this->updateMode = true;
        $user = User::findOrFail($id);
        $this->user_id = $id;
        $this->name = $user->name;
        $this->email = $user->email;
    }

    public function cancel()
    {
        $this->updateMode = false;
        $this->resetInputFields();
    }

    public function update()
    {
        $validatedData = $this->validate([
            'name' => 'required',
            'email' => 'required|email',
        ]);

        if ($this->user_id) {
            $user = User::findOrFail($this->user_id);
            $user->update($validatedData);
            $this->updateMode = false;
            session()->flash('message', 'Users Updated Successfully.');
            $this->resetInputFields();
        }
    }

    public function delete($id)
    {
        if ($id) {
            User::findOrFail($id)->delete();
            session()->flash('message', 'Users Deleted Successfully.');
        }
    }
}
