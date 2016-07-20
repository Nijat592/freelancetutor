@extends('layouts.main_with_sidebar')
<!-- section1 burda baslayir -->
@section('content')
    <a href="{{ route('experience.create') }}"><button type="button" class="btn btn-info">Add New</button></a><br><br>
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Company</th>
            <th>Position</th>
            <th>Years</th>
            <th>Edit</th>
            <th>Delete</th>
          </tr>
        </thead>
        <tbody>
        @foreach($experiences as $experience)
          <tr>
          
               <td>{{ $experience->company}}</td>
               <td>{{ $experience->position}}</td>
               <td>{{ $experience->years}}</td>
           
            <td><a href="/experience/edit/{{$experience->id}}"><i class="fa fa-pencil" aria-hidden="true"></i></a></td>
            <td><a href="/experience/{{$experience->id}}"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
          </tr>
          @endforeach
        </tbody>
      </table>
@endsection