<?php

use Illuminate\Support\Facades\Route;

use App\Models\Job;

Route::get('/', function () {
    return view('home');
});


Route::get('/jobs', fn() => view("jobs", [
     "jobs" => Job::all()
 ]));

 Route::get('/jobs/{id}', function($id)  {
     if(!is_integer($id)) {
          // convert id to integer
          $id = (int) $id;
      }
    $job = Job::find($id);
 
    return  view("job", ["job" => $job]);
 });
Route::get('/contact', function () {
    return view("contact");
});
