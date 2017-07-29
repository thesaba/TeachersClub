<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email', 'username', 'password', 'isAdmin',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public static function isAdmin($user_id)
    {
        return User::find($user_id)->isAdmin == 1;
    }

    public function teacher()
    {
        return $this->hasOne('App\Teacher');
    }

    public function admin()
    {
        return $this->hasOne('App\Admin');
    }
}
