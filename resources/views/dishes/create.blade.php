@extends('layouts.app')

@section('head')
    <title>Pievienot jaunu ēdienu</title>
@endsection

@section('content')
{{-- form to create new dish instance --}}
<h1>Pievienot jaunu ēdienu</h1>
<form method="POST" action="/dishes" enctype="multipart/form-data">
    {{-- cross site request forgery --}}
    @csrf
    {{-- iespēja izvēlēties ēdienu kategorijas --}}
    <ul>
        @foreach ($dishCategories as $category)
        <li>{{$category->name}}, id: {{$category->id}}</li>
        @endforeach
    </ul>
    {{-- this is form input field with label --}}
    <div>
        <label for="category_id">Ēdiena iedalījums?</label>
        <input 
        id="category_id"
        {{-- @error directive is fired and adds danger class whenever we get error --}}
        @error('category_id')
        class="danger"
        @enderror
        type="text"
        name="category_id"
        {{-- provide old input incase of error --}}
        value="{{old('category_id')}}"
        required
        autofocus>

        {{-- if error message --}}
        @error('category_id')
        <p>{{$errors->first('category_id')}}</p>
        @enderror
    </div>
    {{-- this is form input field with label --}}
    <div>
        <label for="name">Ēdiena nosaukums</label>
        <input 
        id="name"
        {{-- @error directive is fired and adds danger class whenever we get error --}}
        @error('name')
        class="danger"
        @enderror
        type="text"
        name="name"
        {{-- provide old input incase of error --}}
        value="{{old('name')}}"
        required>

        {{-- if error message --}}
        @error('name')
        <p>{{$errors->first('name')}}</p>
        @enderror
    </div>
    {{-- this is form input field with label --}}
    <div>
        <label for="price">Ēdiena cena</label>
        <input 
        id="price"
        {{-- @error directive is fired and adds danger class whenever we get error --}}
        @error('price')
        class="danger"
        @enderror
        type="text"
        name="price"
        {{-- provide old input incase of error --}}
        value="{{old('price')}}">

        {{-- if error message --}}
        @error('price')
        <p>{{$errors->first('price')}}</p>
        @enderror
    </div>
    {{-- this is form input field with label --}}
    <div>
        <label for="image">Ēdiena bilde</label>
        <input 
        id="image"
        {{-- @error directive is fired and adds danger class whenever we get error --}}
        @error('image')
        class="danger"
        @enderror
        type="file"
        name="image"
        {{-- provide old input incase of error --}}
        value="{{old('image')}}">

        {{-- if error message --}}
        @error('image')
        <p>{{$errors->first('image')}}</p>
        @enderror
    </div>
    {{-- this is form input field with label --}}
    <div>
        <label for="featured">Featured</label>
        <input 
        id="featured"
        {{-- @error directive is fired and adds danger class whenever we get error --}}
        @error('featured')
        class="danger"
        @enderror
        type="checkbox"
        name="featured"
        value="1">

        {{-- if error message --}}
        @error('featured')
        <p>{{$errors->first('featured')}}</p>
        @enderror
    </div>

    <button type="submit">Pievienot</button>
</form>
@endsection

{{-- Pārtulkot latviski error fieldus php un html --}}

{{-- side comments for category forms --}}
{{-- remove category --}}
{{-- if last add new category --}}
    
