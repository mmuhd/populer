<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
	protected $guarded = [];
	
    public function topic()
    {
    	return $this->belongsTo('App\Topic');
    }

    public function user()
    {
    	return $this->belongsTo('App\User');
    }
}
