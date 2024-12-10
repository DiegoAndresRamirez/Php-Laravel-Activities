<?php

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
        return view('users.create');
    })->name('users.create');
});

Route::get('/scrape-countries', function () {
    (new \App\Services\CountryScraper)->scrape();
    return 'Scraping iniciado';
});
