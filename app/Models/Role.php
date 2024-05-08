<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Role extends Model
{
    // use HasFactory;
    
    // protected $fillable = ['role'];

    // protected $table = 'roles';

    // public $timestamps = false;

    // public function users(): BelongsToMany
    // {
    //     return $this->belongsToMany(User::class, 'role_user');
    // }

    public const CHIEF = 'chef_cabinet';
    public const MEDIC = 'medecin';
    public const SECRETARY = 'secrétaire';
    public const PATIENT = 'patient';
    public const ROLES = [
        self::CHIEF,
        self::MEDIC,
        self::SECRETARY,
        self::PATIENT,
    ];

    protected $table = 'roles';

    public $timestamps = false;

    public function users(): HasMany
    {
        return $this->hasMany(User::class);
    }
}
