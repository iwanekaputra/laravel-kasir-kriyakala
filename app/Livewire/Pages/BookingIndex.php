<?php

namespace App\Livewire\Pages;

use App\Models\Booking;
use Livewire\Component;

class BookingIndex extends Component
{
    public function render()
    {
        return view('livewire.pages.booking-index', [

            'bookings' => Booking::orderBy('in_date', 'DESC')->get()

        ])->extends('layouts.admin');
    }
}
