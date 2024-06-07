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

        $this->sendWa();

        return redirect()->route('admin.booking.index');
    }

    public function sendWa()
    {
        $token = "VhVF2G@EjXe4pAHH_Kwt";
        $curl = curl_init();


        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://api.fonnte.com/send',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => array(
                'target' => $this->booking->nowa,
                'message' => 'Halo Sakala. Berikut ini adalah link Drive untuk hasil foto di Kriyakala Studio.   Terimakasih' . "\n" . $this->booking->link_file
            ),
            CURLOPT_HTTPHEADER => array(
                'Authorization: ' . $token
            ),
        ));

        $response = curl_exec($curl);
        curl_close($curl);
    }


    public function render()
    {
        return view('livewire.pages.booking-approve')->extends('layouts.main');
    }
}
