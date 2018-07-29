@extends('main')

@section('content')


  <main role="main">

  <!-- Main jumbotron for a primary marketing message or call to action -->
  <div class="jumbotron">
    <div class="container registerbtn">
    @guest  

    <h3 class="display-3 text-center animated wow shake" style="font-size: 40px;" data-wow-duration="2s" data-wow-delay="3s" data-wow-offset="10"  data-wow-iteration="3">Welcome to Old Vandals Association, Guest: </h3>
      <h4 class="text-center animated fadeInDown">Register now to get access to all our features. Once registered and logged in, you will be able to view registered members, post replies to existing topics, so much more. It's also quick and totally free, so what are you waiting for?</h4>
      <p class="text-center"><a class="btn btn-primary btn-lg" href="{{ route('register') }}" role="button"><i class="fas fa-arrow-alt-circle-right"></i> Register</a></p>

    @else
    
    <h3 class="display-3 text-center animated wow shake" style="font-size: 40px;" data-wow-duration="2s" data-wow-delay="3s" data-wow-offset="10"  data-wow-iteration="3">Welcome to Old Vandals Association <br>{{ Auth::user()->firstname . ' ' . Auth::user()->lastname }} </h3>
    <h4 class="text-center animated fadeInDown">Thanks for registering. So you're now a member. What's next? Well, you can start replying to posts, make friends, and much more. Have fun in the forum!</h4>
    <p class="text-center"><a class="btn btn-primary btn-lg " href="{{ url('/news') }}" role="button"><i class="fas fa-search"></i> Whats new?</a></p>

    @endguest

    </div>

        @include('layouts.slider')

    <h1 class="text-center member-standing scrollto ngezoom wow animated fadeInDown"><a  href="{{ url('/standing') }}" class="scrollto ngezoom" ><i class="fas fa-users"></i> MEMBERS IN GOOD STANDING</a><span><h2><br><a href="/pay">HOW TO PAY DUES</a></h2></span></h1>
    
    
  

  </div>
  

  <div class="container">

  <style type="text/css">
      body { background: #444!important; } /* Adding !important forces the browser to overwrite the default style applied by Bootstrap */
    </style>
    
    @include('layouts.second-footer')
    
  </div> <!-- /container -->

</main>

@endsection
