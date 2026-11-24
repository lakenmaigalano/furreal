<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
class Adopter extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'phone',
        'address',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function pets(): BelongsToMany
    {
        return $this->belongsToMany(Pet::class, 'pet_adopter')
            ->withPivot('status', 'applied_on')
            ->withTimestamps();
    }
}
