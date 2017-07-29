<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use App\Teacher;
use App\PupilScore;
use App\TeacherScore;
use Illuminate\Http\Request;
use willvincent\Rateable\Rating;

class TeacherController extends Controller
{
    public function getProfile()
    {
    	return view('teacher_profile');
    }

    public function postProfile(Request $request)
    {
    	Teacher::where('id', '=', Auth::user()->id)->update([
    		'fname' => $request->get('fname'),
    		'lname' => $request->get('lname'),
    		'personal_number' => $request->get('personal_number'),
    		'mobile_number' => $request->get('mobile_number'),
    		'subject' => $request->get('subject'),
    		'email' => Auth::user()->email,
    		'username' => Auth::user()->username,
    		'password' => bcrypt($request->get('password'))
    	]);

    	return redirect()->back();
    }

    public function getTeacher($id)
    {
        $teacher = User::where('id', '=', $id)->first()->teacher;

        return view('teacher_info', compact('teacher'));
    }

    public function setScore($id, $score)
    {
        $teacher = Teacher::where('id', '=', $id)->first();

        $rating = new Rating;
        $rating->rating = $score;
        $rating->user_id = $id;

        $teacher->ratings()->save($rating);

        $rating_avg = $teacher->averageRating(); // rating_avg

        $pupil_scores = PupilScore::where('teacher_id', '=', $id)->get();

        $score_sum = 0;

        foreach ($pupil_scores as $key => $pupil_score) {
            $score_sum += $pupil_score->score; // score_sum
        }

        $count = PupilScore::where('teacher_id', '=', $id)->count(); // pupils count       

        $final_score = (($score_sum / $count) * $rating_avg) / 100;

        TeacherScore::where('teacher_id', '=', $id)->update([
            'score' => $final_score
        ]);

        return redirect()->back();
    }
}
