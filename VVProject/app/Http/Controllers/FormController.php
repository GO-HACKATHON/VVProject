<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;


class FormController extends Controller
{
    //
    public function show(Request $request)
	{
		$brand = array('apple','samsung','lg','asus','oppo','huawei','lenovo','nokia','esia','nexian');
		// $all = $request->all();
		// var_dump($all);
		$game = $request->input('game');
		$photography = $request->input('photography');
		$utility = $request->input('utility');
		$description = $request->input('description');
		$description = strtolower($description);
		
		$description = explode(" ",$description);


		// echo $title;
		if($game==NULL){
			$game = false;
		}else {
			$game = true;
		}
		if(is_null($photography)){
			$photography = false;
		}else {
			$photography = true;
		}
		if(!$utility){
			$utility = false;
		}else{
			$utility = true;
		}

		// echo "game ".$game;
		// echo " photo ".$photography;
		// echo " util ".$utility;
		
		// var_dump($game);
		
		// echo $smartphone;
		// var_dump($description);
		foreach ($description as $value) {
			// echo $value;
			# code...
			if (in_array($value, $brand)) {
				$specific_band = 1;
				echo $value;
				# code...
			}	
		}
		$smartphone = DB::collection('smartphone')->where('tagGaming',$game)->orWhere('tagPhotography',$photography)->orWhere('tagUtilities',$utility)->get();
	
		// $smartphone = DB::collection('smartphone')->where('Title','like','%acer%')->get(['Title']);
	

		// $smartphone = DB::collection('smartphone')->get();
		echo count($smartphone);
		echo $smartphone;


	}
}
