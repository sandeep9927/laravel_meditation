<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use willvincent\Rateable\Rateable;

class Blog extends Model
{
    use Rateable;

    public function writer()
    {
    	return $this->belongsTo('App\User','writer_id');
    }

}
