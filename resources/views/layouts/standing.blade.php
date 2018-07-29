@extends('main')

@section('title', 'Member Standing - ')

@section('content')

<div class="container standing">

<h1> MEMBERS IN GOOD STANDING</h1>

   <table border = "1" width = "100%">
  
         <tr>
         
            <td>
               <table border = "1" width = "100%">
                  <tr>
                     <th><strong>Name</strong></th>
                     <th><strong>Region Associated</strong></th>
                  </tr>
                  @foreach ($users as $user)
                  
                  <tr>
                     <td><a href="{{url('/dashboard/'.$user->username)}}">{{ $user->firstname . ' ' . $user->lastname }}</a></td>
                     
                     <td> {{ $user->region }}</td>
                  </tr>
                  
                  @endforeach
                  
               </table>
               
            </td>
            
         </tr>
         
      </table>

      <center style="margin-top:20px;">{{ $users->links() }}</center>
      

</div>


@endsection