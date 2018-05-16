<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'email', 'text', 'shows', 'specials', 'announcements'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
