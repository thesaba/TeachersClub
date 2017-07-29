<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use Illuminate\Http\Request;

class SysDashboardController extends Controller
{
    function __construct()
    {
        $this->middleware('admin');
    }

    public function getDashboard()
    {
//        if (Auth::user())
//        {
//            if (User::isAdmin(Auth::user()->id))
//            {
//                return view('sys.dashboard');
//            }
//        }
//
//        return redirect()->route('getSysLogin');

        return view('sys.dashboard');
    }
}
