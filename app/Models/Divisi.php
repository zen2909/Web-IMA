<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Divisi extends Model
{
    use HasFactory;

    protected $table = ('divisis');

    protected $fillable = ['name', 'description', 'image'];

    // Relasi ke Program
    public function programs()
    {
        return $this->hasMany(Program::class);
    }

    // Relasi ke Member
    public function members()
    {
        return $this->hasMany(Member::class);
    }
}