@extends('layouts.main_with_sidebar')

<!-- section1 burda baslayir -->
@section('content')
				 <form>
		              <div class="box-body">

		              	<label>Subject Name</label>
		                <div class="row">
		                	<div class="col-md-6">
			                	<select class="selectpicker form-control" >
									<option value="0">bla</option>
									<option value="1">bla</option>
									<option value="3">bla</option>
								</select>
		                	</div>
		                	<div class="col-md-6">
		                		<div  class="form-group">
			                		<input type="text" name="subject" class="form-control" placeholder="Daxil edin">
			                	</div>
		                	</div>
		                </div>


		                <div class="form-group">
		                  <label for="Interval">Interval</label>
		                  <input name="interval" type="text" class="form-control" id="Interval">
		                </div>


		                <label>Cost</label>
		                <div class="row">
		                	<div class="col-md-6">
			                	<div  class="form-group">
			                		<input type="number" name="cost" class="form-control">
			                	</div>
		                	</div>
		                	<div class="col-md-6">
		                		<select class="selectpicker form-control" >
									<option value="0">Qiymet</option>
									<option value="1">AZN</option>
									<option value="3">USD</option>
								</select>
		                	</div>
		                </div>
		                <div class="form-group">
		                  <label for="Description">Description</label>
		                  <textarea name="description" class="form-control" id="Description" rows="6"></textarea>
		                </div>
		              </div>
		              <div class="box-footer">
		                <button type="submit" class="btn btn-primary">SAVE</button>
		              </div>
            	</form>
@endsection

	
