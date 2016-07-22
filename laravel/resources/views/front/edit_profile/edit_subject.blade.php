@extends('layouts.main_with_sidebar')

<!-- section1 burda baslayir -->
@section('content')
				<form action="/profile/{{ $data->id }}/update" method="post" >

					{{ method_field('PATCH') }}

				 	<input type="hidden" name="_token" value="{{ csrf_token() }}">

		            	<div class="box-body">

		              	<label>Fənn</label>
		                <div class="row">
			                <div class="col-md-12">
			                	<select name="title" style="padding:6px; border:1px solid #CCCCCC; border-radius:5px">
		                		<option value="0">Seçin</option>
		                		@foreach($category as $cat)
		                			<optgroup label="{{$cat->title}}">
		                				@foreach($cat->subjects->all() as $sub)
		                					<option
		                					@if($sub->id==$data->subject_id)
		                						selected="true"
		                					@endif	
		                					 value="{{$sub->id}}">{{$sub->title}}</option>
		                				@endforeach
		                			</optgroup>
									
								@endforeach
							</select>
							</div>
		                </div>
		                <div class="form-group">
		                  <label for="Interval">Müddət</label>
		                  <input name="interval" type="text" class="form-control" id="Interval" value="{{ $data->interval }}">
		                </div>


		                <label>Qiymət</label>
		                <div class="row">
		                <div class="col-md-12">
			               	<div  class="form-group">
			               		<input type="number" name="cost" class="form-control" 
			               		value="{{ $data->cost }}">
			               	</div>
		                </div>
		                
		                </div>
		                <div class="form-group">
		                  <label for="Description">Mündəricat</label>
		                  <textarea name="description" class="form-control" id="Description" rows="6"> {{ $data->description }} </textarea>
		                </div>
		              </div>
		              <div class="box-footer">
		                <button type="submit" class="btn btn-primary">Yadda saxla</button>
		              </div>
            	</form>
@endsection

	
