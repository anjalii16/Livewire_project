<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Filter extends Component
{
    public $title;
    public function render()
    {
        return view('components/card'
        )->extends('layout.theme')->section('content');
    }
}
