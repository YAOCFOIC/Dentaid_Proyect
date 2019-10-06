<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $fillable=[
    	'id','users_id','bells_id','date_create'
    ];
}
