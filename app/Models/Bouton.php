<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bouton extends Model
{
    use HasFactory;

    protected $table = "boutons";

    protected $fillable = [
        "btn_slider",
        "btn_about",
        "btn_classes"
    ];
}
