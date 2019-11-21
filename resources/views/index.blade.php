@extends('layouts.master')


@section('content')

<section class="content-header">
      <h1>
        Dashboard
        <small>Welcome to Admin Panel</small>
      </h1>
     
</section>

<div class="row">

<div class="col-md-1"></div>

      <div class="col-md-10">

        <div class="box box-info" style="margin-top:20px;">
          <div class="box-header with-border">
            <h3 class="box-title"><strong>All Application</strong></h3>
          </div>
          
          <div class="box-body">
            <table id="example" class="display nowrap" style="width:100%">
        <thead>
           
            <tr>
                <th>#SL</th>
                <th>Job Title</th>
                <th>Applicant Name</th>
                <th>Applicant's Resume</th>
                <th>Apply Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($all_application as $all_application) 
            <tr>
                <td>{{ $loop->index+1 }}</td>
               <td>{{ $all_application->job->description->job_title }}</td>
               <td>{{ $all_application->applicant->first_name }} {{ $all_application->applicant->last_name   }} </td>
               <td>{{ $all_application->created_at }}</td>
               <td>

                  <form method="get" action="{{ route('resume.download', App\ApplicantDetails::application_details($all_application->applicant_id)) }}">
                      <button class="btn btn-sm btn-success">Download resume</button>
                    </form>

                   
               </td>
               
                <td>   
                    <a href="" class="btn btn-sm btn-warning" >Select for Viva</a>
                </td>
                
            </tr>
           
            @endforeach

    
    </table>
            
          
          </div>
        </div>
        </div>

</div>


 
   

@endsection