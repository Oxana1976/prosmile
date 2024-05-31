<?php

use App\Http\Controllers\Api\PatientController;
use App\Http\Controllers\Api\SpecialtyController;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/user/create', function () {
    $user = User::query()->findOrFail(auth()->user()->id);
    $token = $user->createToken('API_TOKEN_PERSONNAL_CHIEF')->plainTextToken;

    return response()->json(['token' => $token]);
})->middleware('web');

Route::middleware('auth:sanctum')->group(function() {
    Route::get('/specialties', [SpecialtyController::class, 'index']);
    Route::get('/patients', [PatientController::class, 'index']);
    Route::get('/patient/{id}', [PatientController::class, 'show']);

});
