<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DailyTarot extends Model
{
    use HasFactory;
    protected $table='daily_tarots';
    protected $guarded=[];
}
