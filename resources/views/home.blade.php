@extends('layouts.master')


@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-lg-9">
      <div class="card mt-5">
        <h5 class="card-header">Timetable</h5>
        <div class="card-body">
          <timetable-dashboard></timetable>
          <a href="#" class="btn btn-primary">View Full Timetable</a>
        </div>
      </div>
    </div>
    <div class="col-lg-3">
      <div class="card mt-5">
        <h5 class="card-header">Upcoming Coursework</h5>
        <div class="card-body">
          <h5 class="card-title">CS-100</h5>
          <p class="card-text">Due on 12th December 2018 23:59</p>
          <hr>
          <h5 class="card-title">CS-101</h5>
          <p class="card-text">Due on 15th December 2018 23:59</p>
          <a href="#" class="btn btn-primary">View all</a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
