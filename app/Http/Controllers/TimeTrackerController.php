<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class TimeTrackerController extends Controller
{
        public function landing(){
            return view('landing');
        }

        public function getUser(){
           $name = DB::select('select * from users');
           return view('landing',['name'=>$name]);
        }
}