<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalisedHoroscopeData extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'name',
        'email',
        'birthdate',
        'birth_year',
        'birth_time_know',
        'birth_time',
    ];
}
