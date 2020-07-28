<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class guider extends Model
{
    protected $table = 'TourTeam_tb';
    protected $primaryKey = 'guider_id';
	protected $guarded = [];
}
