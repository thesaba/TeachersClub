<?php

namespace App\Http\Controllers;

use Auth;
use App\Pupil;
use Illuminate\Http\Request;
use App\Events\PupilRegistered;

class PupilController extends Controller
{
    public function getAddPupil()
    {
    	return view('teacher_pupil_add');
    }

    public function postAddPupil(Request $request)
    {
    	$pupil_id = Pupil::create([
    		'fname' => $request->get('fname'),
    		'lname' => $request->get('lname'),
    		'personal_number' => $request->get('personal_number'),
    		'mobile_number' => $request->get('mobile_number'),
    		'teacher_id' => Auth::user()->teacher->id,
    		'email' => $request->get('email'),
    		'naec_username' => $request->get('naec_username'),
    		'naec_password' => $request->get('naec_password')
    	])->id;

        event(new PupilRegistered($pupil_id, Auth::user()->teacher->id));

    	return redirect()->route('getHome');
    }
}
