<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image;
use File;
use App\ApplicantDetails;
use Auth;

class ApplicantDetailsController extends Controller
{
    public function index()
    {
        $applicant_details = ApplicantDetails::where('Applicant_id', Auth::id())->first();
    	return view('backend.applicant.profile', compact('applicant_details'));
    }

    public function update(Request $request)
    {
    	/*'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',*/

    	$validatedData = $request->validate(
	        [
		        'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
		   
	         ],
	         [
	            'image' => 'Job Title must not be Empty'
	         ]
        );
    	
    	if ($request->hasFile('image')) {

    		//get  id
    		$applicant_details = ApplicantDetails::where('applicant_id', Auth::id())->first();
    		$id = $applicant_details->id;
	    	$applicant = ApplicantDetails::find($id);

	    	//Check image exists or not
    		if ($applicant->image) {
    			unlink('images/applicant/'. $applicant->image); // unlink image
    		}

    		//image naming and update
	    	$image = $request->file('image');
	    	$img = time(). '.' .$image->getClientOriginalExtension(); 
	    	$location = public_path('images/applicant/'. $img); 
	    	Image::make($image)->save($location);
	    	$applicant->image = $img;
	    	$applicant->save();

	    	\Session::flash('success', 'Profile Photo Updated Successfully!!');
   		 	return redirect()->back();
    	}

    	if ($request->hasFile('resume')) {

    		$applicant_details = ApplicantDetails::where('applicant_id', Auth::id())->first();
    		$id = $applicant_details->id;
	    	$applicant = ApplicantDetails::find($id);

	    	//Check file exists or not
    		if ($applicant->resume) {
    			unlink('resume/applicant/'. $applicant->resume); 
    		}

    		$file = $request->file('resume');
	    	$file = time(). '.' .$file->getClientOriginalExtension(); 
	    	$location = public_path('resume/applicant/'); 
			$request->file('resume')->move($location, $file);
			$applicant->resume = $file;
	    	$applicant->save();
	    	\Session::flash('success', 'Resume Updated Successfully!!');
   		 	return redirect()->back();
    	}

    	if($request->skills){
    		$applicant_details = ApplicantDetails::where('applicant_id', Auth::id())->first();
    		$id = $applicant_details->id;
	    	$applicant = ApplicantDetails::find($id);
	    	$applicant->skills = $request->skills;
	    	$applicant->save();
	    	\Session::flash('success', 'Skill Updated Successfully!!');
   		 	return redirect()->back();
    	}

    }


   
public function download($file_name) {
        $file_path = public_path('resume/applicant/'.$file_name);
        return response()->download($file_path);
  }
    



}
