<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/jobs', function () {
    return view("jobs",[
        "jobs" => [
           [
                "id"   => 1,
                "title"=> "Software, Developer",
                "location"=> "Winnipeg, Canada",
                "salary"=> "$100,000",
           ],
           [
                "id"   => 2,
                "title"=> "back-end, Developer",
                "location"=> "Winnipeg, Canada",
                "salary"=> "$100,000",
           ],
           [     
                "id"   => 3,
                "title"=> "front-end Developer",
                "location"=> "Winnipeg, Canada",
                "salary"=> "$100,000",
           ]
        ]
    ]);
});

Route::get('/jobs/{id}', function ($id) {
    $jobs = [
        [
             "id"   => 1,
             "title"=> "Software, Developer",
             "location"=> "Winnipeg, Canada",
             "salary"=> "$100,000",
        ],
        [
             "id"   => 2,
             "title"=> "back-end, Developer",
             "location"=> "Winnipeg, Canada",
             "salary"=> "$100,000",
        ],
        [     
             "id"   => 3,
             "title"=> "front-end Developer",
             "location"=> "Winnipeg, Canada",
             "salary"=> "$100,000",
        ]
        ];
       $job =  \Illuminate\Support\Arr::first($jobs, fn ($job) => $job['id'] == $id);
   
    return view("job",["job" => $job]);
});
Route::get('/contact', function () {
    return view("contact");
});
