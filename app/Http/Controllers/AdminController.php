<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Gate;
use App\User;
use App\Post;
use Illuminate\Support\Collection;
use Session;
use Alert;

class AdminController extends Controller
{

    function __construct()
    {
        $this->middleware('auth');
    }

    public function home()
    {
        $users = User::all();

        $posts = Post::all();

        return view('admin.home', array('user', $users, 'post', $posts), compact('user', 'users', 'post', 'posts'));
    }

    public function members()
    {

        $users = User::paginate(3);


        return view('admin.members', array('user', $users), compact('user', 'users'));
    }

    public function userDelete($id)
    {
        $user = User::find($id);

        $user->delete();

        alert()->success('Member deleted successfully.')->autoclose(3000);
        //Session::flash('success', 'Member deleted successfully.');

        return redirect()->back();
    }

    public function userEdit($id)
    {
        

        return view('admin.edit')->with('user', User::find($id));
    }
    

    public function userUpdate(Request $request, $id, \App\User $user )
    {
        $request->validate( [
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email|unique:users,email,',
            'phone' => 'digits_between:10,10|unique:users,phone',
            'address' => 'required',
            'yearOfCompletion' => 'required'
            
        ]);

        $user = User::find($id);

        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->yearOfCompletion = $request->yearOfCompletion;

        $user->save();


        alert()->success('Member profile updated successfully')->autoclose(2000);
        //Session::flash('success', 'Member profile updated successfully');

        return redirect()->back();
    }
}
