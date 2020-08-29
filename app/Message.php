<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $table = "messages";


    public function user(){
        $this->belongsTo('App\User');
    }

}
