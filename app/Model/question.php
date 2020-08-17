<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class question extends Model
{
	protected $table = 'user_question';
	protected $fillable = [
    	'name', 'email','phone', 'question',
    ];
}
