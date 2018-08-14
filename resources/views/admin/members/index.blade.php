@extends('main')
@section('title', 'Admin Dashboard - Members ')
@section('content')

<div class="container members admin">
<h1>Registered Members</h1>
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

         <br>

        <div style="overflow-x:auto;">
            
            <table class="table table-hover">

            <thead>
            
                <th>
                    Name
                </th>

                <th>
                    Admin
                </th>

                <th>
                    Moderator
                </th>
                
                <th>
                    Edit
                </th>

                <th>
                    Delete
                </th>

            </thead>

        <tbody>

        @foreach($users as $user)

        <tr>

             <td>
                        
                <a  href="{{url('/dashboard/'.$user->username)}}">{{ $user->fullname}}</a>        
                        
            </td>

             <td>

                    
            @if(Auth::id() !== $user->id && $user->hasRole('admin') )
                <a  href="{{ route('admin.members.not.admin', ['id' => $user->id]) }}" class="btn btn-sm btn-danger">Revoke admin access</a>

            @elseif(Auth::id() !== $user->id && $user->approved ) 

                <a  href="{{ route('admin.members.admin', ['id' => $user->id]) }}" class="btn btn-sm btn-success">Make admin</a>
            
            @elseif(Auth::id() !== $user->id ) 

                <a class="btn btn-sm btn-info">User not approved</a>

            @endif 


                
            </td>

            <td>

                @if(Auth::id() !== $user->id && $user->hasRole('mod') )
                    <a  href="{{ route('admin.members.not.moderator', ['id' => $user->id]) }}" class="btn btn-sm btn-danger">Revoke moderator access</a>

                @elseif(Auth::id() !== $user->id && $user->approved ) 
              
                    <a  href="{{ route('admin.members.moderator', ['id' => $user->id]) }}" class="btn btn-sm btn-success">Make moderator</a>
              
              
                @elseif(Auth::id() !== $user->id ) 

                    <a class="btn btn-sm btn-info">User not approved</a>

                @endif 

              
                        
            </td>

            <td>
                        
                <a  href="{{ route('user.edit', ['id' => $user->id]) }}" class="btn btn-sm btn-primary">Edit</a>        
                        
            </td>

                 <td>

                    @if(Auth::id() == $user->id )

                    <a  href="{{ route('user.delete', ['id' => $user->id]) }}" class="btn btn-sm btn-danger">Delete</a>      
                    
                    @elseif(Auth::id() !== $user->id && ! $user->hasRole('admin') )

                    <a  href="{{ route('user.delete', ['id' => $user->id]) }}" class="btn btn-sm btn-danger">Delete</a>      

                    @endif
                                
                </td>
                
            
            </tr>

                @endforeach

                </tbody>
        
             </table>

            </div>

                <center>{{ $users->appends(Request::all())->render() }}</center>
        
            </div>
        </div>

    </div>

</div>


@endsection