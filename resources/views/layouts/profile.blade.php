@extends('main')

@section('content')

<div class="container">

    <h1>Profile</h1>

     <div class="panel panel-info">
            <div class="panel-heading">
              <h2>{{ $user->firstname . ' ' . $user->lastname }}'s Profile</h2>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-3 col-lg-3 " align="center"> <img src="/uploads/avatars/{{ $user->avatar }}" class="img-circle img-responsive"> </div>

                <form enctype="multipart/form-data" action="{{ url('/dashboard') }}" method="POST">
                <label>Update Profile Image</label>
                <input type="file" name="avatar">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <br>
                <input type="submit" class="pull-left btn btn-sm btn-primary">
            </form>
                <br>

                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                  <tbody>
              <tr>
                <td>Year of Completion:</td>
                <td>{{$user->yearOfCompletion }}</td>
              </tr>

              <td>Phone Number:</td>
                <td><a>{{ $user->phone }}</a></td>
                 <tr>
                <td>Gender:</td>
                <td>{{ $user->gender }}</td>
              </tr>
              <tr>
                <td>Email:</td>
                <td><a><span class="__cf_email__">{{ $user->email }}</span></a></td>
              </tr>
            <tr>
                <td>Address:</td>
                <td>{{ $user->address }}</td>
              </tr>

            </tbody>
                  </table>
                  
                </div>
              </div>
    
</div>

@endsection