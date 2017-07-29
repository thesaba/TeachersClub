<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use willvincent\Rateable\Rateable;
use Illuminate\Notifications\Notifiable;

class Teacher extends Model
{
    //use Rateable;
    use Notifiable;

    protected $fillable = [
        'user_id', 'fname', 'lname', 'personal_number', 'mobile_number', 'subject',
    ];

    public function teacherscore()
    {
    	return $this->hasOne('App\TeacherScore');
    }
}
