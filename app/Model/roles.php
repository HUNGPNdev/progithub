<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class roles extends Model
{
    protected $fillable = ['name','permission'];
    
    public function add_role(){
    	return $this->hasOne('App\Model\ad_roles','roles_id','id');
    }
}
