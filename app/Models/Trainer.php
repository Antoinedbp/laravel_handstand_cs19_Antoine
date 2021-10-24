<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trainer extends Model
{
    use HasFactory;

    protected $table = "trainers";

    protected $fillable = [
        "img",
        "nom",
        "logo1",
        "linkLogo1",
        "logo2",
        "linkLogo2",
        "logo3",
        "linkLogo3",
        "logo4",
        "linkLogo4"
    ];

    public function classes(){
        return $this->hasMany(Classe::class);
    }

    public function user(){
        return$this->belongsTo(User::class);
    }

    public function icons(){
        return $this->hasMany(Icon::class);
    }
}
