<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;

    protected $fillable = ['divisi_id', 'program_name', 'program_image'];

    public function divisi()
    {
        return $this->belongsTo(Divisi::class);
    }
}