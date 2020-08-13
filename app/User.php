<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Model\roles;


class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = 'admin_tb';

    protected $fillable = [
        'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function hasPermission($route){
        $routes = $this->routes();
        return in_array($route, $routes) ? true : false;
    }
    public function routes(){
        $data = [];
        foreach($this->getRoles as $role){
            $permisson = json_decode($role->permission);
            foreach($permisson as $per){
                if(!in_array($per, $data)){
                    array_push($data, $per);
                }
            }
        }
        return $data;
    }
    public function getRoles(){
        return $this->belongsToMany('App\Model\roles','ad_roles','admin_id','roles_id');
    }
}
