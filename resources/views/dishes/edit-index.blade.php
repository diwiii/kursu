@extends('layouts.app')

@section('head')
    <title>Ēdieni</title>
@endsection

@section('content')
<h1>Ēdieni</h1>
<table>
@foreach($dishes as $dish)
        <tr>
            <td>
                {{$dish->id}}
            </td>
            <td>
                {{$dish->name}}
            </td>
            <td>
            <a href="/dishes/{{$dish->id}}/edit">Edit</a>
            </td>
        </tr>
@endforeach
</table>

@endsection

{{-- side comments for category forms --}}
{{-- remove category --}}
{{-- if last add new category --}}
    
