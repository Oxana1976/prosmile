<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\AvailabilityController;
use App\Models\Availability;
use App\Models\Secretary;
use App\Http\Controllers\SecretaryController;
use App\Http\Controllers\SpecialtyController;
use App\Http\Controllers\PatientController;

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

Route::middleware('auth')->group(function () {
Route::get('/availability', [AvailabilityController::class, 'index'])->name('availability.index');
Route::get('/availability/create', [AvailabilityController::class, 'create'])->name('availability.create');
Route::post('/availability', [AvailabilityController::class, 'store'])->name('availability.store');
Route::get('/availability/{availability}/edit', [AvailabilityController::class, 'edit'])->name('availability.edit');     
Route::put('/availability/{availability}', [AvailabilityController::class, 'update'])->name('availability.update');
Route::delete('/availability/{availability}', [AvailabilityController::class, 'destroy'])->name('availability.delete'); 
});

Route::middleware('auth')->group(function () {
Route::get('/secretary', [SecretaryController::class, 'index'])->name('secretary.index');
Route::get('/secretary/create', [SecretaryController::class, 'create'])->name('secretary.create');
Route::post('/secretary', [SecretaryController::class, 'store'])->name('secretary.store');
Route::get('/secretary/edit/{id}', [SecretaryController::class, 'edit'])
		->where('id', '[0-9]+')->name('secretary.edit');
Route::put('/secretary/{id}', [SecretaryController::class, 'update'])
		->where('id', '[0-9]+')->name('secretary.update');
Route::delete('/secretary/{secretary}', [SecretaryController::class, 'destroy'])->name('secretary.delete'); 
});

Route::middleware('auth')->group(function () {
Route::get('/specialty', [SpecialtyController::class, 'index'])->name('specialty.index');
Route::get('/specialty/create', [SpecialtyController::class, 'create'])->name('specialty.create');
Route::post('/specialty', [SpecialtyController::class, 'store'])->name('specialty.store');
Route::delete('/specialty/{specialty}', [SpecialtyController::class, 'destroy'])->name('specialty.delete');
});

Route::get('/patient', [PatientController::class, 'index'])->name('patient.index');
Route::get('/patient/{id}', [PatientController::class, 'show'])
		->where('id', '[0-9]+')->name('patient.show');
Route::get('/patient/appointment/{id}', [PatientController::class, 'show_appointment'])
		->where('id', '[0-9]+')->name('patient.show_appointment');
Route::get('/patient/filter', [PatientController::class, 'index'])->name('patients.index');
Route::get('/patient/create', [PatientController::class, 'create'])->name('patient.create');
Route::post('/patient', [PatientController::class, 'store'])->name('patient.store');




//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
