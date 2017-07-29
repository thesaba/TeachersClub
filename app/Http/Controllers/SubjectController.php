<?php

namespace App\Http\Controllers;

use App\Teacher;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function getForeign()
    {
    	$teachers = Teacher::where('subject', '=', $this->getCurrentSubject())->get();

    	return view('teachers_list', compact('teachers'));
    }

    public function getMath()
    {
    	$teachers = Teacher::where('subject', '=', $this->getCurrentSubject())->get();

    	return view('teachers_list', compact('teachers'));
    }

    public function getPhysics()
    {
    	$teachers = Teacher::where('subject', '=', $this->getCurrentSubject())->get();

    	return view('teachers_list', compact('teachers'));
    }

    public function getChemistry()
    {
    	$teachers = Teacher::where('subject', '=', $this->getCurrentSubject())->get();

    	return view('teachers_list', compact('teachers'));
    }

    public function getBiology()
    {
    	$teachers = Teacher::where('subject', '=', $this->getCurrentSubject())->get();

    	return view('teachers_list', compact('teachers'));
    }

    public function getGeorgian()
    {
    	$teachers = Teacher::where('subject', '=', $this->getCurrentSubject())->get();

    	return view('teachers_list', compact('teachers'));
    }

    public function getAbilities()
    {
    	$teachers = Teacher::where('subject', '=', $this->getCurrentSubject())->get();

    	return view('teachers_list', compact('teachers'));
    }

    public function getGeography()
    {
    	$teachers = Teacher::where('subject', '=', $this->getCurrentSubject())->get();

    	return view('teachers_list', compact('teachers'));
    }

    public function getHistory()
    {
    	$teachers = Teacher::where('subject', '=', $this->getCurrentSubject())->get();

    	return view('teachers_list', compact('teachers'));
    }

    function getCurrentSubject()
    {
    	$subject = '';

    	$url = url()->current();

    	$segmentsArr = explode('/', $url);

    	$segment = $segmentsArr[sizeof($segmentsArr) - 1];

    	switch($segment) {
    		case "foreign":
    			$subject = "უცხო ენა";
    			break;
    		case "physics":
    			$subject = "ფიზიკა";
    			break;
    		case "chemistry":
    			$subject = "ქიმია";
    			break;
    		case "biology":
    			$subject = "ბიოლოგია";
    			break;
    		case "georgian":
    			$subject = "ქართული ენა";
    			break;
    		case "abilities":
    			$subject = "უნარები";
    			break;
    		case "geography":
    			$subject = "გეოგრაფია";
    			break;    			
    		case "history":
    			$subject = "ისტორია";
    			break;
    		case "math":
    			$subject = "მათემატიკა";
    			break;
    	}

    	return $subject;
    }
}
