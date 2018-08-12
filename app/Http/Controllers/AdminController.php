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
use App\Mail\MemberApproved;
use App\Mail\ModeratorAlert;
use App\Mail\AdminAlert;
use Illuminate\Support\Facades\Mail;

class AdminController extends Controller
{

    function __construct()
    {
        $this->middleware('auth');
        $this->middleware('check-permissions');
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
            'email' => 'required|email|unique:users,email,' . $id,
            'phone' => 'digits_between:10,10|unique:users,phone,' . $id,
            'address',
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

        alert()->success('User approved successfully')->autoclose(2000);

        Mail::to($user['email'])->send(new MemberApproved($user));

        return redirect()->back();
    }


    public function not_approved($id)
    {

        $user = User::find($id);

        $user->approved = 0;
        //$user->detachRole("mod");
        $user->detachRoles();

        $user->save();

        alert()->success('User permission updated successfully')->autoclose(2000);

        return redirect()->back();
    }

    public function admin($id)
    {

        $user = User::find($id);

        $user->attachRole("admin");
        $user->detachRole("mod");

        $user->save();

        alert()->success('User now an administrator')->autoclose(2000);

        Mail::to($user['email'])->send(new AdminAlert($user));

        return redirect()->back();
    }


    public function not_admin($id)
    {

        $user = User::find($id);

        $user->detachRole("admin");

        $user->save();

        alert()->success('User removed as admin')->autoclose(2000);

        return redirect()->back();
    }


    public function moderator($id)
    {

        $user = User::find($id);

        $user->attachRole("mod");
        $user->detachRole("admin");

        $user->save();

        alert()->success('User now a moderator')->autoclose(2000);

        Mail::to($user['email'])->send(new ModeratorAlert($user));

        return redirect()->back();
    }


    public function not_moderator($id)
    {

        $user = User::find($id);

        $user->detachRole("mod");

        $user->save();

        alert()->success('User removed as moderator')->autoclose(2000);

        return redirect()->back();
    }

}
