@extends('main')
@section('title', 'Profile - ')

@push('css')
<link href="/css/style.css" rel="stylesheet">
<link href="/css/profile.css" rel="stylesheet">
@endpush

@section('content')

 <div class="container">
          <div class="panel panel-info">
            <div class="panel-heading">
            @if(Auth::id() == $user->id)

            <h2 class="text-center">Update your account information {{ $user->firstname }}</h2>

            @else
            <h2 class="text-center">{{ $user->fullname }}'s Profile</h2>

            @endif
            </div>
            <div class="panel-body profile-update">

            <form action="{{ route('profile.update')}}" method="post">
                    
                {{ csrf_field() }}

                    <div class="form-group">
                        <label for="firstname">First Name </label>
                        <input type="text" name="firstname" value="{{ $user->firstname }}" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="lastname">Last Name </label>
                        <input type="text" name="lastname" value="{{ $user->lastname }}" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="phone">Phone Number </label>
                        <input type="text" name="phone" value="{{ $user->phone }}" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="name">Email </label>
                        <input type="email" name="email" value="{{ $user->email }}"  class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="name">Year Of Completion </label>
                        <input type="text" name="yearOfCompletion" value="{{ $user->yearOfCompletion }}" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="name">Address </label>
                        <input type="text" name="address" value="{{ $user->address }}" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="name">About you </label>
                        <textarea name="about" id="summernote" cols="30" rows="10" class="form-control">{{ $user->about }}</textarea>
                    </div>

                    <div class="form-group">
                       <div class="text-center">
                           <button class="btn btn-success" type="submit">Update profile</button>
                       </div>
                    </div>
            </form>


              <!--<div class="row">
                <div class="col-md-3 col-lg-3 " align="center"> <img src="/uploads/avatars/{{ $user->avatar }}" class="img-circle img-responsive"> </div>

                <form enctype="multipart/form-data" action="{{ url('/dashboard/') }}" method="POST">
                <label>Upload new image</label>
                <input type="file" name="avatar">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <br>
                <input type="submit" class="pull-left btn btn-sm btn-primary">
            </form>-->
             
                  
               
            </div>
          </div>
        </div>


@endsection
