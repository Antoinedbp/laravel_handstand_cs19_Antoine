<?php

namespace App\Models;

use App\Http\Middleware\Coach;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classe extends Model
{
    use HasFactory;

    protected $table = "classes";

    protected $fillable = [
        "img",
        "titre",
        "package",
        // "trainer_id",
        "time",
        // "categorie_id",
        "date",
    ];

    public function categorie(){
        return $this->belongsTo(Categorie::class);
    }

    public function trainer(){
        return $this->belongsTo(Trainer::class);
    }

    public function pricing(){
        return $this->hasOne(Pricing::class);
    }

    public function tags(){
        return $this->belongsToMany(Tag::class, 'classe_tag', 'tag_id', 'classe_id');
    }

    public function users(){
        return $this->belongsToMany('classe_user', 'user_id', 'classe_id');
    }
}
