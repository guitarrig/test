<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TreeController extends Controller
{


	public function __invoke(){

		$result = DB::select('SELECT * FROM workers');

		$array = [];
		foreach ($result as $value) {
			$value = (array) $value;
			$array[] = $value;
		}

		$workers = self::arrayToTree($array);

		return view('tree', ['workers' => $workers[1]]);
	}




	private function arrayToTree(array $array, int $parentId = null){

    	$array =  array_combine(array_column($array, 'id'), array_values($array));

    	foreach ($array as $k => &$v) {
        	if (isset($array[$v['parent_id']])) {
           	 $array[$v['parent_id']]['children'][$k] = &$v;
        	}

        	unset($v);
    	}

    	return array_filter($array, function($v) use ($parentId) {
        return $v['parent_id'] == $parentId;
    	});
	}

}
