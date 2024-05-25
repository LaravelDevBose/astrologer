<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class zordiacModel extends Model
{
    use HasFactory;
    protected $table = 'zordic';

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

}
