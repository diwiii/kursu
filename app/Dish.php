<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dish extends Model
{
    /**
     * The attributes that are mass assignable.
     * 
     * @var array
     * 
     * Lai var izmantot Dish::create() metodi, izveido jaunu modeli
     */
    protected $fillable = [ 'category_id', 'name', 'price', 'image', 'featured' ];
    
    // Get the category that has this dish
    // $dish->category
    public function category() {
        return $this->belongsTo(DishCategory::class);
    }

    /**
     * Func that returns path of the model
     */
    public function path($do = null) {
        if ($do == 'edit') {
            return route('dishes.edit', $this);
        }
        return route('dishes.show', $this);
    }

    /**
     * Šo funkciju izmantot kad pievieno slugu un slugu vajadzētu
     * izveidot automātiski???
     */
    // Palīdz atrast Modeli pēc slug colonas , default ir pēc primaryKey
    // Pārraksta defaulto getRouteKeyName funkciju
    // public function getRouteKeyName() {
    //     return 'slug';
    // }
}
