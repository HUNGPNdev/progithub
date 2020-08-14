<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\package;

class ToursModel extends Model
{
	protected $table = 'Tours_tb';
	protected $primaryKey = 'tour_id';
	protected $guarded = [];
	// ------------

	public function packag($id)
	{
		return package::where('pac_id', $id)->first();
	}
	public function packageall($id)
	{
		$paket_no= Array();
		$paket=package::all()->where('status',1);
		$arr=json_decode($id);
		foreach ($paket as $value) {
			$paket_no[] = $value->pac_name;
		}
		return $paket_no;
		// dd($paket_no);
	}
	public function scopeSearch($query){
		$search = request()->searchName;
		$min = (int)request()->minval;
		$max = (int)request()->maxval;
		if ($search) {
			$query = $query->where('tour_name','LIKE','%'.$search.'%');
		}
		
		$query = $query->whereBetween('tour_price',[$min,$max]);

		return $query;
	}
}
