@extends('layouts.app')

@section('head')
    <title>Pievienot jaunu ēdienu</title>
@endsection

@section('content')
{{-- form to create new dish instance --}}
<h1>Pievienot jaunu ēdienu</h1>
<form action="/dishes" enctype="multipart/form-data" method="POST">
    {{-- cross site request forgery --}}
    @csrf
    {{-- iespēja izvēlēties ēdienu kategorijas --}}
    <ul>
        @foreach ($dishCategories as $category)
        <li>{{$category->name}}, id: {{$category->id}}</li>
        @endforeach
    </ul>
    <div>
        <label for="dishCategory">Ēdiena iedalījums?</label>
        <input type="text" name="dishCategory" id="dishCategory" required>
    </div>
    <div>
        <label for="dishName">Ēdiena nosaukums</label>
        <input type="text" name="dishName" id="dishName" required>
    </div>
    <div>
        <label for="dishPrice">Ēdiena cena</label>
        <input type="text" name="dishPrice" id="dishPrice">
    </div>

    <button type="submit">Pievienot</button>
</form>
@endsection

{{-- side comments for category forms --}}
{{-- remove category --}}
{{-- if last add new category --}}
    
