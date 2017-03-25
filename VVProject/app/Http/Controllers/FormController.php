<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;


class FormController extends Controller
{
    //
	public function clean($string) {
	   $string = str_replace('"', '-', $string); // Replaces all spaces with hyphens.

	   return preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.
	}
	public function show(Request $request)
	{
		$brand = array('apple','samsung','lg','asus','oppo','huawei','lenovo','nokia','esia','nexian');

		$game = $request->input('game');
		$photography = $request->input('photography');
		$utility = $request->input('utility');
		$description = $request->input('description');
		$description = strtolower($description);
		$price =$request->input('price');
		$description = explode(" ",$description);

		$int = (int)$price;

		$smartphone;

		if($game){
			$game = true;
			if($game && is_null($photography) && is_null($utility)){

				$smartphone = DB::collection('smartphone')->where('Title','like','%samsung%')->where('priceinrupiah','<',$int)->Where('tagGaming',$game)->get(['Title','UrlPhoto']);
			}
			if($game && $photography && is_null($utility)){				//game and photo
				// echo "game and photo";
				$photography = true;
				$smartphone = DB::collection('smartphone')->where('Title','like','%samsung%')->where('priceinrupiah','<',$int)->Where('tagGaming',$game)->where('tagPhotography',$photography)->get(['Title','UrlPhoto']);

			}else if($game && $photography && $utility){
				$photography = true;
				$utility = true;
				$smartphone = DB::collection('smartphone')->where('Title','like','%samsung%')->where('priceinrupiah','<',$int)->Where('tagGaming',$game)->where('tagPhotography',$photography)->where('tagUtilities',$utility)->get(['Title','UrlPhoto']);
			}	
		}else {
			if($photography){
				$photography=true;
				if(is_null($utility)){
					$smartphone = DB::collection('smartphone')->where('Title','like','%samsung%')->where('priceinrupiah','<',$int)->where('tagPhotography',$photography)->get(['Title','UrlPhoto']);
				}else {
					$utility = true;
					// echo "photo and util";
					$smartphone = DB::collection('smartphone')->where('Title','like','%samsung%')->where('priceinrupiah','<',$int)->where('tagPhotography',$photography)->where('tagUtilities',$utility)->get(['Title','UrlPhoto']);
				}
			}else {
				if($utility){
					$utility=true;
					$smartphone = DB::collection('smartphone')->where('Title','like','%samsung%')->where('priceinrupiah','<',$int)->where('tagUtilities',$utility)->get(['Title','UrlPhoto']);
				}else {
					$smartphone = DB::collection('smartphone')->where('Title','like','%samsung%')->where('priceinrupiah','<',$int)->get(['Title','UrlPhoto']);
				}

			}
		}
		// dd($smartphone);
		return view('recommendation-list')->with(compact('smartphone'));
	}

	public function showDetail($title)
	{
		$smartphone = DB::collection('smartphone')->where('Title','=',$title)->first();
		echo $smartphone['Title'];
		$result = DB::collection('hasil')->where('title','like',$smartphone['Title'])->get();
		dd($result);
		// return view('smartphone-detail')->with(compact('smartphone'));
	}
}
