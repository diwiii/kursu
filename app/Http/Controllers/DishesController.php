<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dish;
use App\DishCategory;

class DishesController extends Controller
{
    // List the dishes
    public function index() {
        //Returns arranged list of categories
        $dishCategories = DishCategory::orderBy('arrangement', 'asc')->get();
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
        Dish::create($this->validateDish());

        //Šis nosūtīs uz sākumu
        return redirect(route('dishes.index'));
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
        $dish->update($this->validateDish());

        //Returns to edited resource
        return redirect($dish->path());
    }
    // Delete the dishes
    public function destroy(){

    }

    protected function validateDish() 
    {

        $data = request()->validate([
            'category_id' => 'required | numeric',
            'name' => 'required',
            'price' => 'numeric | nullable',
            'image' => 'mimes:jpg,jpeg,png | image | nullable',
            'featured' => 'numeric | nullable'
        ]);

        if (array_key_exists('image', $data)) {
            return $this->processDishImage($data);
        }

        return $data;
    }
    /**
     * Returns array with altered 'image' value;
     */
    protected function processDishImage($dishData) 
    {
        $imagePath = $dishData['image']->store('uploads/dishes', 'public');

        //Fetch the image
        $image = \Image::make(public_path("/storage/{$imagePath}"));

        //Limit maximum image width to 460px, also prevent from upsizing if the image width is less than 1200
        $image->widen(460, function ($constraint) {
            $constraint->upsize();
        });
        $image->save();

        //Merge the arrays
        $dishData = array_merge($dishData, ['image' => $imagePath]);

        return $dishData;
    }

}
