<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	protected $fillable = [
        'name', 'user_id', 'slug'
    ];

    public function topics()
    {
        return $this->hasMany('App\Topic');
    }
}
