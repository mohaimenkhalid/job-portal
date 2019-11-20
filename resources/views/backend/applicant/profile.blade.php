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
            <h3 class="box-title"><strong>Applicant Profile</strong></h3>
          </div>
          <div class="box-body">
            <a href="" class="btn btn-success">View All Job</a>
          </div>
          <div class="box-body">
            <table class="table table-borderless">
              <thead>
                <tr>
                  <th scope="col">
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

                  </th>
                  
                  
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">Applicant Name</th>
                  <td>{{ Auth::user()->first_name }}</td>
                 
                </tr>
                <tr>
                  <th scope="row">Image</th>
                  <td>
            
                    <img src="/images/applicant/default.png" id="profile-img-tag" width="150px" />

                    <form method="post" action="{{ route('applicant.profile.update') }}" enctype="multipart/form-data">
                      @csrf
                      <input type="file" name="image" id="profile-img">
                      <button>update</button>
                     
                    </form>
                  </td>
                  
                </tr>
                <tr>
                  <th scope="row">Resume</th>
                  <td>
                    No File Found
                    <form method="post" action="{{ route('applicant.profile.update') }}" enctype="multipart/form-data">
                     @csrf 
                      <input type="file" name="resume">
                      <button>update</button>
                    </form>
                  </td>
                  
                </tr>
                  <tr>
                  <th scope="row">Skills</th>
                  <td>
                    <form method="post" action="{{ route('applicant.profile.update') }}" >
                    @csrf
                      <input type="text" name="skills" class="form-control" placeholder="Enter Skill Example- Laravel, Vuejs, reactJs">
                    <button>update skill</button>
                   </form>
                  </td>
                  
                </tr>
              </tbody>
            </table>
          
          </div>
        </div>
        </div>

</div>



@endsection