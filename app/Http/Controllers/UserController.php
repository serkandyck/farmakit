<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Hash;
use Redirect;

class UserController extends Controller
{
    public function changePassword(Request $request) {

    	$request->validate([
	        'password' => 'required',
	        'new_password' => 'required|string|confirmed|min:6|different:password'          
	    ]);

	    if (Hash::check($request->password, Auth::user()->password) == false)
	    {
	        return Redirect::back()->with('error', 'Eski şifreniz sistemdeki şifre ile eşleşmiyor.');  
	    } 

	    $user = Auth::user();
	    $user->password = Hash::make($request->new_password);
	    $user->save();

	    return Redirect::back()->with('message', 'Şifreniz başarı ile değiştirilmiştir');

    }
}
