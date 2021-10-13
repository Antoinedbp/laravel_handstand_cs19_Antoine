<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classe extends Model
{
    use HasFactory;

    protected $table = "classes";

    protected $fillable = [
        "img",
        "logo_hover",
        "titre",
        "logo_coach",
        "coach",
        "logo_time",
        "time",
    ];
}
