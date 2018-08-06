@extends('main')

@section('title', 'Member Standing - ')

@section('content')

<div class="container standing">

<h1 style="color:#fff;"> MEMBERS IN GOOD STANDING</h1>

   <table border = "1" width = "100%">
  
         <tr>
         
            <td>
               <table border = "1" width = "100%">
                  <tr>
                     <th><strong>Name</strong></th>
                     <th><strong>Region Associated</strong></th>
                  </tr>
                  @foreach ($users as $user)
                        @if($user->payment > 0)
                  
                              <tr>
                              <td><a href="{{url('/dashboard/'.$user->username)}}">{{ $user->fullname }}</a></td>
                              
                              <td> {{ $user->region }}</td>
                              </tr>

                        @endif
                  
                  @endforeach
                  
               </table>
               
            </td>
            
         </tr>
         
      </table>

      <center style="margin-top:20px;">{{ $users->links() }}</center>
      

</div>


@endsection