<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    public function service() {
    	return $this->belongsToMany(Service::class);
    }

	public function user () {
		return $this->belongsTo(User::class)->select('id', 'role_id', 'name');
    }
    
}
