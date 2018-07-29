<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Input;
use Validator;
use Redirect;
use View;


class UploadController extends Controller
{
    public function view() {
		return view('dashboard');
	}

	public function uploaddd(Request $request) {
		$this->validate($request, [
	    	'avatar' => 'mimes:jpeg,bmp,png', //only allow this type extension file.
		]);

		$file = $request->file('avatar');
		// image upload in public/upload folder.
		$file->move('uploads/avatars', $file->getClientOriginalName()); 
		echo 'Image Uploaded Successfully';
	}
}
