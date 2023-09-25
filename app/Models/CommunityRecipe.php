<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CommunityRecipe extends Model
{
    protected $table = 'community_recipes';

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

    // Define any other relationships or methods as needed.
}
