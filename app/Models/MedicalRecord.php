<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class MedicalRecord extends Model
{
    use HasFactory;

    protected $fillable = [
        'pet_id',
        'medical_condition',
        'treatment',
        'record_date',
    ];
    protected function casts(): array
    {
        return [
            'record_date' => 'date',
        ];
    }

    public function pet(): BelongsTo
    {
        return $this->belongsTo(Pet::class);
    }
}
