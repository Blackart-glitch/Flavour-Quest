<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    protected $fillable = [
        'user_id',
        'title',
        'description',
        'instructions',
        'image_url',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function ingredients()
    {
        return $this->belongsToMany(Ingredient::class)->withPivot('quantity', 'unit');
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function mealPlans()
    {
        return $this->belongsToMany(MealPlan::class);
    }

    public function favorites()
    {
        return $this->hasMany(Favorite::class);
    }

    // Define any other relationships or methods as needed.
}
