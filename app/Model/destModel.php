<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class destModel extends Model
{
    protected $table = 'destination_tb';
    protected $primaryKey = 'dest_id';
    protected $guarded = [];
}
