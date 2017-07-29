<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use App\Pupil;
use App\TeacherScore;

class HomeController extends Controller
{
    public function getHome()
    {
    	$data = '';

    	if(Auth::check())
    	{
    		if (! User::isAdmin(Auth::user()->id))
            {
                $score = TeacherScore::where('teacher_id', '=', Auth::user()->teacher->id)->get()[0]['score'];

                $data = "<p class='text-primary'>თქვენი რეიტინგის ქულა: " . $score . " !</p>";

                $pupils = Pupil::where('teacher_id', '=', Auth::user()->teacher->id)->get();

                return view('home', compact('data', 'pupils'));
            }
    	}

    	return view('home');
    }
}
