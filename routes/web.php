<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisterUserController;
use App\Http\Controllers\SessionController;
use App\Jobs\TransalateJob;
use App\Models\Job;
use Illuminate\Support\Facades\Route;


Route::get("/test", function () {

    $job = Job::first();
    TransalateJob::dispatch($job);
    return "Done";
});
Route::view('/', 'home');
Route::view('/contact','contact');

// web.php

Route::get("jobs", [JobController::class, "index"]);
Route::get("jobs/create", [JobController::class, "create"])->middleware("auth");
Route::post("jobs", [JobController::class, "store"])->middleware("auth");
Route::get("jobs/{job}", [JobController::class, "show"]);
Route::get("jobs/{job}/edit", [JobController::class, "edit"])->middleware("auth")->can("edit", "job");
Route::put("jobs/{job}", [JobController::class, "update"]);
Route::delete("jobs/{job}", [JobController::class, "destroy"]);

// Auth 
Route::get('/register', [RegisterUserController::class, 'create'])->name('register');
Route::post('/register', [RegisterUserController::class, 'store'])->name('register');

Route::get('/login', [SessionController::class, 'create'])->name('login');
Route::post('/login', [SessionController::class, 'store'])->name('login');

Route::delete('/logout', [SessionController::class, 'destroy']);


