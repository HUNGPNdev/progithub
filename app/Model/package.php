<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class package extends Model
{
    protected $table = 'package_include';
    protected $primaryKey = 'pac_id';
	protected $guarded = [];
}
