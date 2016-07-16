@extends('layouts.admin')
@section('content')
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<form method="POST" action="">
			{{-- {{ csrf_field()}}
			{{ method_field('patch') }} --}}
				<div class="form-group">
					<textarea name="body" class="form-control"></textarea>
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-success">Edit</button>
				</div>
			</form>	
		</div>
	</div>

@endsection