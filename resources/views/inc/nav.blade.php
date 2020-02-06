<a href="{{ route('dishes.index') }}">/home</a>
@isset($dish)
{{-- this is not working when route dishes.edit not defined --}}
{{-- <a href="{{ $dish->path('edit')}}">/edit {{$dish->name}}</a>     --}}
@endisset
