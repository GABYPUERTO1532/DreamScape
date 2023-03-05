<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class room_has_reservation extends Model
{
    use HasFactory;
    public $table="room_has_reservation";
    public $timestamps=FALSE;
}

