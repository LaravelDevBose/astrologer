<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AllPagePlanet extends Model
{
    use HasFactory;
    protected $table = 'backend_planets';

    protected $guarded = [];
}
