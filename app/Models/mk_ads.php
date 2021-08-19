<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
// use DB;
class mk_ads extends Model
{
    protected $table = 'mk_ads';  
    protected $fillable =['name', 'ad_design', 'start_date','place', 'end_date', 'state','district','status'];


    public static function getValues($category='') {
		$query = \DB::table('mk_ads')
						->select('mk_ads.*')
						->where('mk_ads.status', 1);

		if ($category) {
			$query = $query->where('category', $category);
		}

		$result = $query->get();

		$list = [];
		foreach ($result as $row) {
			$list[$row->place] = $row->ad_design;
		}

		return $list;
	}
}
