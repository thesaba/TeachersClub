<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Events\UserRegistered;

class RegisterController extends Controller
{
    public function getTeacherRegister()
    {
    	return view('teacher_register');
    }

    public function postTeacherRegister(Request $request)
    {
    	$user_id = User::create([
            'email' => $request->get('email'),
            'username' => $request->get('username'),
            'password' => bcrypt($request->get('password'))
        ])->id;

        event(new UserRegistered($user_id, $request));

    	return redirect()->route('getHome');
    }
}
