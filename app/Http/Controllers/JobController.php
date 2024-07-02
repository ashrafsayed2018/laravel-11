<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Support\Facades\Gate;

class JobController extends Controller
{
    public function index()
    {
        
        $jobs = Job::with("employer")->latest()->paginate(5);
        return view("jobs.index", [
                "jobs" => $jobs
        ]);
    }


    public function create()
    {
        return view("jobs.create");
    }

    public function show(Job $job)
    {
        return view("jobs.show", [
            "job" => $job
        ]);
    }

    public function store()
    {

      // validate the request
      request()->validate([
            "title" => ["required", "min:3"],
            "location" => ["required", "min:3"],
            "salary" => ["required"],
        ]);

        // create job
        Job::create([
            "employer_id" => auth()->user()->id,
            "title" => request("title"),
            "location" => request("location"),
            "salary" => request("salary"),
        ]);

        // redirect

        return redirect("/jobs");
    }

    public function edit(Job $job)
    {


        return view("jobs.edit", [
            "job" => $job
        ]);
        return view("jobs.edit");
    }

    public function update(Job $job)
    {
            // authorize user to edit

            // validation

            request()->validate([
                "title" => ["required", "min:3"],
                "location" => ["required", "min:3"],
                "salary" => ["required"],
            ]);

        // update job
        $job->update([
            "title" => request("title"),
            "location" => request("location"),
            "salary" => request("salary"),
        ]);
        // redirect to job page 
        return redirect("/jobs/{$job->id}");
  
    }

    public function destroy(Job $job)
    {
        // authorize user to delete

        // delete job
        $job->delete();
        // redirect to jobs page
        return redirect("/jobs");
   
    }
}
