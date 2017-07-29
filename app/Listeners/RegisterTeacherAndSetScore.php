<?php

namespace App\Listeners;

use App\Teacher;
use App\TeacherScore;
use App\Events\UserRegistered;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class RegisterTeacherAndSetScore
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  UserRegistered  $event
     * @return void
     */
    public function handle(UserRegistered $event)
    {
        $teacherId = Teacher::create([
            'user_id' => $event->userId,
            'fname' => $event->request->get('fname'),
            'lname' => $event->request->get('lname'),
            'personal_number' => $event->request->get('personal_number'),
            'mobile_number' => $event->request->get('mobile_number'),
            'subject' => $event->request->get('subject'),
        ])->id;

        TeacherScore::create([
            'teacher_id' => $teacherId,
            'score' => '1'
        ]);
    }
}
