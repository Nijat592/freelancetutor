@extends('layouts.main_with_sidebar')
@section('content')
<div class="container-fluid">
	<div class="procon row">
		<div class="si1 col-md-12">
			<span>Profil</span>
		</div>
		<div class="si2 col-md-12">
			<span>Enquire explain another he in brandon enjoyed be service.</span>
		</div>
		<div class="hr1 col-md-12" >
			<hr>
		</div>
		<div class="col-md-12">
			<span style="margin-left:px;"><b>Şəkil</b></span>
		</div>
		
		<div class="proconimg col-md-4">
			<img src="{{Auth::user()->profile_img}}" alt="">
		</div>
		<div class="col-md-4">
		</div>
		<div class="col-md-4"></div>
		<form class="form-inline" method="post" action="{{url('profile/'.Auth::user()->id)}}" >
		{{-- enctype="multipart/form-data" --}}
		{{-- enctype="apply/multiple_upload" --}}
				{{csrf_field()}}
				{{method_field('patch')}}
		<div class=" col-md-12">
			<label  id="tiggerUpload" for="photoupload" class="btnas btn btn-primary">BROWSE</label>
			<input type="file" id="photoupload" name="profile_img" class="hidden">
		</div>
		<div class="col-md-12">
			<span >** photo must not bigger than 250kb</span>
		</div>
		<div class="col-md-12">
			
				<div class="row">
					<div class="bform col-md-3">
						<div class="form-group ">
							<label>Ad</label>
							<input type="text"  class="form-control" name="name" value="{{Auth::user()->name}}">
						</div>
					</div>
					<div class="bform col-md-3">
						<div class="form-group ">
							<label>Soyad</label>
							<input type="text" class="form-control" name="surname" value="{{Auth::user()->surname}}">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="bform col-md-3">
						<div class="form-group ">
							<label>Email</label>
							<input type="email"  class="form-control" name="email" value="{{Auth::user()->email}}">
						</div>
					</div>
					<div class="bform col-md-3">
						<div class="form-group ">
							<label>Telefon</label>
							<input type="number" class="form-control" name="phone" value="{{Auth::user()->phone}}">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="bform col-md-3">
						<div class="form-group ">
							<label>Ünvan</label>
							<input type="text"  class="form-control" name="address" value="{{Auth::user()->address}}">
						</div>
					</div>
					<div class="bform col-md-3">
						<div class="form-group ">
							<label>Doğum Tarixi</label>
							<input type="date"  class="form-control" name="date" value="{{Auth::user()->birth_date}}">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="bform col-md-3">
						<div class="form-group ">
							<div class="form-group ">
								<label>Şəhər</label>
								<div class="dropdown">
									<button class="seherdrop btn btn-primary dropdown-toggle"
									type="button" id="dropdownMenu1" data-toggle="dropdown"
									aria-haspopup="true" aria-expanded="false">
									Şəhərlər
									</button>
									<ul class="dropdown-menu">
										<li><a href="#">Bərdə</a></li>
										<li><a href="#">Qax</a></li>
										<li><a href="#">Qazax</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class=" ck col-md-12">
					<div class="row">
						<label>Mənim haqqimda</label>
						<textarea name="bio" id="ckeditor">{{Auth::user()->bio}}</textarea>
					</div>
				</div>
			</div>
			<div class="ambut col-md-12">
				<button type="submit" class="save btn btn-primary"><b>YADDA SAXLA</b></button>
				<a type="button" class="save1 btn btn-primary"><b>LƏĞV ET</b></a>
			</div>
		</form>
	</div>
</div>
@endsection