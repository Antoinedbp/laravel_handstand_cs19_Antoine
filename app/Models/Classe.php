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
        "pricing_id",
        "trainer_id",
        "time",
        "categorie_id",
        "schedule_id",
        "date",
    ];

    public function categorie(){
        return $this->belongsTo(Categorie::class);
    }
 
    public function trainer(){
        return $this->belongsTo(Trainer::class);
    }

    public function pricing(){
        return $this->hasMany(Pricing::class);
    }

    public function tags(){
        return $this->belongsToMany(Tag::class, 'classe_tag', 'tag_id', 'classe_id');
    }

    public function users(){
        return $this->belongsToMany(User::class, 'classe_user');
    }

    public function schedules () {
        return $this->belongsTo(Schedule::class , 'schedule_id');
    }
}
