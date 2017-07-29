<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pupil extends Model
{
    protected $fillable = [
        'fname', 'lname', 'personal_number', 'mobile_number', 'teacher_id', 'email', 'naec_username', 'naec_password',
    ];
}
