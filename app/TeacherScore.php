<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TeacherScore extends Model
{
    protected $fillable = [
        'teacher_id', 'score',
    ];
}
