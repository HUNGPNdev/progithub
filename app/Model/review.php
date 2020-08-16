<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class review extends Model
{
    protected $table = 'review';
    protected $primaryKey = 'review_id';
	protected $guard = [];
}
