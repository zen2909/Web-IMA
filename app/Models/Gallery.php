<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;

    protected $fillable = [
        'galleryable_id',
        'galleryable_type',
        'image',
        'title',
        'description',
        'order',
        'is_featured',
    ];

    protected $casts = [
        'is_featured' => 'boolean',
        'order' => 'integer',
    ];

    // Polymorphic relationship
    public function galleryable()
    {
        return $this->morphTo();
    }

    // Scope for featured images
    public function scopeFeatured($query)
    {
        return $query->where('is_featured', true);
    }

    // Scope ordered by order field
    public function scopeOrdered($query)
    {
        return $query->orderBy('order');
    }
}