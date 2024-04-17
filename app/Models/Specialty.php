<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Specialty extends Model
{
    use HasFactory;
    protected $fillable = ['specialty'];

    protected $table = 'specialties';

    public $timestamps = false;

    public function doctors(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'doctor_specialty');
    }
}
