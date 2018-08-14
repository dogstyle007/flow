@extends('main')

@section('title', 'Edit Reply - ')

@section('content')

<style>
  .container{width:60%; !important;}
</style>

<div class="container">

    <div class="panel panel-default">
        <div class="panel-heading text-center" style="margin-top:20px; color:#fff; font-size: 40px;">Update reply</div>
        
        <div class="panel-body">
            
            <form action="{{ route('reply.update', ['id' => $reply->id]) }}" method="post">
            
                {{ csrf_field() }}

                
                <div class="form-group">
                
                    <label for="body" style="color:#fff;">Edit Reply</label>
                    
                    <textarea name="body" id="edit" cols="30" role="10" class="form-control">{!! $reply->body !!}</textarea>
                
                </div>
                
                <div class="form-group">
                    
                    <button class="btn btn-success pull-right" type="submit">Update Reply</button>
                
                </div>
            
            </form>
        
        </div>
        
        
    
    </div>

</div>



@endsection