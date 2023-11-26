<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;
    protected $primaryKey = "id";
    protected $fillable = [
        "name",
        "year_release",
        "director",
        "genre",
        "duration",
        "synopsis",
        "language",
        "puntuaction",
        "actors",
        "image",
    ];
}
