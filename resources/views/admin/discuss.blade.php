@extends('main')

@section('title', 'Post News - ')

@section('content')

<div class="container members admin">

<h1>Create News Dashboard</h1>

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
                
                @endrole

                @role(['admin', 'mod'])
                <li class="list-group-item">
                <a href="{{ route('payment.index') }}">Payment Update</a>
                </li>

                <li class="list-group-item">
                    <a href="{{ route('admin.members.create') }}">Add new member</a>
                </li>

                 <li class="list-group-item">
                    <a href="{{ route('admin.members.approval') }}">Approval queue</a>
                </li>

                @endrole
            </ul>
        </div>

            <div class="col-md-8">

            
                <div class="panel panel-default">

        
                    <h3 class="panel-heading text-center" style="margin-top:10px;" >Make A Post</h3>

                    <div class="panel-body">
                        
                    <form action="{{ route('discussions.store') }}" method="post">
                        
                        {{ csrf_field() }}
                        
                        <div class="form-group">
                        
                            <label for="title"> Post Title</label>
                            <input name="title" id="title" value="{{ old('title') }}" class="form-control">
                        
                        </div>
                        
                        <div class="form-group">
                        
                            <label for="content">Post Body</label>
            
                            
                            <textarea name="body" id="edit" cols="30" role="10" class="form-control ">{{ old('body') }}</textarea>
                        
                        </div>
                        
                        <div class="form-group">
                            
                            <button class="btn btn-success pull-right" type="submit">Submit Post</button>
                        
                        </div>
                
                </form>

                    </div>



                </div>


            
            </div>

    </div>

</div>

</div>



@endsection