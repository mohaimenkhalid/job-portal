@extends('layouts.master')


@section('content')

<div class="row " >
  
  <div class="col-md-2"></div>
  <div class="col-md-8" style="margin-top: 20px;">
    
  </div>
</div>

<div class="row">

<div class="col-md-1"></div>

      <div class="col-md-10">

        <div class="box box-info" style="margin-top:20px;">
          <div class="box-header with-border">
            <h3 class="box-title"><strong>View All Job</strong></h3>
          </div>
          
          <div class="box-body">
             <table id="example" class="display nowrap" style="width:100%">
        <thead>
           
            <tr>
                <th>#SL</th>
                <th>Job Title</th>
                <th>Job offerer</th>
                <th>publish Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
           
           @foreach($alljobs as $alljob) 
            <tr>
                <td>{{ $loop->index +1 }}</td>
                <td><h5>{{ $alljob->description->job_title }}</h5></td>
                 <td><h5>{{ $alljob->user->first_name }} {{ $alljob->user->last_name }}</h5></td>
                <td>{{ $alljob->created_at }}</td>
                <td>
                    <a href="{{ route('view.job', $alljob->id) }}" class="btn btn-sm btn-info">View Details</a>
                </td>
            </tr>
            @endforeach
           


    
    </table>
          
          </div>
        </div>
        </div>

</div>



@endsection