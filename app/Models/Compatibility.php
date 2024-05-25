<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compatibility extends Model
{
    protected $table = 'compatibility';

    protected $fillable = [
        'title',
        'excerpt',
        'contant',
        'thumbImage',
        'Zordic_id',
        'compatibilitycate_id',
        'zordic_compatibility_id',
    ];
}
