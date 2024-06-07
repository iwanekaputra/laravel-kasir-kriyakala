<?php

namespace App\Livewire\Pages;

use App\Models\Booking;
use App\Models\ServicePackage;
use App\Models\Time;
use Carbon\Carbon;
use Livewire\Attributes\On;
use Livewire\Component;

class ChooseTime extends Component
{
    public $package;

    public $appointment;

    public $times = [];

    public $getBookings = [];

    public $service;
    public $studio;


    public function mount($servicePackageId)
    {
        $this->package = ServicePackage::find($servicePackageId);
        $this->service = $this->package->service->name;
        $this->studio = $this->package->service->studio->name;
    }


    #[On('updatedAppointment')]
    public function updatedAppointment($date)
    {
        $modifDate = explode("/", $date);


        $this->appointment = $modifDate[2] . '-' . $modifDate[0] . '-' . $modifDate[1];
        // $this->dispatchBrowserEvent('pantek');
        $selectDate = Carbon::parse(strtotime($this->appointment));

        $getBooking = Booking::where('in_date', $this->appointment)->where('studio', $this->studio);

        $this->getBookings = $getBooking->get();


        if ($selectDate->isWeekday()) {
            $this->times = Time::whereHas('service', function ($query) {
                $query->where('name', $this->service);
                $query->whereHas('studio', function ($query) {
                    $query->where("name", $this->studio);
                });
            })->where('type', 'weekday')->get();
        }

        if ($selectDate->isWeekend()) {
            $this->times = Time::whereHas('service', function ($query) {
                $query->where('name', $this->service);
                $query->whereHas('studio', function ($query) {
                    $query->where("name", $this->studio);
                });
            })->where('type', 'weekend')->get();
        }

        // dd($this->times);
    }
    public function render()
    {
        return view('livewire.pages.choose-time')->extends('layouts.main');
    }
}
