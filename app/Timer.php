<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Timer extends Model
{
   
        protected $fillable = [
            'user_id', 'start', 'end'
        ];
        protected $dates = ['start', 'end'];

        protected $with = ['user'];

        public function user()
        {
            return $this->belongsTo(User::class);
        }

        public function project()
        {
            return $this->belongsTo(TimeTracker::class);
        }

        public function scopeMine($query)
        {
            return $query->whereUserId(auth()->user()->id);
        }
        public function scopeRunning($query)
        {
            return $query->whereNull('end');
        }
}