@extends('layouts.master')


@section('content')

<div class="row " >
  
  <div class="col-md-2"></div>
  <div class="col-md-8" style="margin-top: 20px;">
    
  </div>
</div>

<div class="row">

<div class="col-md-2"></div>

      <div class="col-md-8">

        <div class="box box-info" style="margin-top:20px;">
          <div class="box-header with-border">
            <h3 class="box-title">Job Title<strong>{{ $jobpost->description->job_title }}</strong></h3>
          </div>
          
          <div class="box-body">
<table class="table table-bordered">
    <thead>
      @if (session('success'))
                          <div class="alert alert-success" role="alert">
                             <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                              {{ session('success') }}
                          </div>
                      @endif


                      @if (session('error'))
                          <div class="alert alert-danger" role="alert">
                             <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                              {{ session('error') }}
                          </div>
             @endif
  </thead>
  <tbody>

        <tr> 
          <td>Job Title</td>
          <td>{{ $jobpost->description->job_title }}</td>
        </tr>
         <tr> 
          <td>Company Name</td>
          <td>{{ $jobpost->user->first_name }} {{ $jobpost->user->last_name }}</td>
        </tr>

        <tr> 
          <td>Post Details</td>
          <td>{{ $jobpost->description->job_description }}</td>
        </tr>

         <tr> 
          <td>Salary</td>
          <td>{{ $jobpost->description->salary }}</td>
        </tr>

        <tr> 
          <td>Location</td>
          <td>{{ $jobpost->location->location }}, {{ $jobpost->location->country }}</td>
        </tr>

        <tr> 
          <td>Publish Date</td>
          <td>{{ $jobpost->created_at}}></td>
        </tr>
      
      @cannot('isCompany')
        <tr> 
          <td colspan="2">
                <form method="POST" action="{{ route('job.application.store', [$jobpost->id, $jobpost->job_posted_by_id ]) }}">
                    @csrf
                <center><button onclick="return confirm('Are you sure to Apply this JOB ??')" type="submit"  class="btn btn-primary ">Apply Now</button></center>
               

                </form>
            </td>
        </tr>
      @endcan
    
  </tbody>
</table>
          
          </div>
        </div>
        </div>

</div>



@endsection