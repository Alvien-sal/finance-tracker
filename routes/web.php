<?php

use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Features;
use Livewire\Volt\Volt;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\OneTimeExpenseController;
use App\Http\Controllers\Auth\Login;
use App\Http\Controllers\Auth\Logout;
use App\Http\Controllers\Auth\Register as userRegister;
use App\Http\Controllers\Auth\Admin\Register as adminRegister;


Route::get('/', [DashboardController::class, 'index'] )->middleware('auth')->name("dashboard");

route::view('login', 'login')->name("login");
Route::view('login/admin', 'admin.login');

Route::post('/login', Login::class);

route::view('register', 'register')->name("register");

Route::post('/register', userRegister::class);




Route::post('/logout', Logout::class)->name('logout');

Route::get('/expense/onetime/create', [OneTimeExpenseController::class, 'create'])->middleware('auth')->name("oneTime.Create");
Route::get('/expense/onetime/store', [OneTimeExpenseController::class, 'store'])->middleware('auth')->name("oneTime.Store");



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
