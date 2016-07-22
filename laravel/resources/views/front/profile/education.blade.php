@extends('layouts.main_with_sidebar')
<!-- section1 burda baslayir -->
@section('content')
    <a href="{{ route('education.create') }}"><button type="button" class="btn btn-info">Əlavə et</button></a><br><br>
      <table class="table table-bordered">
        <thead>
          <tr>
            {{-- <th>No.</th> --}}
            <th>Fakültə</th>
            <th>Universitet</th>
            <th>Daxil olub</th>
            <th>Bitirib</th>
            <th>Əlavə qeydlər</th>
            <th>Redaktə et</th>
            <th>Sil</th>
            
          </tr>
        </thead>
        @foreach($educations as $education)
        <tbody>
          <tr>
            {{-- <td>{{$education->id}}</td> --}}
            <td>{{$education->faculty}}</td>
            <td>{{$education->university}}</td>
            <td>{{$education->begin}}</td>
            <td>{{$education->end}}</td>
            <td>{{$education->description}}</td>
            <td><a href="education/{{$education->id}}/edit"><i class="fa fa-pencil" aria-hidden="true"></i></a></td>
            <td><a href="education/{{$education->id}}/delete"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
          </tr>
        </tbody>
        @endforeach
      </table>
@endsection