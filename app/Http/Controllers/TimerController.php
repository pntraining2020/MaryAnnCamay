<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class TimerController extends Controller

{
    public function timeIn(Request $request)
    {
        $timeIn = $request->input('clockIn');
        $data=array('clockIn');
        DB::table('work')->where('timeIn')->insert($data);
    }
    public function timeOut(Request $request)
    {
        $timeIn = $request->input('clockOut');
        $data=array('timeOut');
        DB::table('work')->where('timeOut')->insert($data);
    }
    public function start(Request $request)
    {
        $timeIn = $request->input('start');
        $data=array('start');
        DB::table('break')->where('start')->insert($data);
    }
    public function end(Request $request)
    {
        $timeIn = $request->input('end');
        $data=array('end');
        DB::table('break')->where('end')->insert($data);
    }
}