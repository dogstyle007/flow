@extends('main')

@section('title', 'Edit News - ')

@section('content')

<div class="container">

    <div class="panel panel-default">
    <h1 class="panel-heading text-center" style="color: #fff; margin-top:10px;">Update Post</h1>
        
        <div class="panel-body">
            
            <form action="{{ route('discussions.update', ['id' => $post->id]) }}" method="post">
            
                {{ csrf_field() }}

                
                <div class="form-group">
                
                    <label for="body">Post Body</label>
                    
                    <textarea name="body" id="summernote" cols="30" role="10" class="form-control">{!! $post->body !!}</textarea>
                
                </div>
                
                <div class="form-group">
                    
                    <button class="btn btn-success pull-right" type="submit">Update Post</button>
                
                </div>
            
            </form>
        
        </div>
        
        
    
    </div>

</div>



@endsection