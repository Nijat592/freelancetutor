@extends('layouts.main_with_sidebar')

<!-- section1 burda baslayir -->
@section('content')
		 {{-- <form action="{{ route("experience.update") }}" method="POST"> --}}
		 <form action="/experience/{{$tecrube->id}}" method="POST">

		 {{csrf_field()}}
              <div class="box-body">
                <div class="form-group">
                  <label for="Company">Company</label>
                  <input name="company" type="text" class="form-control" id="Company" value=" {!! $tecrube->company !!} ">
                </div>
                <div class="form-group">
                  <label for="Position">Position</label>
                  <input name="position" type="text" class="form-control" id="Position" value=" {!! $tecrube->position !!} ">
                </div>
                <div class="form-group">
                  <label for="Years">Years</label>
                  <input name="years" type="text" class="form-control" id="Years" value=" {!! $tecrube->years !!} ">
                </div>
                
              </div>
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">SAVE</button>
              </div>
    	</form>
@endsection

	
