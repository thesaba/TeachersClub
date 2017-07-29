<?php

namespace App\Listeners;

use App\PupilScore;
use App\Events\PupilRegistered;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SetPupilFakeScore
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
     * @param  PupilRegistered  $event
     * @return void
     */
    public function handle(PupilRegistered $event)
    {
        PupilScore::create([
            'pupil_id' => $event->pupilId,
            'teacher_id' => $event->teacherId,
            'score' => rand(5, 50)
        ]);
    }
}
