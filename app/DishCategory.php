<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DishCategory extends Model
{
    // Get the dishes

    //$category->dishes
    
    public function dishes() {
        //vajag pamēģināt arī hasMany(Dish::class) 
        return $this->hasMany('App\Dish', 'category_id'); // select * from dishes where category_id = 

    }
}
