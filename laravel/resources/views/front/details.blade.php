@extends('layouts.main_solid_nav')
@section('content')
<!-- Sureyyanin kodlari -->
<div style="height:72px"></div>
<div class="elave1">
	<div class="container">
		<ul>
			<li><a href="#"><span>All Employers</span></a></li>
			<li><span>Expedia</span></li>
		</ul>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-4 col-xs-4 col-xs-offset-4 elave">
			<div class="s-img">
				<div>
					<img src={{$data->profile_img}}>
				</div>
			</div>
		</div>
	</div>
	
	<div class="row">
<<<<<<< HEAD
		<h1 class="s-center">skjhkjh</h1>
=======
		<h1 class="s-center">{{$data->name}} {{$data->surname}} </h1>
>>>>>>> 310fd2413b0d1ac4d804cc7c818193065f683eb7
	</div>
	<div class="row">
		<p class="s-center" style="color:#9393AE"><i class="fa fa-map-marker" aria-hidden="true"></i> {{$data->address}} |  <i class="fa fa-phone" aria-hidden="true"></i>{{$data->phone}}</p>
	</div>
	<div class="row text-center">
		<button class="s-btn btn btn-info" type="button" >SORĞU YOLLA</button>
	</div>
	<div class=" row s-bosluq" style="height:30px"></div>
	<div class="row s-hr ">
		<div class="col-md-3 col-sm-3  col-xs-3">
			<h3>Doğum Tarixi:</h3>
			<p class="s-reng">{{$data->birth_date}}</p>
		</div>
		<div class="col-md-3 col-sm-3  col-xs-3">
			<h3>Yaşı:</h3>		
	<p  class="s-reng">{{$age}} yaşı var</p>
		</div>
		<div class="col-md-3 col-sm-3  col-xs-3">
			<h3>Təhsili:</h3>
			<p  class="s-reng">{{$usr_expr->faculty}}</p>
		</div>
		<div class="col-md-3 col-sm-3  col-xs-3">
			<h3>Email:</h3>
			<p  class="s-reng">{{$data->email}}</p>
		</div>
	</div>
	<div class="row">
	<div class="col-md-9">
	<div class=" row s-bosluq" style="height:20px"></div>
	<div class="row">
		<h3><b>Haqqında</b></h3>
		<div class=" row s-bosluq" style="height:20px"></div>
		<p class="s-reng" style="line-height:180%">{{$data->bio}}</p>
	</div>
	<div class="row">
		<h3><b>Təhsili</b></h3>
		<div class=" row s-bosluq" style="height:20px"></div>
		@foreach($usr_edu as $educ)
		<div>

		{{-- {{dd($usr_edu)}} --}}
			<h4>{{$educ->faculty}}</h4>
			<p class="s-reng"><i>{{$educ->begin}}-{{$educ->end}}<b class="s-uni">       {{$educ->university}}</b></i></p>
			<div class=" row s-bosluq" style="height:20px"></div>
			<p class="s-reng">{{$educ->description}}</p>
		</div>
		<div class=" row s-bosluq" style="height:30px"></div>
		@endforeach

		<div class=" row s-bosluq" style="height:30px"></div>
	
		<div class=" row s-bosluq" style="height:30px"></div>
	</div>
	<!-- Xeyalenin kodlari -->
	<div class="row">
		<h3><b>İş Təcrübəsi</b></h3>
		<div class=" row s-bosluq" style="height:20px"></div>

		@foreach($usr_exp as $expc)
		<div class="row">
			<div class="col-md-1 referenceicon"><i class="fa fa-2x fa-briefcase" aria-hidden="true"></i></div>
			<div class="col-md-11">
				<p><b>Şirkətin adı:</b>  {{$expc->company}}</p>
				<p><b>Vəzifəsi:</b> {{$expc->position}}</p>
				<p><b>Çalışdığı illər:</b>  {{$expc->years}}</p>
			</div>
		</div>
		<hr>
		@endforeach
	</div>
	<div class=" row s-bosluq" style="height:20px"></div>
</div>
<div class="col-md-3">
<h3 style=" padding:15px"><b>Fənnlər</b></h3>
@foreach($usr_sub as $subc)
<div style="border-left:1px solid lightgrey">
 	
 	<div class="col-md-1 referenceicon"><i class="fa fa-2x fa-book" aria-hidden="true"></i></div>
	<div class="col-md-10 " style="border-bottom:1px solid lightgrey;">
	<h5><b>Fənnin adı:</b> {{$subc->title}}</h5>
	<p><b>Qiyməti</b>: {{$subc->cost}}</p>
	<p><b>Müddəti</b>: {{$subc->interval}}</p>
	<p><b>Mündəricat</b>: {{$subc->description}}<p style="color:grey; font-size:12px"></p></p>
	</div>
</div>
<hr>
@endforeach
</div>

</div>
</div>
</div>
</div>
@endsection