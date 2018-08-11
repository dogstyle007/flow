@extends('main')


@section('content')

<div class="container new-member">
    <h2>A new member has been registered and is currently awaiting confirmation</h2>
    <br>
    <h3>Registered member: {{$user['fullname']}}</h3>

    <br/>
    <p>Registered member email: {{$user['email']}}</p>
</div>



@endsection