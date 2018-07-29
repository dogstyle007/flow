<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Illuminate\Support\Facades\Gate;
use Session;
use Alert;

class PaymentController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $users = Auth::user();
        
        $users = User::all();
        
        return view('admin.payment.index', array('user' => $users), compact(['user','users']) );
    }


    public function update(Request $request)
    {
        $user = User::where('username', $request->input('user'))->first();
    
            if(count ($user))
            {
                $user->payment = $request->input('payment');
                $user->update();
            }

            alert()->success('Payment Updated Successfully')->autoclose(3000);
            //Session::flash('success', 'Payment Updated Successfully');
        
        return redirect()->back();
    }
   
}
