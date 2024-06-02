<?php

use App\Http\Controllers\Api\PatientController;
use App\Http\Controllers\Api\SpecialtyController;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Models\Role;

Route::get('/user/create', function () {
    $user = User::query()->findOrFail(auth()->user()->id);
    if($user->role->role!==Role::PATIENT) {
    $token = $user->createToken('API_TOKEN_PERSONNAL_CHIEF')->plainTextToken;

    return response()->json(['token' => $token]);
    }
    else  abort(403);
})->middleware('web');

Route::middleware('auth:sanctum')->group(function() {
    Route::get('/specialties', [SpecialtyController::class, 'index']);
    Route::get('/patients', [PatientController::class, 'index']);
    Route::get('/patient/{id}', [PatientController::class, 'show']);

});
