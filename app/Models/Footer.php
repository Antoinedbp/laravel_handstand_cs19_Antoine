<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Footer extends Model
{
    use HasFactory;

    protected $table = "footers";

    protected $fillable = [
        "logo",
        "description",
        "logo_mail",
        "mail",
        "logo_tel",
        "tel",
        "logo_adress",
        "adress",
        "titre_1",
        "logo_1",
        "tweet_1",
        "site_1",
        "logo_2",
        "tweet_2",
        "site_2",
        "titre_2",
        "input_1",
        "input_2",
        "input_3",
        "btn",
        "copyright"
    ];
}
