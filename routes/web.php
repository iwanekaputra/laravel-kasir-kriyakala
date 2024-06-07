<?php

use App\Livewire\Pages\AdminIndex;
use App\Livewire\Pages\BookingApprove;
use App\Livewire\Pages\BookingIndex;
use App\Livewire\Pages\BookingShow;
use App\Livewire\Pages\ChoosePackage;
use App\Livewire\Pages\ChooseService;
use App\Livewire\Pages\ChooseStudio;
use App\Livewire\Pages\ChooseTime;
use App\Livewire\Pages\CreateBooking;
use App\Livewire\Pages\Login;
use App\Livewire\Pages\Reservation;
use Illuminate\Support\Facades\Route;

Route::get('/', Login::class);
// Route::get('/login', Login::class);

Route::get('/reservation/{orderId}', Reservation::class)->name('reservation');


Route::get('admin/admin-index', AdminIndex::class)->name('admin-index')->middleware('auth');
Route::get('admin/choose-studio', ChooseStudio::class)->name('choose-studio')->middleware('auth');
Route::get('admin/choose-service/{studioId}', ChooseService::class)->name('choose-service')->middleware('auth');
Route::get('admin/choose-package/{serviceId}', ChoosePackage::class)->name('choose-package')->middleware('auth');
Route::get('admin/choose-time/{servicePackageId}', ChooseTime::class)->name('choose-time')->middleware('auth');
Route::get('admin/create-booking/{servicePackageId}/{time}/{appointment}', CreateBooking::class)->name('create-booking')->middleware('auth');


Route::get('/admin/bookings', BookingIndex::class)->name('admin.booking.index')->middleware('auth');
Route::get('/admin/bookings/{id}', BookingShow::class)->name('admin.booking.show')->middleware('auth');
Route::get('admin/bookings/approve/{id}', BookingApprove::class)->name('admin.booking.approve')->middleware('auth');
