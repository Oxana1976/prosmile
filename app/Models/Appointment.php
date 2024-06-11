<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Appointment extends Model
{
    public const STATUS_CANCELED = "Annulé";
    public const STATUS_BOOKED = "Planifié";
    public const STATUS_COMPLETED = "Complété";

    public const STATUS = [
        self::STATUS_CANCELED,
        self::STATUS_BOOKED,
        self::STATUS_COMPLETED,
    ];

    use HasFactory;
    protected $fillable = [
        'patient_id',
        'doctor_id',
        'date_time',
        'status',
        'duration',
        'diagnostic',
        'description',
        'rx_image_url',

    ];
    protected $table = 'appointments';

    public function patient(): BelongsTo
    {
        return $this->belongsTo(Patient::class);
    }

    public function doctor(): BelongsTo
    {
        return $this->belongsTo(Doctor::class);
    }

    public function comment(): HasOne
    {
        return $this->hasOne(Comment::class);
    }

    public function payment(): HasOne
    {
        return $this->hasOne(Payment::class);
    }

    public function notifications(): HasMany
    {
        return $this->hasMany(Notification::class);
    }

}
