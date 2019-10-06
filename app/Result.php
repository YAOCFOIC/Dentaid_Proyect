<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    protected $fillable=[
    	'id','users_id','Points','response','activities_id'
    ];

    public function user()
    {
    	return $this->belongsTo('App\User','users_id','id');
    }
}
