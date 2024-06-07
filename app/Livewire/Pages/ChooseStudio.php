<?php

namespace App\Livewire\Pages;

use Livewire\Component;

class ChooseStudio extends Component
{
    public function render()
    {
        return view('livewire.pages.choose-studio')->extends('layouts.admin');
    }
}
