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
    public function show($id) {
        $dish = Dish::findOrFail($id);

        // Vēl nav izveidots routs
        return view('dishes.show', ['dish' => $dish]);
    }

    // Show the form for creating a new resource.
    public function create(){
        $dishCategories = DishCategory::all();
        
        return view('dishes.create', compact('dishCategories'));
    }

    // Persist the resource
    public function store(){
       // dump(request()->all());
       
        $dish = new Dish;
        $dish->category_id = request('dishCategory');
        $dish->name = request('dishName');
        $dish->price = request('dishPrice');

        $dish->save();

        //Šis nosūtīs uz sākumu
        return redirect('/');
    }


    // Show a view to edit existing resource
    public function edit($id){
        $dish = Dish::findOrFail($id);
        return view('dishes.edit', compact('dish'));
    }

    // Persist the edited resource
    // Atjauno izmainīto resursu
    public function update($id){
        $dish = Dish::findOrFail($id);

        $dish->category_id = request('dishCategory');
        $dish->name = request('dishName');
        $dish->price = request('dishPrice');

        $dish->save();

        //Returns to edited resource
        return redirect('/dishes/'. $dish->id);
    }
    // Delete the dishes
    public function destroy(){

    }

}
