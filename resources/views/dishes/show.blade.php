@extends('layouts.app')

@section('head')
    <title>{{$dish->name}}</title>
@endsection

@section('content')

<h1>{{$dish->name}}</h1>
<p>Kategorija: {{$dish->category->name}} | {{$dish->category->id}}</p>
<p>Cena: {{$dish->price}}</p>
@isset($dish->image)
<img src="/storage/{{$dish->image}}" alt="">
@endisset
<p>featured: {{$dish->featured}}</p>

@endsection