@extends('layouts.app')

@section('head')
    <title>{{$dish->name}}</title>
@endsection

@section('content')

<h1>{{$dish->name}}</h1>

@endsection