<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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
        'fk_category_id',
    ];

    public function category():BelongsTo
    {
        return $this->belongsTo(Category::class, 'fk_category_id')->withDefault();
    }
}
