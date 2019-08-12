<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
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
        'name', 'nim', 'email', 'password', 'afiliasi', 'phoneNumber', 'lineID'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function caseStudy2019Participant()
    {
        return $this->hasOne('App\casestudy2019participant', 'user_id');
    }

    public function invest2019Participant()
    {
        return $this->hasOne('App\invest2019participant', 'user_id');
    }

    public function shortmovie2019Participant()
    {
        return $this->hasOne('App\shortmovie2019participant', 'user_id');
    }
}

