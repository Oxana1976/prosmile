<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Comment extends Model
{
    use HasFactory;
    protected $fillable = [
        'appointment_id',
        'comment',           
    ];
    protected $table = 'comments';
    public $timestamps = false;

    public function appointment(): BelongsTo
    {
        return $this->belongsTo(Appointment::class);
    }
}
