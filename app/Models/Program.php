<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;

    protected $fillable = [
        'division_id',
        'period_id',
        'name',
        'slug',
        'description',
        'objectives',
        'target',
        'status',
        'start_date',
        'end_date',
        'progress',
        'is_priority',
    ];

    protected $casts = [
        'start_date' => 'date',
        'end_date' => 'date',
        'progress' => 'integer',
        'is_priority' => 'boolean',
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
    public function scopeActive($query)
    {
        return $query->where('status', 'active');
    }

    public function scopeCompleted($query)
    {
        return $query->where('status', 'completed');
    }

    public function scopePriority($query)
    {
        return $query->where('is_priority', true);
    }

    // Accessor for status badge
    public function getStatusBadgeAttribute()
    {
        $badges = [
            'planning' => 'badge-warning',
            'active' => 'badge-success',
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
            'active' => 'Berjalan',
            'completed' => 'Selesai',
            'cancelled' => 'Dibatalkan',
        ];
        return $labels[$this->status] ?? $this->status;
    }
}