<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompatibilityCategory extends Model
{
    use HasFactory;
    protected $table = 'compatibilitycategory';

    protected $fillable = [
        'title',
        'contant',
        'thumbImage',
        'compatibilityDate',
        'color',
    ];
}
