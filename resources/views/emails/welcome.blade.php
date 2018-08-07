@extends('main')


@section('content')

<h2>Welcome to the site {{$user['name']}}</h2>
<br/>
<p>Your registered email-id is {{$user['email']}}</p>

@endsection