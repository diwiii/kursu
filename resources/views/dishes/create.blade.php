@extends('layouts.app')

@section('content')
{{-- form to update category instance --}}
<form action="/p" enctype="multipart/form-data" method="POST">
    @csrf
    @foreach( $dishCategories as $category )
        {{-- list of category names --}}
    <h1>{{ $category->name }}</h1>
        
    <input  id="{{$category->id}}"
            type="text"
            class="form-control @error('categoryName') is-invalid @enderror"
            name="categoryName" value="{{ old('categoryName') }}"
            required autocomplete="on">

    @error('categoryName')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
    <button class="btn btn-primary">Update {{$category->name}}</button>

        {{-- remove category --}}

        {{-- if last add new category --}}
        
    @endforeach
</form>
@endsection
    
