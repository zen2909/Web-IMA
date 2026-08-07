<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'level',
        'is_core',
        'description',
        'responsibilities',
    ];

    protected $casts = [
        'is_core' => 'boolean',
        'level' => 'integer',
    ];

    // Relationships
    public function members()
    {
        return $this->hasMany(Member::class);
    }

    // Get active members in this position
    public function activeMembers()
    {
        return $this->hasMany(Member::class)->where('is_active', true);
    }

    // Scope for core positions
    public function scopeCore($query)
    {
        return $query->where('is_core', true);
    }

    // Scope ordered by level (descending)
    public function scopeOrdered($query)
    {
        return $query->orderBy('level', 'desc');
    }
}