@extends('layouts.app')

@section('head')
    <title>Pievienot jaunu kategoriju</title>
@endsection

@section('content')
{{-- form to create new dish instance --}}
<h1>Pievienot jaunu kategoriju</h1>
<form method="POST" action="/cat">
    {{-- cross site request forgery --}}
    @csrf
    <ul>
        @foreach ($dishCategories as $category)
        <li>{{$category->name}}, id: {{$category->id}}</li>
        @endforeach
    </ul>
    {{-- this is form input field with label --}}
    <div>
        <label for="name">Kategorijas nosaukums</label>
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

    <button type="submit">Pievienot</button>
</form>
@endsection

{{-- Pārtulkot latviski error fieldus php un html --}}

{{-- side comments for category forms --}}
{{-- remove category --}}
{{-- if last add new category --}}
    
