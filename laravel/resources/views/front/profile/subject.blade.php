@extends('layouts.main_with_sidebar')
<!-- section1 burda baslayir -->
@section('content')
    <a href="/profile/subject/create"><button type="button" class="btn btn-info">Əlavə et</button></a><br><br>
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Fənnlər</th>
            <th>Müddəti</th>
            <th>Qiyməti</th>
            <th>Mündəricat</th>
            <th>Redaktə et</th>
            <th>Sil</th>
          </tr>
        </thead>
        <tbody>

        @foreach($user->subjects as $subject)
          <tr>
            <td>{{ $subject->title}}</td>
            <td>{{ $subject->pivot->interval}}</td>
            <td>{{ $subject->pivot->cost}}</td>
            <td>{{ $subject->pivot->description}}</td>
            <td><a href="/pro/{{ $subject->pivot->id }}/edit"><i class="fa fa-pencil" aria-hidden="true"></i></a></td>
            <td><a href="/pro/{{ $subject->pivot->id }}/delete"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
          </tr>
        @endforeach

        </tbody>
      </table>
@endsection