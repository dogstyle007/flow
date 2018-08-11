<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class PagesController extends Controller
{

    function __construct()
  {
    $this->middleware('auth', ['except' => ['pay', 'about']]);
  }

  public function standing(Request $request)
  {
    $users = User::all();

    $users = User::orderBy('payment', 'dsc')->paginate(10);
    
    return view('layouts.standing', array('user' => $users), compact(['user','users']) );
  }



  public function pagenotfound()
  {
      return view('errors.pagenotfound');
  }

  public function about()
  {
    return view('layouts.about');
  }

  public function pay()
  {
    return view('layouts.pay');
  }

  public function new_member()
  {
    return view('vendor.mail.welcome.index',['name' => 'index']);
  }
}
