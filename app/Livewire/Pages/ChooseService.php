<?php

namespace App\Livewire\Pages;

use App\Models\Service;
use Livewire\Component;

class ChooseService extends Component
{
    public $studioId;

    public function mount($studioId)
    {
        $this->studioId = $studioId;
    }

    public function render()
    {
        return view('livewire.pages.choose-service', [
            'services' => Service::where('studio_id', $this->studioId)->get()

        ])->extends('layouts.admin');
    }
}
