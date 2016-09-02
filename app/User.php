<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $appends = ['role_names', 'role_list'];

    public function roles()
    {
        return $this->belongsToMany('App\Role');
    }

    public function hotels()
    {
        return $this->hasMany('App\Hotel');
    }

    public function reservations()
    {
        return $this->hasMany('App\Reservation');
    }

    public function getRoleListAttribute()
    {
        return $this->roles->lists('id')->toArray();
    }

    public function getRoleNamesAttribute()
    {
        return $this->roles->lists('role')->all();
    }
}
