<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Horoscope extends Model
{
    protected $table = 'horoscope';

    protected $fillable = [
        'title',
        'excerpt',
        'contant',
        'thumbImage',
        'Zordic_id',
        'horoscopecate_id',
    ];
}
