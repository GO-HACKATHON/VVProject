<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class MainController extends Controller
{
    public function cobamongo()
    {
        $users = DB::collection('smartphone')->where('Title', 'like', '%google%')->get();
        return $users;
    }
}
