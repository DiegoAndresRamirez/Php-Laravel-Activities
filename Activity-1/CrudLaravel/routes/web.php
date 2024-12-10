<?php

use App\Http\Controllers\UserController;
use App\Models\Country;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        $users = User::with('Country')->get();
        return view('dashboard')->with(['users' => $users]);
    })->name('dashboard');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/crear-usuario', function () {
        $countries = Country::all();
        return view('users.create')->with(['countries' => $countries]);
    })->name('users.create');

    Route::post('/usuarios', [UserController::class, 'store'])->name('users.store');
        
});

Route::get('/scrape-countries', function () {
    (new \App\Services\CountryScraper)->scrape();
    return 'Scraping iniciado';
});
