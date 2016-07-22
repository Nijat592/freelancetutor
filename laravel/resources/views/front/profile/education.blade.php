@extends('layouts.main_with_sidebar')
<!-- section1 burda baslayir -->
@section('content')
<<<<<<< HEAD
<<<<<<< HEAD
    <a href="/profile/education/create"><button type="button" class="btn btn-info">Add New</button></a><br><br>
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Faculty</th>
            <th>University</th>
            <th>Begin</th>
            <th>End</th>
            <th>Edit</th>
            <th>Delete</th>
=======
    <a href="{{ route('education.create') }}"><button type="button" class="btn btn-info">Əlavə et</button></a><br><br>
      <table class="table table-bordered">
        <thead>
          <tr>
=======
    <a href="{{ route('education.create') }}"><button type="button" class="btn btn-info">Əlavə et</button></a><br><br>
      <table class="table table-bordered">
        <thead>
          <tr>
>>>>>>> 310fd2413b0d1ac4d804cc7c818193065f683eb7
            {{-- <th>No.</th> --}}
            <th>Fakültə</th>
            <th>Universitet</th>
            <th>Daxil olub</th>
            <th>Bitirib</th>
            <th>Əlavə qeydlər</th>
            <th>Redaktə et</th>
            <th>Sil</th>
            
>>>>>>> 310fd2413b0d1ac4d804cc7c818193065f683eb7
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Computer Science</td>
            <td>Bonn University</td>
            <td>2017</td>
            <td>2019</td>
            <td><a href="#"><i class="fa fa-pencil" aria-hidden="true"></i></a></td>
            <td><a href="#"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
          </tr>
        </tbody>
      </table>
@endsection