<?php

use App\Http\Controllers\ProfileController;
use App\Models\Hall;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');
Route::get('about', function () {
    return view('about');
})->name('about');
Route::get('contact', function () {
    return view('contact');
})->name('contact');


Route::get('test', function () {
    return ['message' => 'Hello', 'status' => 'ok', 'csrf' => @csrf_token()];
})->name('test');

Route::get('halls', function () {
    $halls = Hall::all();
    dd($halls[0]->description);
    return view('halls');
})->name('halls');

Route::get('hall', function () {
    return view('hall');
})->name('hall');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__ . '/auth.php';
