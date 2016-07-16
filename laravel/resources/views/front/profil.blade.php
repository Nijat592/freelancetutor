@extends('sidebar/sidebar')
@section('profile')
<div class="col-md-9">
	<div class="container-fluid">
		<div class="procon row">
			<div class="si1 col-md-12">
				<span>profile</span>
			</div>
			<div class="si2 col-md-12">
				<span>Enquire explain another he in brandon enjoyed be service.</span>
			</div>
			<div class="hr1 col-md-12" >
				<hr>
			</div>
			<div class="col-md-12">
				<span style="margin-left:px;"><b>Photo</b></span>
			</div>
			
			<div class="proconimg col-md-4">
				<img src="image/mans.jpg" alt="">
			</div>
			<div class="col-md-4">
			</div>
			<div class="col-md-4"></div>
			<div class=" col-md-12">
				<label  id="tiggerUpload" for="photoupload" class="btnas btn btn-primary">BROWSE</label>
				<input type="file" id="photoupload" class="hidden">
			</div>
			<div class="col-md-12">
				<span >** photo must not bigger than 250kb</span>
			</div>
			<div class="col-md-12">
				<form class="form-inline">
					<div class="row">
						<div class="bform col-md-3">
							<div class="form-group ">
								<label>Ad</label>
								<input type="text"  class="form-control" placeholder="Ad">
							</div>
						</div>
						<div class="bform col-md-3">
							<div class="form-group ">
								<label>Soyad</label>
								<input type="text" class="form-control" placeholder="Soyad">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="bform col-md-3">
							<div class="form-group ">
								<label>Email</label>
								<input type="email"  class="form-control" placeholder="Email">
							</div>
						</div>
						<div class="bform col-md-3">
							<div class="form-group ">
								<label>Telefon</label>
								<input type="number" class="form-control" placeholder="Telefon">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="bform col-md-3">
							<div class="form-group ">
								<label>Unvan</label>
								<input type="text"  class="form-control" placeholder="Unvan">
							</div>
						</div>
						<div class="bform col-md-3">
							<div class="form-group ">
								<label>Dogum Tarixi</label>
								<input type="date"  class="form-control" placeholder="Unvan">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="bform col-md-3">
							<div class="form-group ">
								<div class="form-group ">
									<label>Seher</label>
									<div class="dropdown">
										<button class="seherdrop btn btn-primary dropdown-toggle"
										type="button" id="dropdownMenu1" data-toggle="dropdown"
										aria-haspopup="true" aria-expanded="false">
										Sehrler
										</button>
										<ul class="dropdown-menu">
											<li><a href="#">Berde</a></li>
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
							<label>Menim haqqimda</label>
							<textarea name="emoglu" id="ckeditor"></textarea>
						</div>
					</div>
				</div>
				<div class="ambut col-md-12">
					<a type="submit" class="save btn btn-primary"><b>SAVE</b></a>
					<a type="submit" class="save1 btn btn-primary"><b>CANCEL</b></a>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection