<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use Illuminate\Http\Request;

class SysLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function getLogin()
    {
        return view('sys.login');
    }

    public function postLogin(Request $request)
    {
        if(Auth::attempt(['username' => $request->get('username'), 'password' => $request->get('password')]))
        {
            if(User::isAdmin(Auth::user()->id))
            {
                return redirect()->route('getSysDashboard');
            }

            Auth::logout();

            return redirect()->back();
        }

        return redirect()->back();
    }
}
