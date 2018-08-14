<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;
use Hash;
use App\User;
use Alert;



class ProfilesController extends Controller
{
    
    public function index()
    {


        return view('profile.update')->with('user', Auth::user());
    }
    
    
    public function update(Request $request)
    {
        $request->validate( [
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email|unique:users,email,' . \Auth::user()->id,
            'phone' => 'digits_between:10,10|unique:users,phone,'. \Auth::user()->id,
            'yearOfCompletion' => 'required',
            'about' => 'min:20',
            'facebook',
            'twitter', 
            'linkedin',
            
        ]);

        $user = Auth::user();

        /*if($request->hasFile('avatar'))
        {
            $avatar = $request->avatar;

            $avatar_new_name = time() . $avatar->getClientOriginalName();

            $avatar->move('/uploads/avatars/', $avatar_new_name);

            $user->avatar = '/uploads/avatars/' . $avatar_new_name ;

            $user->save() ;
        }*/

        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->yearOfCompletion = $request->yearOfCompletion;
        $user->about = $request->about;
        $user->facebook = $request->facebook;
        $user->twitter = $request->twitter;
        $user->linkedin = $request->linkedin;

        $user->save();


        alert()->success('Your account details have been successfully saved!')->autoclose(3000);
        //Session::flash('success', 'Account profile updated successfully');

        return redirect()->route('dashboard');
    }


    public function passwordChange()
    {

        return view('/profile.change_password');
    }

    public function passwordUpdate(Request $request)
    {
        $this->validate($request, [
            'password' => 'required_with:new_password|min:6',
            'new_password' => 'required|confirmed|min:6',
        ]);
        
        $user = Auth::user();

        if (Hash::check($request->password, $user->password)) { 
            $user->fill([
             'password' => Hash::make($request->new_password)
             ])->save();

       
             alert()->success('Password changed successfully')->autoclose(3000);
            //Session::flash('success', 'Password changed successfully');
        return redirect()->back();
        
        }
        
        else 
        
        {   
            alert()->error('Current password did not match')->autoclose(3000);
            //Session::flash('error', 'Current password did not match');
            return redirect()->back();
        }

    }
}
