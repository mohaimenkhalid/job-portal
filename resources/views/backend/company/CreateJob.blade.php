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
            <h3 class="box-title"><strong>Add New Job Post</strong></h3>
          </div>
          
          <div class="box-body">
           
            
         <form class="form-horizontal" action="{{ route('job.post.store') }}" method="post">
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

          @csrf
                <div class="form-group">
                  <label class="control-label col-sm-4" for="job_title">Job Title</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="job_title" id="job_title" placeholder="Job Title" 
                    >
                  </div>
                </div>

                 <div class="form-group">
                  <label class="control-label col-sm-4" for="job_description">Job Description</label>
                  <div class="col-sm-8">
                    <textarea cols="80" class="form-control" rows="15" id="job_description" name="job_description" placeholder="Description"></textarea>
                    
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-sm-4" for="salary">Salary</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="salary" id="salary" placeholder="Salary" 
                    >
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-sm-4" for="location">Location</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="location" id="location" placeholder="Location" 
                    >
                  </div>
                </div>

                 <div class="form-group">
                  <label class="control-label col-sm-4" for="country">Country</label>
                  <div class="col-sm-8">          
                    <input type="text" class="form-control" id="country" placeholder="Country" name="country">
                  </div>
                </div>

              
               
                <div class="form-group">        
                  <div class="col-sm-offset-4 col-sm-8">
                    <button type="submit" class="btn btn-info">Add Post</button>
                  </div>
                </div>
          </form>
          </div>
        </div>


    
        </div>

</div>


@endsection