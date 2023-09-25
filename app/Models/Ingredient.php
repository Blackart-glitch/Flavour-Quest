<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    protected $table = 'ingredients';

    protected $fillable = ['name'];

    // Define any other relationships or methods as needed.
    public function recipe()
    {
        return $this->belongsToMany(Recipe::class);
    }
}
