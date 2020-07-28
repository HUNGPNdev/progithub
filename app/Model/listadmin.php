<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class listadmin extends Model
{
    protected $table = 'admin_tb';
    protected $primaryKey = 'id';
	protected $guarded = [];
}
