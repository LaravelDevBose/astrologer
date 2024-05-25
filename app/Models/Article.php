<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'article';

    protected $fillable = [
        'title',
        'excerpt',
        'contant',
        'thumbImage',
        'Zordic_id',
        'articlecate_id',
    ];
}
