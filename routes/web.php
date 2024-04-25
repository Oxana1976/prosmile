<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\AvailabilityController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/doctor', [DoctorController::class, 'index'])->name('doctor.index');
Route::get('/doctors/filter', [DoctorController::class, 'filter'])->name('doctors.filter');
Route::get('/doctor/{id}', [DoctorController::class, 'show'])
		->where('id', '[0-9]+')->name('doctor.show');
Route::get('/doctor/edit/{id}', [DoctorController::class, 'edit'])
		->where('id', '[0-9]+')->name('doctor.edit');
Route::put('/doctor/{id}', [DoctorController::class, 'update'])
		->where('id', '[0-9]+')->name('doctor.update');

Route::get('/doctor/create', [DoctorController::class, 'create'])->name('doctor.create');
Route::post('/doctor', [DoctorController::class, 'store'])->name('doctor.store');

 
      

       
        