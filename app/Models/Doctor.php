<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Carbon\Carbon;

class Doctor extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'inami',
        'description',
        'gender',
        'photo_url',       
    ];
    protected $table = 'doctors';

    public $timestamps = false;

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function specialties(): BelongsToMany
    {
        return $this->belongsToMany(Specialty::class, 'doctor_specialty');
    }

    public function availabilities(): HasMany
    {
        return $this->hasMany(Availability::class);
    }

    public function appointments(): HasMany
    {
        return $this->hasMany(Appointment::class);
    }

    public function formattedAvailabilities()
    {
        $formattedAvailabilities = [];
        foreach ($this->availabilities as $availability) {
            $startTime = Carbon::createFromFormat('H:i:s', $availability->start_time);
            $endTime = Carbon::createFromFormat('H:i:s', $availability->end_time);
    
            while ($startTime < $endTime) {
                $formattedAvailabilities[] = [
                    'day' => $availability->day instanceof Carbon ? $availability->day->format('d/m/Y') : Carbon::parse($availability->day)->format('d/m/Y'),
                    'start' => $startTime->format('H:i'),
                    'end' => $startTime->copy()->addMinutes(30)->format('H:i'),
                ];
                $startTime->addMinutes(30);
            }
        }
        return $formattedAvailabilities;
    }
}
