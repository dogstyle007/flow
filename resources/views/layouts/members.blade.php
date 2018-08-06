@extends('main')
@section('title', 'Members - ')
@section('content')

<div class="container members">
    <h1>Registered Members</h1>
<!-- Example row of columns -->

   <!--<div class="row">
      @foreach ($users as $user)
        <div class="col-md-5">
          <h2 class="header"><a href="{{url('/dashboard/'.$user->username)}}">{{ $user->firstname . ' ' . $user->lastname }} <img src="/uploads/avatars/{{ $user->avatar }}" style="width:42px; height:42px; postion:absolute; top:10px; left:10px; border-radius:50%"> </a></h2>
        
                  <table class="table table-user-information">
                  <tbody>
              <tr>
                <td>Year of Completion:</td>
                <td>{{$user->yearOfCompletion }}</td>
              </tr>

              <tr>
                <td>Region Associated:</td>
                <td>{{ $user->region }}</td>
              </tr>

            </tbody>
            </table>
            
          <p><a class="btn btn-secondary btn-center" href="{{url('/dashboard/'.$user->username)}}" role="button">View profile &raquo;</a></p>
        
        </div>

        @endforeach
    </div>-->

<div class="row">
@foreach($users as $user)
			<div class="col-md-3">
     
				<div class="[ info-card ]">
					<img style="width: 100%" src="/uploads/avatars/{{ $user->avatar }}" />
					<div class="[ info-card-details ] animate">
						<div class="[ info-card-header ]">
							<h1><a href="{{url('/dashboard/'.$user->username)}}"> {{$user->fullname}} </a></h1>
							<h3> {{ $user->region }} </h3>
						</div>
						<div class="[ info-card-detail ]">
							<!-- Description -->
							<p>{!! $user->about !!}</p>
							<div class="social">
              <a href="{{ $user->facebook }}" target="_blank" class="[ social-icon facebook ] animate"><span class="fab fa-facebook-f"></span></a>

								<a href="{{ $user->twitter }}" target="_blank" class="[ social-icon twitter ] animate"><span class="fab fa-twitter"></span></a>

								<a href="{{ $user->linkedin }}" target="_blank" class="[ social-icon linkedin ] animate"><span class="fab fa-linkedin-in"></span></a>
							</div>
						</div>
					</div>
        </div>
      </div>
        @endforeach
  </div>


   <center>{{ $users->appends(Request::all())->render() }}</center>


   <div class="form-group">
  <div class="form_search-wrap">
    <form action="/search" method="get">
        {{ csrf_field() }}
        <input  name="search_text" type="text" class="form-control text-center" placeholder="Type in member name" required/>
        <button type="submit" class="form-control btn btn-primary" >Search</button>
    </form>
 </div>
</div>

    <!-- @foreach ($results as $result)
      <li>  {{ $result }}</li>
    @endforeach -->
<!--<table>
  
@if($users->count() > 0)

@foreach($users as $user)

  <tr>

    <td>{{ $users = $result }}</td>

  </tr>

@endforeach

@endif 

</table>-->


</div>

@endsection