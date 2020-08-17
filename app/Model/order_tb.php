<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class order_tb extends Model
{
    protected $table = 'order_tb';
	protected $fillable = [
    	'name', 'email','phone', 'address', 'departure', 'tour_name','destination', 'children', 'adults', 'package','total', 'tour_price',
    ];
}
