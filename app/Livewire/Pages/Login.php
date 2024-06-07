<?php

namespace App\Livewire\Pages;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $email;
    public $password;

    public $listeners = [
        'moveToLogin'
    ];

    public function login()
    {
        $this->validate([
            'email'     => 'required|email',
            'password'  => 'required'
        ]);

        if (Auth::attempt(['email' => $this->email, 'password' => $this->password])) {
            return redirect()->route('admin-index');
        } else {
            $this->dispatchBrowserEvent('swal:modal', [
                'type' => 'error',
                'message' => 'Email dan password salah!',
                'text' => '',
                'timer' => 2000,
                'redirect' => 'moveToLogin'
            ]);
        }
    }

    public function moveToLogin()
    {
        return redirect()->route('login');
    }

    public function render()
    {
        return view('livewire.pages.login')->extends("layouts.app");
    }
}
