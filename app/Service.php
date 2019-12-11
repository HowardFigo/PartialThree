<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    public function category () {
		return $this->belongsTo(Category::class)->select('id', 'name');
    }
    
    public function reviews () {
		return $this->hasMany(Review::class)->select('id', 'user_id', 'course_id', 'rating', 'comment', 'created_at');
    }
    
    public function clients () {
		return $this->belongsToMany(Client::class);
	}

	public function profesional () {
		return $this->belongsTo(Professional::class);
	}

}
