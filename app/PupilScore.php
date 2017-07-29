<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PupilScore extends Model
{
    protected $fillable = [
        'pupil_id', 'teacher_id', 'score',
    ];
}
