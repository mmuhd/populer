<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;




class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'provider', 'provider_id', 'avatar',
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

    public function topics(){
        return $this->hasMany('App\Topic');
    }

    public function checkIfUserUpvoted($topic)
    {
        $voted = Upvote::where([
            ['user_id', $this->id],
            ['topic_id', $topic->id]
            ])
            ->count();

        if($voted){
            return true;
        } else {
            return false;
        }
    }

    public function myUpvotes()
    {
        return $this->hasMany('App\Upvote');
    }

    public function reviews()
    {
        return $this->hasMany('App\Review');
    }


}
