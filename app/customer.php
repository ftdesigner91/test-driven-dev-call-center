<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class customer extends Model
{

	protected $guarded = [];
    public function full_name()
    {
    	return $this->first_name .' '. $this->middle_name .' '. $this->last_name;
    }
    
}
