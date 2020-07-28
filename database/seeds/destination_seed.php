<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class destination_seed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$data = [
    		[
    			'dest_name' => 	'Korea',
    			'dest_slug' => 	str_slug('korea'),
    			'image'		=>	'',
    			'content'	=>	'',
    			'maps'		=>	''
    		]

    	];
        DB::table('destination_tb')->insert($data);
    }
}
