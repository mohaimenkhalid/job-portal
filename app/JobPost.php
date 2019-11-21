<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\JobDescription;
use App\User;

class JobPost extends Model
{
    public function description()
    {
    	return $this->belongsTo(JobDescription::class, 'job_description_id');
    }

    public function user()
    {
    	return $this->belongsTo(User::class, 'job_posted_by_id');
    }

    public function location()
    {
    	return $this->belongsTo(JobLocation::class, 'job_location_id');
    }
}
