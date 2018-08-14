@extends('main')

@section('title', 'Edit News - ')

@section('content')

<style>
  .container{width:60%; !important;}
</style>

<div class="container">

    <div class="panel panel-default">
    <h1 class="panel-heading text-center" style="margin-top:20px; color:#fff; font-size: 40px;">Update Post</h1>
        
        <div class="panel-body">
            
            <form action="{{ route('discussions.update', ['slug' => $post->slug]) }}" method="post">
            
                {{ csrf_field() }}

                
                <div class="form-group">
                
                    <label for="body" style="color:#fff;">Post Body</label>
                    
                    <textarea name="body" id="edit" cols="30" role="10" class="form-control">{!! $post->body !!}</textarea>
                
                </div>
                
                <div class="form-group">
                    
                    <button class="btn btn-success btn-sm pull-right" type="submit">Update Post</button>
                
                </div>
            
            </form>
        
        </div>
        
        
    
    </div>

</div>



@endsection