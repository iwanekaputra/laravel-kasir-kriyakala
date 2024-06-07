<?php

namespace App\Livewire\Pages;

use App\Models\Booking;
use Livewire\Component;

class BookingShow extends Component
{
    public $booking;

    public function mount($id)
    {
        $this->booking = Booking::find($id);
    }
    public function render()
    {
        return view('livewire.pages.booking-show')->extends('layouts.admin');
    }
}
