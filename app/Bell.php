<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bell extends Model
{
    protected $fillable=[
    	'name','start_date','end_date'
    ];
}
