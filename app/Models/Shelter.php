<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
class Shelter extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'address',
        'contact_number',
    ];

    public function pets(): HasMany
    {
        return $this->hasMany(Pet::class);
    }

    public function medicalRecords(): HasManyThrough
    {
        return $this->hasManyThrough(
            MedicalRecord::class,
            Pet::class,
        );
    }
}
