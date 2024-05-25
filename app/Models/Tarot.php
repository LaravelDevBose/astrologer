<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarot extends Model
{
    use HasFactory;
    protected $table='tarots';
    protected $guarded=[];
}
