<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\UserController;

use App\Http\Controllers\CarouselController;
use App\Http\Controllers\AboutSectionController;
use App\Http\Controllers\Admin\FeatureController;
use App\Http\Controllers\Admin\DestinationController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\PackageController;

use App\Models\Carousel;

Route::get('/', function () {
    $carousels = Carousel::all();
    return view('welcome', compact('carousels'));
});



Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    
    Route::middleware('role:admin,jefe,editor,employee')->group(function () {
        Route::get('/admin', function () {
            return 'Panel de administrador';
        });
        Route::resource('users', UserController::class); // Rutas para gestionar usuarios
    });
       
    Route::resource('clients', ClientController::class);

    Route::resource('carousels', CarouselController::class);
    Route::resource('about-sections', AboutSectionController::class);
   // Route::resource('features', FeatureController::class);
    //Route::resource('destinations', DestinationController::class);
   Route::resource('services', ServiceController::class);
    Route::resource('packages', PackageController::class);
});

// En routes/web.php
Route::get('/visa', function () {
    return view('visa');
})->name('visa');

Route::get('/service', function () {
    return view('service');
})->name('service');

Route::get('/package', function () {
    return view('package');
})->name('package');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/about', function () {
    return view('about');
})->name('about');



