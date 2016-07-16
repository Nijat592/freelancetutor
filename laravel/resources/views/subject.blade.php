@extends('layouts.layout')
<!-- section1 burda baslayir -->
@section('content')


<div class="container marginTop72">

  <div class="row">
    <div class="col-md-3">
    </div>
    <div class="col-md-9">
    <a href=""><button type="button" class="btn btn-info">Add New</button></a><br><br>
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Subject</th>
            <th>Interval</th>
            <th>Cost</th>
            <th>Edit</th>
            <th>Delete</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>PHP</td>
            <td>3</td>
            <td>400</td>
            <td><a href="#"><i class="fa fa-pencil" aria-hidden="true"></i></a></td>
            <td><a href="#"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection