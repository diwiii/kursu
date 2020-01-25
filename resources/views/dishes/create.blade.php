@extends('layouts.app')

@section('head')
    <title>Pievienot jaunu ēdienu</title>
@endsection

@section('content')
{{-- form to create new dish instance --}}
<h1>Pievienot jaunu ēdienu</h1>
<form method="POST" action="/dishes">
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
        <label for="dishCategory">Ēdiena iedalījums?</label>
        <input 
        id="dishCategory"
        {{-- @error directive is fired and adds danger class whenever we get error --}}
        @error('dishCategory')
        class="danger"
        @enderror
        type="text"
        name="dishCategory"
        {{-- provide old input incase of error --}}
        value="{{old('dishCategory')}}"
        required
        autofocus>

        {{-- if error message --}}
        @error('dishCategory')
        <p>{{$errors->first('dishCategory')}}</p>
        @enderror
    </div>
    {{-- this is form input field with label --}}
    <div>
        <label for="dishName">Ēdiena nosaukums</label>
        <input 
        id="dishName"
        {{-- @error directive is fired and adds danger class whenever we get error --}}
        @error('dishName')
        class="danger"
        @enderror
        type="text"
        name="dishName"
        {{-- provide old input incase of error --}}
        value="{{old('dishName')}}"
        required>

        {{-- if error message --}}
        @error('dishName')
        <p>{{$errors->first('dishName')}}</p>
        @enderror
    </div>
    {{-- this is form input field with label --}}
    <div>
        <label for="dishPrice">Ēdiena cena</label>
        <input 
        id="dishPrice"
        {{-- @error directive is fired and adds danger class whenever we get error --}}
        @error('dishPrice')
        class="danger"
        @enderror
        type="text"
        name="dishPrice"
        {{-- provide old input incase of error --}}
        value="{{old('dishPrice')}}">

        {{-- if error message --}}
        @error('dishPrice')
        <p>{{$errors->first('dishPrice')}}</p>
        @enderror
    </div>

    <button type="submit">Pievienot</button>
</form>
@endsection

{{-- Pārtulkot latviski error fieldus php un html --}}

{{-- side comments for category forms --}}
{{-- remove category --}}
{{-- if last add new category --}}
    
