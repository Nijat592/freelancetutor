@extends('layouts.main_with_sidebar')

<!-- section1 burda baslayir -->
@section('content')
				 <form action="{{ route("experience.store") }}" method="POST">
				 {{csrf_field()}}
		              <div class="box-body">
		                <div class="form-group">
		                  <label for="Company">Company</label>
		                  <input name="company" type="text" class="form-control" id="Company">
		                </div>
		                <div class="form-group">
		                  <label for="Position">Position</label>
		                  <input name="position" type="text" class="form-control" id="Position" >
		                </div>
		                <div class="form-group">
		                  <label for="Years">Years</label>
		                  <input name="years" type="text" class="form-control" id="Years" >
		                </div>
		                
						<!-- 
		                 <div class="form-group">
			                <div class="row">
				                <div class="col-md-6">
				                	<label for="Start">Start</label>
					                <input name="begin" type="date" class="form-control" id="Start" >
				                </div>
				                <div class="col-md-6">
				                	 <label for="End">End</label>
					                <input name="end" type="date" class="form-control" id="End" >
				                </div>  
				            </div>
		                </div> -->
		                
		              </div>
		              <div class="box-footer">
		                <button type="submit" class="btn btn-primary">SAVE</button>
		              </div>
            	</form>
@endsection

	
