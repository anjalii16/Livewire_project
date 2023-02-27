<?php

namespace App\Http\Livewire;

use App\Models\order;
use DB;
use Livewire\Component;

class Listorder extends Component
{
    public $searchTerm = '';

    // public $fromdate, $todate, $isApproved, $lead_id;
    protected $orders;
    public $max_page;
    public $lead_id, $from_Date, $to_Date, $isApproved;
    public function setMaxPage($max_page)
    {
        $this->max_page = $max_page;
    }

    public function render()
    {
        $this->orders = DB::table('order')
            ->orderBy('date', 'DESC')
            ->paginate($this->max_page ?? 5);
        // if (!empty($this->max_page)) {
        //     dd($this->max_page);
        // }
        $leads = DB::table('lead')->get();
        $order_items = DB::table('order_item')->get();
        if (!empty($this->searchTerm)) {
            $this->orders = Order::where('id', 'like', '%' . $this->searchTerm . '%')
                ->orWhere('remarks', 'like', '%' . $this->searchTerm . '%')
                ->orderBy('date', 'DESC')
                ->paginate($this->max_page ?? 5);
        }

        return view('livewire.listorder', [
            'orders' => $this->orders,
            'leads' => $leads,
            'order_items' => $order_items,
        ])
            ->extends('layout/theme')
            ->section('content');
    }
    public function add()
    {
        $leads = DB::table('lead')->get();

        return redirect()
            ->to('add/order')
            ->with('leads', $leads)->extends('layout/theme')
            ->section('content');
    }
}
