<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\JobApplication;
use Auth;

class JobApplicationController extends Controller
{
     public function store(Request $requsest, $job_id, $company_id)
    {

        $job_find = JobApplication::where('job_id', $job_id)->where('applicant_id', Auth::id())->first();

        if ($job_find) {
            \Session::flash('error', ' Already you applied for this job! ');
            return back();
        }else{

            $job = new JobApplication();
            $job->applicant_id  = Auth::id();
            $job->job_id = $job_id;
            $job->company_id = $company_id;
            $job->save();

            \Session::flash('success', 'Job Application Submitted Successfully! Company will review your profile soon.');
             return back();
        }
    	
    }

}
