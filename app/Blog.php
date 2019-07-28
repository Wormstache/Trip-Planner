<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    public function agent(){
        return $this->belongsTo('App\User');
    }
}
