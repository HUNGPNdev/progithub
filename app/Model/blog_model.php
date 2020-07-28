<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Blog_Model extends Model
{
    protected $table = 'blog_tb';
    protected $primaryKey = 'id_blog';
	protected $guarded = [];
}
