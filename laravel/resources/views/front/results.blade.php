@extends('layouts.main_solid_nav')
<link rel="stylesheet" type="text/css" href="css/style.css">
@section('content')
<div class="head"></div>
<div class="resultSearch">
	<div class="container">
		<div class="row">
			<form>
				<div class="col-md-2">
					<div class="form-group form-lg">
						<span class="labeling">Fənn axtar</span>
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group form-lg">
						<input type="text" class="form-control" placeholder="Məs: Riyaziyyat">
					</div>
				</div>
				
				<div class="col-md-4">
					<div class="form-group form-lg">
						<input type="text" class="form-control" placeholder="Location. Ex: London">
					</div>
				</div>
				
				<div class="col-md-2">
					<button class="btn btn-block">Search</button>
				</div>
			</form>
			<div class="row quick_search">
				<div class="col-md-10 col-md-offset-1">
					<ul class="quick-search">
						<li><span>Populyar sorğular: </span></li>
						<li><a href="#">Riyaziyyat</a></li>
						<li><a href="#">Fizika</a></li>
						<li><a href="#">Web manslıq</a></li>
						<li><a href="#">Toy manslıqı</a></li>
						<li><a href="#">Ali manslıq</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Result Search ends -->
<!-- Result Breadcrumbs starts  -->
<div class="resultBreadcrumbs">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<ol class="breadcrumb">
					<li><a href="#">Bütün fənnlər</a></li>
					<li><span>Kateqoriyalar</span></li>
				</ol>
			</div>
		</div>
	</div>
</div>
<!-- ========================================= Result Filter ends =========================================-->
<!-- ========================================= Result Job Lists starts ========================================= -->
<div class="resultJobLists">
	<div class="container first">
		<div class="row">
			<div class="resultSideBar">
				<div class="col-md-9">
					<div class="row">
							@foreach($result as $results)
						<div class="col-md-3 marg20">
							{{-- <span><h4>FEATURED EMPLOYERS</h4></span> --}}
							<div class="top">
								<a href="/tutor/{{$results->id}}">
									<div class="image">
										<img src="image/imagesr/08.png" alt="image">
									</div>
									<div class="content">
										<h5 class="heading text font700">{{ $results->name.' '.$results->surname }}</h5>
										<p class="texting font600">{!! $results->bio !!}</p>
										{{-- <p class="mata-p clearfix"><span class="text font700">25</span> <span class="font13">position available</span> <span class="pull-right icon"><i class="fa fa-long-arrow-right"></i></span></p> --}}s
									</div>
								</a>
							</div>
						</div>
							@endforeach
					</div>
				</div>
				<div class="col-md-3">
					<div class="col-md-12 marg20">
						<div class="sidebar-module">
							<h4 class="sidebar-title">Related Keyword</h4>
							<div class="sub-category">
								<a href="#">Engineer</a>
								<a href="#">Packaging</a>
								<a href="#">Package</a>
								<a href="#">Manufacturing</a>
								<a href="#">Product Design</a>
								<a href="#">Engineer</a>
								<a href="#">Packaging</a>
								<a href="#">Package</a>
								<a href="#">Manufacturing</a>
								<a href="#">Product Design</a>
							</div>
						</div>
					</div>
				</div>
				
			</div>
			<!-- ========================================= Result SideBar ends ========================================= -->
		</div>
	</div>
</div>
<div class="resultPagination">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-1">
				<div class="pager-wrapper">
					<ul class="pager-list">
						<li class="paging"><a href="#"><i class="fa fa-angle-double-left"></i></a></li>
						<li class="paging"><a href="#"><i class="fa fa-angle-left"></i></a></li>
						<li class="number">
							<span class="mr-5"><span class="font600">page</span></span>
						</li>
						<li class="form">
							<form>
								<input type="text" value="1" class="form-control">
							</form>
						</li>
						<li class="number">
							<span class="mr-5">/</span> <span class="font600">79</span>
						</li>
						<li class="paging"><a href="#">go</a></li>
						<li class="paging"><a href="#"><i class="fa fa-angle-right"></i></a></li>
						<li class="paging"><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection