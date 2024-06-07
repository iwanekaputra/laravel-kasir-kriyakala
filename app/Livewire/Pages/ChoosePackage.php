<?php

namespace App\Livewire\Pages;

use App\Models\ServicePackage;
use Livewire\Component;

class ChoosePackage extends Component
{


    public $serviceId;

    public function mount($serviceId)
    {
        $this->serviceId = $serviceId;
    }
    public function render()
    {
        return view('livewire.pages.choose-package', [
            'servicePackages' => ServicePackage::where('service_id', $this->serviceId)->get()

        ])->extends('layouts.admin');
    }
}
