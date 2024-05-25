<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calendar extends Model
{
    use HasFactory;
    protected $guarded=[];
    protected $table='calendars';
     
    public function months()
    {
        return $this->hasMany(Month::class);
    }
}
