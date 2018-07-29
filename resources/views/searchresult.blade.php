@extends('main')


@section('content')

<div class="container members">

    <div class="form-group">
        <h1>Search results: {{$query}}</h1>
    </div>

    <div class="row">
        @if($users->count() > 0)

        
            @foreach($users as $user )
            <div class="col-md-5">
                <h2 class="header"><a href="{{url('/dashboard/'.$user->username)}}">{{ $user->fullname }} <img src="/uploads/avatars/{{ $user->avatar }}" style="width:42px; height:42px; postion:absolute; top:10px; left:10px; border-radius:50%"> </a></h2>
                <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                <p><a class="btn btn-secondary btn-center" href="{{url('/dashboard/'.$user->username)}}" role="button">View profile &raquo;</a></p>
            </div>
                
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