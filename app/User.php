<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'is_active', 'type',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    const ADMIN_TYPE = 'admin';
    const CONTESTANT_TYPE = 'contestant';
    const CONTESTOR_TYPE = 'contestor';

    public function isAdmin()    {        
        if ($this->type=="admin"){
            return true;
       } else 
       {
            return false;
       }
    }

    public function isContestant()    {        
        if ($this->type=="contestant"){
            return true;
       } else 
       {
            return false;
       }
    }

    public function isContestor()    {        
        if ($this->type=="contestor"){
            return true;
       } else 
       {
            return false;
       }
    }
}
