@extends('main')
@section('title', 'Admin Dashboard - ')
@section('content')

<div class="container members admin">

    <h1>Admin Dashboard</h1>

    <div class="row">
        <div class="col-lg-4">
            <ul class="list-group">
            <li class="list-group-item">
                <a href="{{ route('admin.home') }}">Home</a>
                </li>
                
                @role('admin')

                <li class="list-group-item">
                <a href="{{ route('discussions.create') }}">Post News</a>
                </li>

                <li class="list-group-item">
                <a href="{{ route('admin.members.index') }}">Registered Members</a>
                </li>

                <li class="list-group-item">
                    <a href="{{ route('admin.members.approval') }}">Approval queue</a>
                </li>

                
                @endrole

                @role(['admin', 'mod'])
                <li class="list-group-item">
                <a href="{{ route('payment.index') }}">Payment Update</a>
                </li>

                <li class="list-group-item">
                    <a href="{{ route('admin.members.create') }}">Add new member</a>
                </li>

                @endrole

            </ul>
            
        </div>

        <div class="col-md-8">

            <div class="panel-body">

                <table class="table table-hover">

                    <thead>

                        <th>
                            Registered Users
                        </th>

                        <th>
                            Total Posts
                        </th>

                    </thead>

                

                    <tbody>
               

                    <tr>

                        <td>
                        @if( $users->count() > 0 )
                            <p style="color: #a44343; border: solid #a44343; font-size: 30px;">{{ $users->count()}}</p>        
                            @endif  
                        </td>

                        <td>
                        @if( $posts->count() > 0 )
                            <p style="color: #a44343; border: solid #a44343; font-size: 30px;">{{ $posts->count()}}</p>        
                            
                            @else

                            <p style="color: #a44343; border: solid #a44343; font-size: 30px;">No Post</p> 

                            @endif  
                        </td>
                    
                 </tr>

                 </tbody>
                
                </table>

            </div>
            
        </div>
       
    </div>

</div>

@endsection