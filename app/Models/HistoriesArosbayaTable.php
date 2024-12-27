<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistoriesArosbayaTable extends Model
{
    use HasFactory;

    protected $table = 'history_arosbaya';

    protected $fillable = [
        'text',
        'image1',
        'image2',
        'image3',
    ];
}