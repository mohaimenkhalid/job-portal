<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\ApplicantDetails;

class ApplicantDetails extends Model
{
    public static function application_details($id)
    {
    	return $applicant =  ApplicantDetails::where('applicant_id', $id)->first()->resume;

    }
}
