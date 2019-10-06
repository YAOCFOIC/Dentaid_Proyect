<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Award extends Model
{
    protected $fillable=[
    	'id','name','descripton','bells_id'
    ];
}
