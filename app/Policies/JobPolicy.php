<?php

namespace App\Policies;

use App\Models\Job;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class JobPolicy
{



    /**
     * determine whether the user can edit the job.
     *
     * @return bool
     */
    public function edit(User $user,Job $job): bool
    {
        return $user->is($job->employer->user);
    }
}
