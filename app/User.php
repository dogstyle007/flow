<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Profile;
use App\Mail\WelcomeMail;
use Laratrust\Traits\LaratrustUserTrait;


class User extends Authenticatable
{
    use Notifiable;
    use LaratrustUserTrait; // add this trait to your user model
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    
    protected $table = 'users';
    
    protected $fillable = [
        'firstname', 'lastname', 'email', 'username', 'phone', 'employerName', 'designation', 'yearOfCompletion', 'mStatus', 'about', 'payment', 'region', 'diaspora', 'address', 'password', 'avatar', 'facebook', 'twitter', 'linkedin'
    ];


     public function getFullNameAttribute()
    {
        return sprintf('%s %s',
            $this->firstname,
            $this->lastname
        );
    }

    public function getRouteKeyName()
    {
        return 'username';
    }

    protected $attributes = [
        'about' => 'Tell us about yourself here...'
    ];

    public function profile()
    {
        return $this->hasOne('App\Profile');
    }

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    public function posts()
    {
        return $this->hasMany('App\Post');
    }
    
}
