<?php

namespace App\Livewire\Pages;

use App\Models\Booking;
use App\Models\Service;
use Livewire\Component;

class BookingApprove extends Component
{
    public $booking;
    public $service;
    public $link_file;

    public function mount($id)
    {
        $this->booking = Booking::find($id);
        $this->service = Service::where('name', $this->booking->service)->first();
    }

    public function update()
    {
        $this->validate([
            'link_file' => 'required'
        ]);

        $this->booking->update([
            'link_file' => $this->link_file
        ]);

        return redirect()->route('admin-index');
    }

    public function render()
    {
        return view('livewire.pages.booking-approve')->extends('layouts.main');
    }
}
