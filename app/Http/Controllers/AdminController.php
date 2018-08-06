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

    public function index()
    {

        $users = User::paginate(5);


        return view('admin.members.index', array('user', $users), compact('user', 'users'));
    }

    public function create()
    {
        return view('admin.members.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [

            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email',
            'username' => 'required|string|max:20|min:5|unique:users',
            'phone' => 'required|digits_between:10,10|unique:users',
            'employerName' => 'required',
            'designation' => 'required',
            'yearOfCompletion' => 'required',
            'mStatus' => 'required',
            'address' => 'required',
            'region' => 'required',
            'diaspora',

        ]);

        $user = User::create([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'username' => $request->username,
            'phone' => $request->phone,
            'employerName' => $request->employerName,
            'designation' => $request->designation,
            'yearOfCompletion' => $request->yearOfCompletion,
            'mStatus' => $request->mStatus,
            'address' => $request->address,
            'region' => $request->region,
            'diaspora' => $request->diaspora,
            'password' => bcrypt('password')
        ]); 


        alert()->success('Member added successfully.')->autoclose(2000);

        return redirect()->route('admin.home');

    }

    public function userDelete($id)
    {
        $user = User::find($id);

        $user->delete();

        alert()->success('Member deleted successfully.')->autoclose(2000);
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


    public function approval()
    {

        $users = User::paginate(5);

        return view('admin.members.approval-queue', compact('users', $users));
    }

    public function approved($id)
    {

        $user = User::find($id);

        $user->approved = 1;

        $user->save();

        alert()->success('Member approved successfully')->autoclose(2000);

        return redirect()->back();
    }


    public function not_approved($id)
    {

        $user = User::find($id);

        $user->approved = 0;

        $user->save();

        alert()->success('Member permission updated successfully')->autoclose(2000);

        return redirect()->back();
    }


}
