<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistoriesImaTable extends Model
{
    use HasFactory;

    protected $table = 'history_ima';

    protected $fillable = [
        'text',
        'image1',
        'image2',
        'image3',
    ];
}