<?php

use Illuminate\Support\Facades\Route;

use App\Models\Job;

// php -S localhost:8000 -t public run the server 
Route::get('/', function () {

   
    return view('home');
});


Route::get('/jobs', function()  {
    $jobs = Job::with("employer")->paginate(5);
    return view("jobs", [
            "jobs" => $jobs
        ]);
});

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
