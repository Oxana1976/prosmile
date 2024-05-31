<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\PatientResource;
use App\Http\Resources\SpecialtyResource;
use App\Models\Patient;
use App\Models\Specialty;

class PatientController extends Controller
{
    public function index()
    {
        return PatientResource::collection(Patient::all());
    }

    public function show(int $id)
    {
        return new PatientResource(Patient::findOrFail($id));
    }
}
