@extends('layouts.app')

@section('head')
    <title>Ēdienkarte</title>
@endsection

@section('content')
    @foreach( $dishCategories as $category )
        <h1>{{ $category->name }}</h1>
        <ul>
            @foreach( $category->dishes as $dish )
            <li>id: {{ $dish->id }}| {{ $dish->name }} | {{ $dish->price }}</li>
            @endforeach
        </ul>
    @endforeach
@endsection