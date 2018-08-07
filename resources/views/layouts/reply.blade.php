@extends('main')

@section('title', 'Reply - ')


@section('content')

<style>
  .container{width:60%;}
</style>

    <div class="container mobile" style="margin-top:20px;">

                <div class="well pull-left"> 
                  <div class="media-body post" style="background-color: #f6f6ec;">
                  <h2 class="post-h2"><a href="/news/{{$post->slug}}">{{ $post->title}}</a></h2>
                  
                    <img src="/uploads/avatars/{{ $post->user->avatar }}" style="width:32px; height:32px; top:10px; left:10px; border-radius:50%">
                    Posted By: <a href="{{url('/dashboard/'.$post->user->username)}}"> {{$post->user->fullName }}</a>
                    <hr>  
                      <p>{!! $post->body  !!}</p><!--<p style="color:#444 !important;">{!! $post->body !!}</p>-->
          
                    <ul class="list-inline list-unstyled">
                     
                    <li><span> 
                      <p style="color:#444 !important;"><i class="fas fa-calendar"></i> Published {{ $post->created_at->diffForHumans()}}</span></p></li>
        
                    @if(Auth::id() == $post->user->id)
                      <li><span><a href="{{ URL::route('discussions.edit', ['id' => $post->id]) }}" class="btn btn-info btn-sm "><i class="fas fa-edit"></i> Edit Post</a></span></li> 

                      {!! Form::open(['route' => 'delete.post', 'id' => 'delete-post-form', 'method' => 'DELETE', 'class' => 'text-right']) !!}
                      
                      {!! Form::hidden('post_id', $post->id) !!}

                      {!! Form::button('Delete', ['class' => 'btn btn-danger btn-sm', 'type' => 'submit']) !!}

                      {!! Form::close() !!}
         
                    @endif  

              </ul>

               </div>
                
               @foreach($post->replies as $reply)


              <div class="panel panel-default">              
                <div class="media-body" style="background-color: #f6f6ec;"> 
                  
                    <img src="/uploads/avatars/{{ $reply->user->avatar }}" style="width:32px; height:32px; top:10px; left:10px; border-radius:50%">
                    Posted By: <a href="{{url('/dashboard/'.$reply->user->username)}}"> {{$reply->user->fullname }}</a>
                    <hr>
                    <p style="color:#444 !important;">{!! $reply->body !!}</p>

                    <ul class="list-inline list-unstyled">
                   
                    <li><span> 
                    <p style="color:#444 !important;"><i class="fas fa-calendar"></i> Published</i> {{ $reply->created_at->diffForHumans()}}</span></p></li>
                  
                    
                @if(Auth::id() == $reply->user->id)

                    <a href="{{ URL::route('reply.edit', ['id' => $reply->id]) }}" class="btn btn-info btn-sm"><i class="fas fa-edit"></i> Edit Reply</a>
                    
                       {!! Form::open(['route' => 'delete.reply', 'id' => 'delete-reply-form', 'method' => 'DELETE', 'class' => 'text-right']) !!}

                       {{ csrf_field() }}
                      
                      {!! Form::hidden('reply_id', $reply->id) !!}

                      {!! Form::button('Delete', ['class' => 'btn btn-danger btn-sm', 'type' => 'submit']) !!}

                      {!! Form::close() !!}


                @endif
          
          

        </div>

           @endforeach

               
      <div class="panel panel-default">
      
        <div class="panel-body">

            <form action="{{ route('discussions.reply', ['id' => $post->id]) }}" method="post">
                {{ csrf_field() }}

            
              <div class="form-group">
                <label  for="reply">Leave a reply</label>
                <textarea name="body" id="summernote" cols="30" rows="10" class="form-control" ></textarea>

              </div>

              <div class="form-group">

              <button class="btn btn-info btn-sm pull-right">Leave a reply</button>

            </div> 

            </form>

        </div>
      
      </div>


          </div>
          
        </div>

@endsection