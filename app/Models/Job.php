<?php

namespace App\Models;
use Illuminate\Support\Arr;
class Job {

    static public function all():array {
        return [
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
    }

    static public function find(int $id):?array {

      
        $jobs = self::all();
        $job = Arr::first($jobs, fn($job) => $job["id"] == $id);

        if(!$job) {
            abort(404);
        }
      
        return $job;
    }
}