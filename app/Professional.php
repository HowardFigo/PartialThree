<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Professional extends Model
{
    public function services() {
		return $this->hasMany(Service::class);
	}

	public function user() {
		return $this->belongsTo(User::class);
	}
}
