<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpeedData extends Model
{
    protected $table = 'speed_data';

    protected $fillable = ['created_at', 'speed'];
}
