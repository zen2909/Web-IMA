<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title',
        'slug',
        'content',
        'featured_image',
        'excerpt',
        'is_published',
        'published_at',
        'views',
    ];

    protected $casts = [
        'is_published' => 'boolean',
        'published_at' => 'datetime',
        'views' => 'integer',
    ];

    // Relationships
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function galleries()
    {
        return $this->morphMany(Gallery::class, 'galleryable');
    }

    // Scopes
    public function scopePublished($query)
    {
        return $query->where('is_published', true)
                     ->whereNotNull('published_at')
                     ->where('published_at', '<=', now());
    }

    public function scopePopular($query, $limit = 5)
    {
        return $query->published()->orderBy('views', 'desc')->limit($limit);
    }

    public function scopeRecent($query, $limit = 5)
    {
        return $query->published()->orderBy('published_at', 'desc')->limit($limit);
    }

    // Accessor for reading time
    public function getReadingTimeAttribute()
    {
        $words = str_word_count(strip_tags($this->content));
        $minutes = ceil($words / 200); // Average reading speed: 200 words per minute
        return $minutes;
    }

    // Accessor for formatted date
    public function getFormattedDateAttribute()
    {
        return $this->published_at ? $this->published_at->format('d M Y') : '-';
    }

    // Increment views
    public function incrementViews()
    {
        $this->increment('views');
    }
}