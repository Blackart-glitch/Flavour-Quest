<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MealPlan extends Model
{
    protected $table = 'meal_plans';

    protected $fillable = [
        'user_id',
        'title',
        'description',
        'start_date',
        'end_date',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Define any other relationships or methods as needed.
}
