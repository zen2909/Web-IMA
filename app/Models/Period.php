<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Period extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'start_date',
        'end_date',
        'is_active',
        'description',
    ];

    protected $casts = [
        'start_date' => 'date',
        'end_date' => 'date',
        'is_active' => 'boolean',
    ];

    // Relationships
    public function members()
    {
        return $this->hasMany(Member::class);
    }

    public function programs()
    {
        return $this->hasMany(Program::class);
    }

    public function activities()
    {
        return $this->hasMany(Activity::class);
    }

    // Scope for active period
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    // Get current active period
    public static function getActive()
    {
        return self::where('is_active', true)->first();
    }

    // Accessor for formatted period name
    public function getFormattedDateAttribute()
    {
        $start = $this->start_date ? $this->start_date->format('d M Y') : '';
        $end = $this->end_date ? $this->end_date->format('d M Y') : '';
        return $start . ' - ' . $end;
    }
}