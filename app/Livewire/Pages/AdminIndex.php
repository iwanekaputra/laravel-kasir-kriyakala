<?php

namespace App\Livewire\Pages;

use Livewire\Component;

class AdminIndex extends Component
{
    public function render()
    {
        return view('livewire.pages.admin-index')->extends('layouts.admin');
    }
}
