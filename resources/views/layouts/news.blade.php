@extends('main')

@section('title', 'News - ')


@section('content')

<style>
  .container{width:60%;}
</style>

<div class="container mobile">

    <h1 class="text-center news">Latest News</h1>
    
     @forelse($posts as $post)


              <!-- POST -->
                          
                <div class="well pull-left"> 
                  <div class="media-body post" style="background-color: #f6f6ec; ">
                    <h2 class="post-h2"><a href="/news/{{$post->slug}}">{{ $post->title}}</a></h2>
                    
                    <img src="/uploads/avatars/{{ $post->user->avatar }}" style="width:32px; height:32px; top:10px; left:10px; border-radius:50%">
                    Posted By: <a href="{{url('/dashboard/'.$post->user->username)}}"> {{$post->user->fullname }}</a> 
                    
                    @if(Auth::id() == $user->id)

                    @role('admin', 'mod') 
                    
                      {{ $user->roles->first()->display_name }}
                
                    
                    @endrole
                    
                    @else
                   
                      @if ( Auth::user() == $user->hasRole(['admin','mod']))
                      
                        {{$user->roles->first()->display_name }}

                      @endif

                    @endif

                     <br>
                    
                    <hr>

                    <p>{!! Markdown::parse (str_limit ($post->body, 400)) !!}</p>

                    <a href="/news/{{$post->slug}}">Read more &rarr;</a>

                    <ul class="list-inline list-unstyled">
                   
                    <li><span>
                    <p style="color:#444 !important;"> <i class="fas fa-calendar"></i> Published {{ $post->created_at->diffForHumans()}} | </span>
                   
                    @if( $post->replies->count() > 0 )
                    <i class="fas fa-comment-dots"></i> {{ $post->replies->count() }} comment(s) 
                    @else

                      Be the first to comment :)

                    @endif

                   </p> </li> 
                   
                    </ul>
               </div>

               
          </div>
        

      

      @empty
        <p style="color: #ccc;">No posts found</p>
      @endforelse
    
  <center>{{ $posts->appends(Request::all())->render() }}</center>

</div>

@endsection