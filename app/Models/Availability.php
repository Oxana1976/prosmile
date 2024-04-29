<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Availability extends Model
{
    use HasFactory;
    protected $fillable = [
        'doctor_id',
        'day',
        'start_time',
        'end_time',
               
    ];
    protected $dates = ['day'];
    protected $table = 'availabilities';

    public $timestamps = false;

    public function doctor(): BelongsTo
{
    return $this->belongsTo(Doctor::class);
}

public function getStartTimeAttribute($value)
{
    // Convertit la valeur en objet DateTime et formate-la selon 'H:i'
    return $this->asDateTime($value)->format('H:i');
}

public function getEndTimeAttribute($value)
{
    return $this->asDateTime($value)->format('H:i');
}
}
