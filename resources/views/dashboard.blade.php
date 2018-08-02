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

                <h2 class="text-center">Welcome to your dashboard {{ $user->firstname }}</h2>

                @else
                  <h2 class="text-center">{{ $user->fullname }}'s Profile</h2>

                @endif

            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="/uploads/avatars/{{ $user->avatar }}" class="img-circle img-responsive"> <br> <span>
                @if(Auth::id() == $user->id)
                <form enctype="multipart/form-data" action="{{ url('/dashboard') }}" method="POST">

                  {{ csrf_field() }}
                
                <label>Upload new image</label>
                <input type="file" name="avatar">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <br>
                <input type="submit" class="pull-left btn btn-sm btn-primary">
                </form>
                @endif
                </span> </div>
          
                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>Username/nickname:</td>
                        <td>{{ $user->username }}</td>
                      </tr>

                      @if(Auth::id() == $user->id)

                      <tr>
                        <td>Year of completion:</td>
                        <td>{{$user->yearOfCompletion }}</td>
                      </tr>
                      
                      <tr>
                        <td style=" color:#a44343; font-size:20px;">Dues paid:</td>
                        <td style=" color:#a44343; font-size:20px;">GH₵ {{$user->payment }}</td>
                    </tr>

                      <tr>
                        <td>Phone number:</td>
                        <td>{{$user->phone }}</td>
                      </tr>

                      <!--<tr>
                        <td>Email:</td>
                        <td><a href="mailto:{{ $user->email }}">{{ $user->email }}</a></td>
                      </tr>-->

                      <tr>
                        <td>Phone number:</td>
                        <td>{{$user->address }}</td>
                      </tr>

                        @endif

                        <tr>
                          <td>Region associated:</td>
                          <td>{{ $user->region }}</td>
                        </tr>

                        @if(Auth::id() !== $user->id)
                        
                          <tr>
                            <td>About {{ $user->firstname }}:</td>
                            <td class="about-td">{!! $user->about !!}</td>
                          </tr>

                        @else

                          <tr>
                            <td>About you:</td>
                            <td  class="about-td">{!! $user->about !!}</td>
                          </tr>

                        @endif
                    
                    </tbody>
                  </table>

                  @if(Auth::id() == $user->id)
                    <a href="{{route('user.profile')}}" class="btn btn-primary">Update your profile</a>
                    <a href="{{route('profile.password.change')}}" class="btn btn-primary">Change account password</a>
                  @endif
                  
                   
                </div>
              </div>
            </div>
                
            
          </div>
       

         <!-- <div class="panel panel-info">
            <div class="panel-heading">
            
            @if(Auth::id() == $user->id)

            <h2 class="text-center">Welcome to your dashboard {{ $user->firstname }}</h2>

            @else
              <h2 class="text-center">{{ $user->fullname }}'s Profile</h2>

            @endif

            </div>

     

            <div class="panel-body">
              <div class="row dashboard">
                <div class="col-md-3 col-lg-3 " align="center"> <img src="/uploads/avatars/{{ $user->avatar }}" class="img-circle img-responsive"> </div>
                @if(Auth::id() == $user->id)
                <form enctype="multipart/form-data" action="{{ url('/dashboard') }}" method="POST">

                  {{ csrf_field() }}
                
                <label>Upload new image</label>
                <input type="file" name="avatar">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <br>
                <input type="submit" class="pull-left btn btn-sm btn-primary">
                </form>
                @endif
                  
                  
                <br>

                <div class=" col-md-9"> 
                  <table class="table table-user-information">
                  <tbody>
              <tr>
                  <td>Username/nickname:</td>
                  <td>{{ $user->username }}</td>
              </tr>

              
              @if(Auth::id() == $user->id)

              <tr>
                <td>Year of completion:</td>
                <td>{{$user->yearOfCompletion }}</td>
              </tr>

               <tr>
                <td style=" color:#a44343; font-size:20px;">Dues paid:</td>
                <td style=" color:#a44343; font-size:20px;">GH₵ {{$user->payment }}</td>
              </tr>

                <tr>
                  <td>Phone number:</td>
                  <td>{{ $user->phone }}</td>
              </tr>

              <tr>
                <td>Email:</td>
                <td><a><span class="__cf_email__">{{ $user->email }}</span></a></td>
              </tr>

              <tr>
                <td>Address:</td>
                <td>{{ $user->address }}</td>
              </tr>

              @endif

            

              <tr>
                <td>Region associated:</td>
                <td>{{ $user->region }}</td>
              </tr>
              @if(Auth::id() !== $user->id)
              
              <tr>
                  <td>About {{ $user->firstname }}:</td>
                  <td style="border:1px solid #444;">{!! $user->about !!}</td>
              </tr>

              @else

              <tr>
                  <td>About you:</td>
                  <td>{!! $user->about !!}</td>
              </tr>

              @endif

            </tbody>
            </table>
            </div>
                
          </div>
         
            </div>
            
            @if(Auth::id() == $user->id)
            <div class="form-group">
                       <div class="text-center">
                           <button class="btn btn-primary"><a href="{{route('user.profile')}}" style="color:#fff;">Update profile</a></button>
                       </div>
                  </div>


            <div class="form-group">
                       <div class="text-center">
                           <button class="btn btn-info"><a href="{{route('profile.password.change')}}" style="color:#fff;">Change Account Password</a></button>
                       </div>
                    </div>
            @endif

            
          </div>-->
          
        </div>


@endsection
