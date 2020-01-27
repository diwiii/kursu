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
    protected $fillable = [ 'category_id', 'name', 'price' ];
    
    // Get the category that has this dish
    // $dish->category
    public function category() {
        return $this->belongsTo(DishCategory::class);
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
