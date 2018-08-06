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

                <li class="list-group-item">
                <a href="{{ route('admin.members.index') }}">Registered Members</a>
                </li>

                <li class="list-group-item">
                <a href="{{ route('payment.index') }}">Payment Update</a>
                </li>

                <li class="list-group-item">
                    <a href="{{ route('admin.members.create') }}">Add new member</a>
                </li>

                 <li class="list-group-item">
                    <a href="{{ route('admin.members.approval') }}">Approval queue</a>
                </li>

                <li class="list-group-item">
                <a href="{{ route('discussions.create') }}">Post News</a>
                </li>
            </ul>
        </div>

        <div class="col-md-8">

         <div class="panel-body">

            <table class="table table-hover">

            <thead>
            
                <th>
                    Name
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
                        
                <a  href="{{ route('user.edit', ['id' => $user->id]) }}" class="btn btn-xs btn-info">Edit</a>        
                        
            </td>

                 <td>

                    @if(Auth::id() !== $user->id)

                    <a  href="{{ route('user.delete', ['id' => $user->id]) }}" class="btn btn-xs btn-danger">Delete</a>      
                    
                    @endif
                                
                </td>
                
            
            </tr>

                @endforeach

                </tbody>
        
             </table>

                <center>{{ $users->appends(Request::all())->render() }}</center>
        
            </div>
            
        </div>

        </div>

   

    </div>



</div>


@endsection