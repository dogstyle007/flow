@extends('main')


@section('content')

<div class="container">

 <form action="{{ route('summernote.post') }}" method="post">
                        
                        {{ csrf_field() }}
                        
                        <div class="form-group">
                        
                            <label for="title"> Post Title</label>
                            <input name="title" id="title" class="form-control">
                        
                        </div>
                        
                        <div class="form-group">
                        
                            <label for="content">Post Body</label>
            
                            
                            <textarea name="body" id="summernote" cols="30" role="10" class="form-control summernote"></textarea>
                        
                        </div>
                        
                        <div class="form-group">
                            
                            <button class="btn btn-success pull-right" type="submit">Submit Post</button>
                        
                        </div>
                
                </form>

</div>
@endsection