<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
class Pet extends Model
{
    use HasFactory;

    protected $fillable = [
        'shelter_id',
        'user_id',
        'name',
        'species',
        'breed',
        'age',
        'gender',
        'description',
        'status',
    ];

    public function shelter(): BelongsTo
    {
        return $this->belongsTo(Shelter::class);
    }
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function medicalRecords(): HasMany
    {
        return $this->hasMany(MedicalRecord::class);
    }

    public function adopters(): BelongsToMany
    {
        return $this->belongsToMany(Adopter::class, 'pet_adopter')
        ->withPivot('status', 'applied_on')
        ->withTimestamps();
    }
}
