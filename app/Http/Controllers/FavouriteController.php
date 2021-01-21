<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller;
use App\Job;
use Illuminate\Http\Request;

class FavouriteController extends Controller
{
  public function saveJob($id){
   $jobId=Job::find($id);
   $jobId->favourites()->attach(auth()->user()->id);
   return redirect()->back();

  }

    public function unSavedJob($id){
        $jobId=Job::find($id);
        $jobId->favourites()->detach(auth()->user()->id);
        return redirect()->back();

    }

}
