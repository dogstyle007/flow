<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use Image;
use App\User;
use View;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use Session;



class UserController extends Controller
    
{
    
       function __construct()
    {
        $this->middleware('auth', ['except' => ['welcome']]);
    }
    
    
        public function dashboard(Request $request) 
    {
           if(isset($request->id)){
            $users = User::findOrFail($request->id);
        }else{
            $users = Auth::user();
        }
        
        return view('dashboard', array('user' => $users));
    }
    
    
 
    
    public function viewDashboard( \App\User $user)  // retrieve $user using the App\User class
    {
    
     
        return view('dashboard', compact('user'));
    }

    public function update_avatar(Request $request){

        // Handle the user upload of avatar
         if( $request->hasFile('avatar')) {
            $avatar = $request->file('avatar');
            $path = public_path(). '/uploads/avatars/';
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            //$avatar->move($path, $filename);
            Image::make($avatar)->resize(300, 300)->save( public_path('/uploads/avatars/' . $filename ) );
             
            $users = Auth::user();
            $users->avatar = $filename;
            $users->save();
        }
        alert()->success('Profile image updated successfully')->autoclose(2000);
        
        return view('dashboard', array('user' => Auth::user()));

    }
    
    public function members(Request $request){
    
        $users = User::all();

        $users = User::orderBy('firstname', 'asc')->paginate(4);
        

        /*$collections = User::orderBy('firstname', 'desc')->get();
        $results = $collections->sortBy('firstname')->groupBy(function ($item, $key) {
            return substr($item['firstname'], 0, 1);
        }); */

        
        $collections = User::all();

        $results = $collections->groupBy(function ($item, $key) {
            return substr($item['firstname'], 0, 1);
        });
        
        $results->toArray();
            
        return view('layouts.members', array('user' => $users, 'collections' => $results), compact(['user','users', 'collections', 'results']) );

    }


    public function myPagination()

    {

        $collection = User::orderBy('firstname')->get();
        
        $results = $collection->groupBy(function ($item, $key) {
            return substr($item['firstname'], 0, 1);

            
        });
        
        return view('myPagination', compact('results'));

    }


   public function search()
    {
        $query = request('search_text');
        $users = User::where('firstname', 'LIKE', '%' . $query . '%')->orWhere('lastname', 'LIKE', '%' . $query . '%')->paginate(4);
        return view('searchresult',compact('users', 'query'));
    }
  
}
