<?php

use Illuminate\Database\Seeder;

class adminSeeder extends Seeder
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
    			'email'=>'hung@gmail.com',
    			'password'=>bcrypt('123456'),
    			'name'=>'Nguyễn Phi Hùng',
    			'phone'=>'0123456789',
    			'address'=>'HN',
    			'birthday'=>'2000-1-9',
    			'gender'=>'male',
    			'image'=>'',
    			'status'=>1
    		],
    	];
        DB::table('admin_tb')->insert($data);
    }
}
