<?php

use App\Http\Controllers\UserdataController;
use App\Http\Controllers\testimonialdataController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

// Route::get('/contact', function () {
//     return view('contact');
// })->name('contact');

// Route::get('/about', function () {
//     return view('about');
// })->name('about');

// Route::get('/services', function () {
//     return view('services');
// })->name('services');

// Route::get('/team', function () {
//     return view('team');
// })->name('team');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/userdata',
    [UserdataController::class, 'index'
    ])->name('userdata');

    Route::get('/adddata',
    [testimonialdataController::class, 'adddata'
    ])->name('adddata');

    Route::get('/editdata/{id}', function ($id) {
        return view('editdata',compact('id'));
    })->name('editdata');

    Route::get('/edituser/{id}', function ($id) {
        return view('edituser',compact('id'));
    })->name('edituser');

    Route::get('/adduser',
    [UserdataController::class, 'adduser'
    ])->name('adduser');

    Route::get('/testimonialdata',
    [testimonialdataController::class, 'testimonialdata'
    ])->name('testimonialdata');

    
});

