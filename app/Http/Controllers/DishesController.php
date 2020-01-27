<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dish;
use App\DishCategory;

class DishesController extends Controller
{
    // List the dishes
    public function index() {
        $dishCategories = DishCategory::all();
        return view('dishes.index', compact('dishCategories'));
    }

    // Single resource  
        // Show method Route Model Binding
    public function show(Dish $dish) {
        return view('dishes.show', compact('dish'));
    }

    // Show the form for creating a new resource.
    public function create(){
        $dishCategories = DishCategory::all();
        return view('dishes.create', compact('dishCategories'));
    }

    // Persist the resource
    public function store(){
        
        // Dish please create model from validated request data.
        Dish::create(request()->validate([
            'category_id' => 'required',
            'name' => 'required',
            'price' => 'numeric | nullable'
        ]));

        //Šis nosūtīs uz sākumu
        return redirect('/');
    }


    // Show a view to edit existing resource
        // Edit method Route Model Binding
    public function edit(Dish $dish){
        $dishCategories = DishCategory::all();
        return view('dishes.edit', compact('dishCategories', 'dish'));
    }

    // Persist the edited resource
    // Atjauno izmainīto resursu
    public function update(Dish $dish){
        
        // Dish please update model from validated request data.
        $dish->update(request()->validate([
            'category_id' => 'required',
            'name' => 'required',
            'price' => 'numeric | nullable'
        ]));

        //Returns to edited resource
        return redirect('/dishes/'. $dish->id);
    }
    // Delete the dishes
    public function destroy(){

    }

}
