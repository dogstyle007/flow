<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreatePostRequest;
use App\Post;
use App\Reply;
use Auth;
use Illuminate\Database\Eloquent\ModelNotFoundExcpetion;
use Purifier;
use Session;
use Illuminate\Support\Str;
use GrahamCampbell\Markdown\Facades\Markdown;
use Intervention\Image\ImageManagerStatic as Image;
use Alert;
use DOMDocument;

class PostController extends Controller
{
    public function index(Request $request)
    {
        
        
        return view('layouts.postnews');
    }
    
    public function news()
    {
        $posts = Post::with('user')->orderBy('created_at', 'descending')->paginate(5);
        //dd($posts);

        return view('layouts.news', compact('posts'));
    }
    
    
      public function viewPost(Post $post) {
            $post->title; // works!
          return view('layouts.reply', compact('post'));
        }

    
        /*public function store(CreatePostRequest $request)
    {
        $post = new Post();

        $post->user_id = Auth::user()->id;
        $post->title = $request['title'];
        $post->body = Purifier::clean($request['body']);
        

        $post->save();
        // notify()->flash('<h3>Post Published Successfully</h3>', 'success', ['timer' => 2000]); 
        flash('Post Published Successfully')->success();
            
        return redirect('/news');
    }
    
    public function getEditPost($id)
    {
         try
        {
            $post = Post::findOrFail($id);

            if(Auth::user()->id == $post->user_id )
            {
               

                return view('layouts.edit', compact('post'));
            }

            return redirect()->back();
        }
        catch(ModelNotFoundExcpetion $ex)
        {
            return redirect('/');
        }
    }
    
    
     public function saveEditPost(CreatePostRequest $request)
    {
        try
        {
            $post = Post::findOrFail($request['post_id']);

            if(Auth::user()->id == $post->user_id )
            {
                
                $post->body = Purifier::clean($request['body']);


                 $post->save();


                return redirect('/news');
                    }
                }
                catch(ModelNotFoundExcpetion $ex)
                {
                    return redirect('/');
                }
    } */
    
    public function create()
    {
        
        
        return view('admin.discuss');
    }
    
    public function store()
    {
        $r = request();

        $this->validate($r, [
            'title' => 'required|min:15',
            'body' => 'required'
            
        ]);

        $post = Post::create([
            'title' => $r->title,
            'body' => $r->body,
            'user_id' => Auth::id()

        ]);


        alert()->success('Post Published Successfully')->autoclose(2000);
        //alert()->success('Post Published Successfully', 'Optional Title')->autoclose(2000);
       // notify()->flash('<h3>Post Published Successfully</h3>', 'success', ['timer' => 2000]); 
        //flash('Post Published Successfully')->success();
        //Session::flash('success', 'Post Published Successfully');
            
        return redirect()->back();
    }


    public function edit($id)
    {

        return view('layouts.edit', ['post' => Post::where('id', $id)->first()]);
    }


    public function update($id)
    {
        $this->validate(request(), [
            'body' => 'required'
        ]);
        
        $post = Post::find($id);

        $post->body = request()->body;

        $post->save();

        alert()->success('Post Updated Successfully')->autoclose(2000);
        //flash('Post Updated Successfully')->success();
        //Session::flash('success', 'Post Updated Successfully');
            
        return redirect('/news');
    }


    public function reply($id)
    {
        $this->validate(request(), [
            'body' => 'required'
        ]);

        $post = Post::find($id);

        $reply = Reply::create([
            
            'user_id' => Auth::id(),
            
            'post_id' => $id,
            
            'body' => request()->body
        
        ]);

        alert()->success('Reply Submitted Successfully')->autoclose(3000);
        //flash('Reply Success')->success();
        //Session::flash('success', 'Reply Submitted Successfully');

        return redirect()->back();

    }

    public function edit_reply($id)
    {


        return view('layouts.edit_reply', ['reply' => Reply::find($id) ]);
    }


    public function update_reply($id)
    {
        $this->validate(request(), [
            'body' => 'required'
        ]);

        $reply = Reply::find($id);

        $reply->body = request()->body;

        $reply->save();

        //flash('Reply Updated')->success();
        alert()->success('Reply Updated Successfully')->autoclose(3000);
        //Session::flash('success', 'Reply Updated Successfully');

        return redirect()->route('discussions.show', ['slug' => $reply->post->slug]);
        
    }

    public function deletePost(Request $request)
    {
        try
        {
            $post = Post::findOrFail($request['post_id']);

            if(Auth::user()->id == $post->user_id )
            {
                $post->delete();

                alert()->success('Post Deleted Successfully')->autoclose(3000);
                //flash('Post Deleted successfully')->success();
                //Session::flash('success', 'Post Deleted Successfully');
            }

            return redirect('/news');
        }
        catch(ModelNotFoundExcpetion $ex)
        {
            return redirect('/');
        }
    }


    public function deleteReply(Request $request)
    {
        try
        {
            $reply = Reply::findOrFail($request['reply_id']);

            if(Auth::user()->id == $reply->user_id )
            {
                $reply->delete();

                alert()->success('Reply Deleted Successfully')->autoclose(3000);
                //flash('Reply Deleted successfully')->success();
                //Session::flash('success', 'Reply Deleted Successfully');
            }

            return redirect()->back();
        }
        catch(ModelNotFoundExcpetion $ex)
        {
            return redirect('/');
        }
    }
}
