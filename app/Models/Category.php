<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'description',
        'creation_date',
        'recommended_age',
    ];

    public function movies(): HasMany
    {
        return $this->hasMany(Movie::class, 'fk_category_id');
    }
}
