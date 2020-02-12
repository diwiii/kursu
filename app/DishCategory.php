<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DishCategory extends Model
{
    /**
     * The attributes that are mass assignable.
     * 
     * @var array
     * 
     * Lai var izmantot DishCategory::create() metodi, izveido jaunu modeli
     */
    protected $fillable = [ 'name', 'arrangement' ];

    /**
     * Get the dishes
     * 
     * //$category->dishes
     */
    public function dishes() {
        //vajag pamēģināt arī hasMany(Dish::class) 
        return $this->hasMany('App\Dish', 'category_id'); // select * from dishes where category_id = 
    }
    /**
     * Get the featured dish
     * 
     * //$category->featured
     */
    public function featured() {
        return $this->hasOne('App\Dish', 'featured');
    }

    /**
     * Func that returns path of the model
     */
    public function path($do = null) {
        if ($do == 'edit') {
            return route('category.edit', $this);
        }
        return route('category.show', $this);
    }
}
