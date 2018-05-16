<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $admin = false;

    protected $notifications = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'phonenumber', 'password', 'notifications'
    ];

    /**
     * The attributes that are not mass assignable.
     *
     * @var array
     */
    protected $guarded = [
        'admin'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected function isAdmin() {
        return $this->admin;
    }

    public function setPhonenumberAttribute($value) {
        if ( empty($value) ) {
            $this->attributes['phonenumber'] = NULL;
        } else {
            $this->attributes['phonenumber'] = $value;
        }
    }

    public function notifications()
    {
        return $this->hasOne('App\Notification');
    }
}
