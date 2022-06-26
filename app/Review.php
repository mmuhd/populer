<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
	protected $fillable = [
        'topic_id', 'user_id', 'body'
    ];
	
    public function topic()
    {
    	return $this->belongsTo('App\Topic');
    }

    public function user()
    {
    	return $this->belongsTo('App\User');
    }
}
