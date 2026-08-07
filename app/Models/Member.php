<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'position_id',
        'division_id',
        'period_id',
        'campus_id',
        'name',
        'slug',
        'photo',
        'email',
        'phone',
        'bio',
        'study_program',
        'batch',
        'is_active',
        'order',
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'batch' => 'integer',
        'order' => 'integer',
    ];

    // Relationships
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function position()
    {
        return $this->belongsTo(Position::class);
    }

    public function division()
    {
        return $this->belongsTo(Division::class);
    }

    public function period()
    {
        return $this->belongsTo(Period::class);
    }

    public function campus()
    {
        return $this->belongsTo(Campus::class);
    }

    // Accessor for full position name
    public function getPositionNameAttribute()
    {
        return $this->position ? $this->position->name : null;
    }

    // Scope for active members
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    // Scope for core positions (Ketua, Wakil, Sekretaris, Bendahara)
    public function scopeCore($query)
    {
        return $query->whereHas('position', function ($q) {
            $q->where('is_core', true);
        });
    }
}