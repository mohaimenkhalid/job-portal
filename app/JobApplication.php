<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\JobPost;

class JobApplication extends Model
{
    public function job()
    {
    	return $this->belongsTo(JobPost::class, 'job_id');
    }

    public function applicant()
    {
    	return $this->belongsTo(User::class, 'applicant_id');
    }
}
