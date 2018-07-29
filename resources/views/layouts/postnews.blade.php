@extends('main')

@section('title', 'Post News - ')

@section('content')

<div class="container">

<h1>News Page</h1>
    
    
<div class="note">
    
    {!! Form::open(['id' => 'post-news-form']) !!}
  
   		{!! Form::label('topic', 'Post Topic') !!}
   		{!! Form::text('title', null, ['id' => 'title', 'class' => 'form-control', 'placeholder' => 'topic', 'required']) !!}
   		<br/>

        {!! Form::label('body', 'Body') !!}


   	    {!! Form::textarea('body', null, ['id' => 'summernote', 'class' => 'required']) !!}

   		<br/>
   	    {!! Form::button('Publish Post', ['class' => 'btn btn-lg btn-primary btn-block', 'type' => 'submit']) !!}

{!! Form::close() !!}
    
</div>
    

</div>



@endsection