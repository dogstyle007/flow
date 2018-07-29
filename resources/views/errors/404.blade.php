@extends('main')
@section('title', '404 Page Not Found Error - ')
@section('content')

<div class="container members pagenotfound">

    <h1 style=" font-size: 200px; line-height:1;" >404</h1>

    <h2 class="text-center">Sorry, Page Not Found</h2>

    <h5 class="text-center">The resource requested could not be found on this server!</h5>

    <div class="form-group text-center">
        <a href="/" class=" btn btn-lg">Home Page</a>
    </div>

</div>

<div class="container">

    <style type="text/css">
        body { background: #444!important; } /* Adding !important forces the browser to overwrite the default style applied by Bootstrap */
    </style>
  
  @include('layouts.second-footer')
</div> <!-- /container -->

@endsection