@extends('layouts.app')

@section('head')
    <title>{{$category->name}}</title>
@endsection

@section('content')
{{-- form to create new category instance --}}
<h1>Rediģēt {{$category->name}}</h1>
<form method="POST" action="{{ route('category.update', $category->id) }}">
    {{-- method to use instead of POST --}}
    @method('PUT')
    {{-- cross site request forgery --}}
    @csrf
    {{-- todo: iespēja izvēlēties ēdienu kategorijas --}}
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
        value="{{old('name') ?? $category->name}}"
        required
        autofocus>

        {{-- if error message --}}
        @error('name')
        <p>{{$errors->first('name')}}</p>
        @enderror
    </div>
    <button type="submit">Saglabāt izmaiņas</button>
</form>
@endsection

{{-- side comments for category forms --}}
{{-- remove category --}}
{{-- if last add new category --}}
    
