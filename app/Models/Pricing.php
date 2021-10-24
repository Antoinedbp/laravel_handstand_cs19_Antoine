<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pricing extends Model
{
    use HasFactory;

    protected $table = "pricings";

    protected $fillable = [
        "nom",
        "titre",
        "prix",
        "mois",
        "description1",
        "description2",
        "description3",
        "description4",
        "btn"
    ];

    public function classes(){
        return $this->belongsTo(Classe::class);
    }
}
