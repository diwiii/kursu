<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DishCategory;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return DishCategory::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $dishCategories = DishCategory::all();
        return view('category.create', compact('dishCategories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        // DishCategory please create model from validated request data.
        DishCategory::create($this->validateCategory());

        //Šis nosūtīs uz sākumu
        return redirect(route('category.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $category
     * @return \Illuminate\Http\Response
     */
    public function show( DishCategory $category )
    {
        //
        return $category;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $category
     * @return \Illuminate\Http\Response
     */
    public function edit( DishCategory $category )
    {
        //
        $dishCategories = DishCategory::all();
        return view('category.edit', compact('dishCategories', 'category'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $category
     * @return \Illuminate\Http\Response
     */
    public function update( DishCategory $category )
    {
        //
        // Dish please update model from validated request data.
        $category->update($this->validateCategory());

        //Returns to edited resource
        return redirect($category->path());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    /**
     * Validate data
     */
    protected function validateCategory() 
    {
        return request()->validate([
            'name' => 'required'
        ]);
    }
}
