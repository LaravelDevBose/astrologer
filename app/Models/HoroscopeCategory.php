<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HoroscopeCategory extends Model
{
    use HasFactory;
    protected $table = 'horoscopecategory';

    protected $fillable = [
        'title',
        'contant',
        'thumbImage',
        'horoscopeDate',
        'color',
    ];
}
