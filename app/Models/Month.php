<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Month extends Model
{
    use HasFactory;
    protected $guarded=[];
    protected $table='months';
    
    public function calendar()
    {
        return $this->belongsTo(Calendar::class);
    }
}
