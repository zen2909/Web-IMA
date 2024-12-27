<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $fillable = ['divisi_id', 'member_name', 'position', 'member_image'];

    public function divisi()
    {
        return $this->belongsTo(Divisi::class);
    }

}