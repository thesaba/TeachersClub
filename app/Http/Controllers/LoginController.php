<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function getTeacherLogin()
    {
    	return view('teacher_login');
    }

    public function postTeacherLogin(Request $request)
    {
    	if(Auth::attempt(['username' => $request->get('username'), 'password' => $request->get('password')]))
    	{
    	    if(! User::isAdmin(Auth::user()->id))
    	    {
                return redirect()->route('getHome');
            }

            Auth::logout();

            return redirect()->back();
    	}

    	return redirect()->back();
    }

    public function logout()
    {
    	Auth::logout();

        return redirect()->route('getHome');
    }
}
