<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{

    protected $guarded=[];
    public function getRouteKeyName()
    {
        return 'slug';
    }
    public function company(){

        //one to many (Inverse)
        return $this->belongsTo('App\Company');
    }


    public  function users(){
        return $this->belongsToMany(User::class)->withTimestamps();
    }

    public function checkSaved(){


        return \DB::table('job_user')->where('user_id',auth()->user()->id)
            ->where('job_id',$this->id)->exists();
    }

    public  function favourites(){
        return $this->belongsToMany(Job::class,'favourites','job_id','user_id')->withTimestamps();
    }




}
