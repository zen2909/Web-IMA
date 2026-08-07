<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Campus extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'short_name',
        'logo',
        'city',
        'province',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    // Relationships
    public function members()
    {
        return $this->hasMany(Member::class);
    }

    public function activeMembers()
    {
        return $this->hasMany(Member::class)->where('is_active', true);
    }

    // Accessor for member count
    public function getMemberCountAttribute()
    {
        return $this->activeMembers()->count();
    }

    // Scope for active campuses
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }
}