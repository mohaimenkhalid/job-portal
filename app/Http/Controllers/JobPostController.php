<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\JobPost;
use App\JobDescription;
use App\JobLocation;
use Auth;

class JobPostController extends Controller
{
    public function create()
    {
    	return view('backend.company.CreateJob');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate(
	        [
		        'job_title' => 'required',
		        'job_description' =>'required',
		        'salary' =>'required',
		        'location' =>'required',
		        'country' =>'required',
	        
	         ],
	         [
	            'job_title.required' => 'Job Title must not be Empty',
	            'job_description.required' => 'Job Description must not be Empty',
	            'salary.required' => 'Salary must not be Empty',
	            'location.required' => 'Location must not be Empty',
	            'country.required' => 'Country must not be Empty',
	         ]
        );

        $job_des = new JobDescription();
        $job_des->job_title = $request->job_title;
        $job_des->job_description = $request->job_description;
        $job_des->salary = $request->salary;
        $job_des->save();

        $job_location = new JobLocation();
        $job_location->location = $request->location;
        $job_location->country = $request->country;
        $job_location->save();

        $jobpost = new JobPost();
        $jobpost->job_posted_by_id = Auth::id();
        $jobpost->job_description_id = $job_des->id;
        $jobpost->job_location_id = $job_location->id;
        $jobpost->save();
  		
  		\Session::flash('success', 'Your Job Posted Successfully!!');
         return back();
    }


    public function alljob()
    {
        $alljobs = JobPost::all();
        return view('backend.jobpost.alljob', compact('alljobs'));
    }

    public function viewjob($id)
    {
       $jobpost = JobPost::find($id);
      return view('backend.jobpost.view', compact('jobpost'));
        
    }




}
