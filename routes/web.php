<?php

use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Features;
use Livewire\Volt\Volt;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\Auth\Login;

Route::get('/', [LoginController::class, 'index']);

Route::get('/login', [LoginController::class, 'authUser']);

Route::get('/register', [RegisterController::class, 'index']);

Route::get('/dashboard', [DashboardController::class, 'index']);

// Route::get('/', function () {
//     return view('welcome');
// })->name('home');

// Route::view('dashboard', 'dashboard')
//     ->middleware(['auth', 'verified'])
//     ->name('dashboard');

// Route::middleware(['auth'])->group(function () {
//     Route::redirect('settings', 'settings/profile');

//     Volt::route('settings/profile', 'settings.profile')->name('profile.edit');
//     Volt::route('settings/password', 'settings.password')->name('user-password.edit');
//     Volt::route('settings/appearance', 'settings.appearance')->name('appearance.edit');

//     Volt::route('settings/two-factor', 'settings.two-factor')
//         ->middleware(
//             when(
//                 Features::canManageTwoFactorAuthentication()
//                     && Features::optionEnabled(Features::twoFactorAuthentication(), 'confirmPassword'),
//                 ['password.confirm'],
//                 [],
//             ),
//         )
//         ->name('two-factor.show');
// });
