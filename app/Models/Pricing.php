<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pricing extends Model
{
    use HasFactory;

    protected $table = "pricings";

    protected $fillable = [
        "titre",
        "prix",
        "description1",
        "description2",
        "description3",
        "description4",
        "btn"
    ];
}
