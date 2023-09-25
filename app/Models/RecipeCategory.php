<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RecipeCategory extends Model
{
    public $timestamps = false;

    protected $table = 'recipe_categories';

    protected $fillable = [
        'recipe_id',
        'category_id',
    ];

    // Define any other relationships or methods as needed.
}
