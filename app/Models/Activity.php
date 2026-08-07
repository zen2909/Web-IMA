<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;

    protected $fillable = [
        'division_id',
        'period_id',
        'title',
        'slug',
        'description',
        'featured_image',
        'start_date',
        'end_date',
        'location',
        'status',
    ];

    protected $casts = [
        'start_date' => 'date',
        'end_date' => 'date',
    ];

    // Relationships
    public function division()
    {
        return $this->belongsTo(Division::class);
    }

    public function period()
    {
        return $this->belongsTo(Period::class);
    }

    public function galleries()
    {
        return $this->morphMany(Gallery::class, 'galleryable');
    }

    // Scopes
    public function scopeUpcoming($query)
    {
        return $query->where('start_date', '>=', now())
                     ->where('status', 'planning');
    }

    public function scopeOngoing($query)
    {
        return $query->where('status', 'ongoing');
    }

    public function scopeCompleted($query)
    {
        return $query->where('status', 'completed');
    }

    // Accessor for status badge
    public function getStatusBadgeAttribute()
    {
        $badges = [
            'planning' => 'badge-warning',
            'ongoing' => 'badge-success',
            'completed' => 'badge-primary',
            'cancelled' => 'badge-danger',
        ];
        return $badges[$this->status] ?? 'badge-secondary';
    }

    // Accessor for status label
    public function getStatusLabelAttribute()
    {
        $labels = [
            'planning' => 'Perencanaan',
            'ongoing' => 'Berlangsung',
            'completed' => 'Selesai',
            'cancelled' => 'Dibatalkan',
        ];
        return $labels[$this->status] ?? $this->status;
    }

    // Check if activity is active/ongoing
    public function getIsActiveAttribute()
    {
        return $this->status === 'ongoing';
    }
}