<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HallController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

//Static Pages
Route::view('home', 'home');
Route::view('/', 'home')->name('home');
Route::view('about', 'about')->name('about');
Route::view('contact', 'contact')->name('contact');

//Hall Routes
Route::controller(HallController::class)->group(function () {
    Route::get('halls', 'index')->name('halls');
    Route::get('halls/{hall}', 'show')->name('halls.show');
});


//Dashboard Routes
Route::controller(DashboardController::class)->group(function () {
    Route::get('dashboard', 'index')->middleware(['auth', 'verified'])->name('dashboard');

    //Halls management
    Route::get('dashboard/halls', 'halls')->middleware(['auth', 'verified'])->name('dashboard.halls');
    Route::get('dashboard/halls/create', 'createHall')->middleware(['auth', 'verified'])->name('dashboard.halls.create');
    Route::post('dashboard/halls', 'storeHall')->middleware(['auth', 'verified'])->name('dashboard.halls.store');
    Route::get('dashboard/halls/{hall}', 'showHall')->middleware(['auth', 'verified'])->name('dashboard.halls.show');
    Route::get('dashboard/halls/{hall}/edit', 'editHall')->middleware(['auth', 'verified'])->name('dashboard.halls.edit');
    Route::patch('dashboard/halls/{hall}', 'updateHall')->middleware(['auth', 'verified'])->name('dashboard.halls.update');
    Route::delete('dashboard/halls/{hall}', 'destroyHall')->middleware(['auth', 'verified'])->name('dashboard.halls.destroy');

    //Users management
    Route::get('dashboard/users', 'users')->middleware(['auth', 'verified'])->name('dashboard.users');
    Route::get('dashboard/users/create', 'createUser')->middleware(['auth', 'verified'])->name('dashboard.users.create');
    Route::post('dashboard/users', 'storeUser')->middleware(['auth', 'verified'])->name('dashboard.users.store');
    Route::get('dashboard/users/{user}', 'showUser')->middleware(['auth', 'verified'])->name('dashboard.users.show');
    Route::get('dashboard/users/{user}/edit', 'editUser')->middleware(['auth', 'verified'])->name('dashboard.users.edit');
    Route::patch('dashboard/users/{user}', 'updateUser')->middleware(['auth', 'verified'])->name('dashboard.users.update');
    Route::delete('dashboard/users/{user}', 'destroyUser')->middleware(['auth', 'verified'])->name('dashboard.users.destroy');

    //Booking management
    Route::get('dashboard/bookings', 'bookings')->middleware(['auth', 'verified'])->name('dashboard.bookings');
    Route::get('dashboard/bookings/create', 'createBooking')->middleware(['auth', 'verified'])->name('dashboard.bookings.create');
    Route::post('dashboard/bookings', 'storeBooking')->middleware(['auth', 'verified'])->name('dashboard.bookings.store');
    Route::get('dashboard/bookings/{booking}', 'showBooking')->middleware(['auth', 'verified'])->name('dashboard.bookings.show');
    Route::get('dashboard/bookings/{booking}/edit', 'editBooking')->middleware(['auth', 'verified'])->name('dashboard.bookings.edit');
    Route::patch('dashboard/bookings/{booking}', 'updateBooking')->middleware(['auth', 'verified'])->name('dashboard.bookings.update');
    Route::patch('dashboard/bookings/{booking}/approve', 'approveBooking')->middleware(['auth', 'verified'])->name('dashboard.bookings.approve');
    Route::patch('dashboard/bookings/{booking}/reject', 'rejectBooking')->middleware(['auth', 'verified'])->name('dashboard.bookings.reject');
    Route::delete('dashboard/bookings/{booking}', 'destroyBooking')->middleware(['auth', 'verified'])->name('dashboard.bookings.destroy');


});

//Route::get('dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');
//Route::get('dashboard/halls', [DashboardController::class, 'halls'])->middleware(['auth', 'verified'])->name('dashboard.halls');
//Route::get('dashboard/halls/create', [DashboardController::class, 'create'])->middleware(['auth', 'verified'])->name('dashboard.halls.create');
//Route::post('dashboard/halls', [DashboardController::class, 'store'])->middleware(['auth', 'verified'])->name('dashboard.halls.store');
//Route::get('dashboard/halls/{hall}/edit', [DashboardController::class, 'edit'])->middleware(['auth', 'verified'])->name('dashboard.halls.edit');
//Route::patch('dashboard/halls/{hall}', [DashboardController::class, 'update'])->middleware(['auth', 'verified'])->name('dashboard.halls.update');
//Route::delete('dashboard/halls/{hall}', [DashboardController::class, 'destroy'])->middleware(['auth', 'verified'])->name('dashboard.halls.destroy');

//Profile Routes
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__ . '/auth.php';
