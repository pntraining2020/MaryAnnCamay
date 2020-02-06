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

        public function index()
        {
            return TimeTracker::mine()->with('timers')->get()->toArray();
        }

        public function store(Request $request)
        {
            // returns validated data as array
            $data = $request->validate(['name' => 'required|between:2,20']);

            // merge with the current user ID
            $data = array_merge($data, ['user_id' => auth()->user()->id]);

            $project = TimeTracker::create($data);

            return $project ? array_merge($project->toArray(), ['timers' => []]) : false;
        }
}