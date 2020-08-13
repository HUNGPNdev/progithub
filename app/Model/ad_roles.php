<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ad_roles extends Model
{
    protected $fillable = ['admin_id','roles_id'];
    public $timestamps = false;
    public function admin(){
    	return $this->hasOne('App\User','id','admin_id');
    }
}
