@extends('main')


@section('content')

<div class="container">

    <div class="form-group">
        <h1>Search results: {{ $query }}</h1>
    </div>

    <div class="row">
        @if($users->count() > 0)

        <div class="list-item">
            @foreach($users as $user )
                {{ $user->firstname }}
            @endforeach
        </div>

        @else
            <h1 class="text-center">
                No results found.
            </h1>
        @endif
       
    </div>
    

</div>
@endsection