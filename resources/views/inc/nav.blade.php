<a href="{{ route('dishes.index') }}">/home</a>
@isset($dish)
<a href="{{ $dish->path('edit') }}">/edit {{$dish->name}}</a>    
@endisset
