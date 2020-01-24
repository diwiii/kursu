<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dish extends Model
{
    // Get the category that has this dish
    // $dish->category

    public function category() {
        return $this->belongsTo(DishCategory::class);
    }
}
