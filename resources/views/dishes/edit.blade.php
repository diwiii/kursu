@extends('layouts.app')

@section('head')
    <title>{{$dish->name}}</title>
@endsection

@section('content')
{{-- form to create new dish instance --}}
<h1>Rediģēt {{$dish->name}}</h1>
<form method="POST" action="/dishes/{{$dish->id}}">
    {{-- method to use instead of POST --}}
    @method('PUT')
    {{-- cross site request forgery --}}
    @csrf
    {{-- todo: iespēja izvēlēties ēdienu kategorijas --}}
    <div>
        <label for="dishCategory">Ēdiena iedalījums?</label>
        <input type="text" name="dishCategory" id="dishCategory" value="{{$dish->category_id}}" required>
    </div>
    <div>
        <label for="dishName">Ēdiena nosaukums</label>
        <input type="text" name="dishName" id="dishName" value="{{$dish->name}}" required>
    </div>
    <div>
        <label for="dishPrice">Ēdiena cena</label>
        <input type="text" name="dishPrice" id="dishPrice" value="{{$dish->price}}">
    </div>

    <button type="submit">Saglabāt izmaiņas</button>
</form>
@endsection

{{-- side comments for category forms --}}
{{-- remove category --}}
{{-- if last add new category --}}
    
