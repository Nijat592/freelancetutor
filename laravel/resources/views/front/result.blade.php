@extends('layouts.layout')

@section('content')
<link rel="stylesheet" type="text/css" href="css/style.css">
<div style="height:72px;width:100%;background-color:#333;"></div>
<div class="resultSearch">
			<div class="container">
				<div class="row">
					<form>
						<div class="col-md-2">
							<div class="form-group form-lg">
								<span class="labeling">Search a job</span>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group form-lg">
								<input type="text" class="form-control" placeholder="Job title. Ex: Engineering">
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
								<li><span>Quick Searches: </span></li>
								<li><a href="#">Graduate jobs</a></li>
								<li><a href="#">$50k+ jobs</a></li>
								<li><a href="#">Work at home</a></li>
								<li><a href="#">Immediate start</a></li>
								<li><a href="#">IT & Telecom</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- ========================================= Result Search ends =========================================-->
		<!-- ========================================= Result Breadcrumbs starts ========================================= -->
		<div class="resultBreadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<ol class="breadcrumb">
							<li><a href="#">All jobs</a></li>
							<li><span>Engineering</span></li>
						</ol>
					</div>
				</div>
			</div>
		</div>
		<!-- ========================================= Result Breadcrumbs ends ========================================= -->
		<!-- ========================================= Result Filter starts ========================================= -->
		<div class="resultFilter">
			<div class="container">
				<h3>We found 2,584 engineering jobs</h3><hr>
				<div class="row topRow">
					<div class="col-md-2">
						<label>Sort by:</label>
						<select name="colors" class="selectpicker form-control">
							<option><a href="#">Relavent</a></option>
							<option><a href="#">Date Posted(newest to oldest)</a></option>
							<option><a href="#">Date Posted(oldest to newest)</a></option>
						</select>
					</div>
					<div class="col-md-2">
						<label>Date Added:</label>
						<select  name="colors" class="selectpicker form-control">
							<option><a href="#">Anytime</a></option>
							<option><a href="#">Last 24 hours</a></option>
							<option><a href="#">Last 7 days</a></option>
							<option><a href="#">Last 14 days</a></option>
							<option><a href="#">Last 30 days</a></option>
							<option><a href="#">Since Last Visit</a></option>
						</select>
					</div>
					<div class="col-md-2">
						<label>Job Title:</label>
						<select multiple name="colors" multiple data-actions-box="true" class="selectpicker form-control">
							<option><a href="#">.Net Developer</a></option>
							<option><a href="#">Part Time Merchandiser</a></option>
							<option><a href="#">Senior Software Engineer</a></option>
							<option><a href="#">Software Development Engineer</a></option>
							<option><a href="#">Software Engineer</a></option>
						</select>
					</div>
					<div class="col-md-5 col-md-offset-1">
						<div class="col-md-12">
							<button class="btn btn-toggle btn-refine collapsed" id="more" data-toggle="collapse" data-target="#refine-result">More filters<i class="fa fa-sliders" aria-hidden="true"></i></button>

						</div>
						<div class="col-md-12">
							<span class="button-checkbox">
								<button type="button" class="btn btn-warning" data-color="">FULLTIME</button>
								<input type="checkbox" class="hidden" />
							</span>
							<span class="button-checkbox">
								<button type="button" class="btn btn-danger" data-color="">PART-TIME</button>
								<input type="checkbox" class="hidden" />
							</span>
							<span class="button-checkbox">
								<button type="button" class="btn btn-success" data-color="">FREELANCE</button>
								<input type="checkbox" class="hidden" />
							</span>
						</div>
					</div>
				</div>
				<div class="row bottomRow">
					<div class="bottomMoreFilter">
						<div class="col-md-12 padding0">
							<div class="col-md-2">
								<label>Company:</label>
								<select name="colors" class="selectpicker form-control">
									<option><a href="#">Relavent</a></option>
									<option><a href="#">Date Posted(newest to oldest)</a></option>
									<option><a href="#">Date Posted(oldest to newest)</a></option>
								</select>
							</div>
							<div class="col-md-2">
								<label>Job Board:</label>
								<select  name="colors" class="selectpicker form-control">
									<option><a href="#">Anytime</a></option>
									<option><a href="#">Last 24 hours</a></option>
									<option><a href="#">Last 7 days</a></option>
									<option><a href="#">Last 14 days</a></option>
									<option><a href="#">Last 30 days</a></option>
									<option><a href="#">Since Last Visit</a></option>
								</select>
							</div>
							<div class="col-md-2">
								<label>Special Filters:</label>
								<select multiple name="colors" multiple data-actions-box="true" class="selectpicker form-control">
									<option><a href="#">.Net Developer</a></option>
									<option><a href="#">Part Time Merchandiser</a></option>
									<option><a href="#">Senior Software Engineer</a></option>
									<option><a href="#">Software Development Engineer</a></option>
									<option><a href="#">Software Engineer</a></option>
								</select>
							</div>
							<div class="col-md-5 col-md-offset-1">
								<div class="col-md-12 padding0">
									<div class="btnCheckBoxUp">
										<span class="button-checkbox">
											<button type="button" class="btn btn-default" data-color="primary">INTERNSHIP</button>
											<input type="checkbox" class="hidden" />
										</span>
										<span class="button-checkbox">
											<button type="button" class="btn btn-default" data-color="primary">TEMPORARY</button>
											<input type="checkbox" class="hidden" />
										</span>
										<span class="button-checkbox">
											<button type="button" class="btn btn-default" data-color="primary">SEASONAL</button>
											<input type="checkbox" class="hidden" />
										</span>
									</div>
									<div class="btnCheckBoxDown">
										<span class="button-checkbox">
											<button type="button" class="btn btn-default" data-color="primary">PERMANENT</button>
											<input type="checkbox" class="hidden" />
										</span>
										<span class="button-checkbox">
											<button type="button" class="btn btn-default" data-color="primary">CONTRACT</button>
											<input type="checkbox" class="hidden" />
										</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<hr>
			</div>
		</div>
		<!-- ========================================= Result Filter ends =========================================-->
		<!-- ========================================= Result Job Lists starts ========================================= -->
		<div class="resultJobLists">
			<div class="container first">
				<div class="row">
					<div class="col-md-9">
						<div class="row">
							<div class="col-md-12 backColor">
								<div class="row">
									<div class="col-md-2">
										<img src="image/imagesr/06.png" alt="">
									</div>
									<div class="col-md-7">
										<h4 class="heading">Packaging Engineer</h4>
										<div class="meta-div clearfix">
											<span>at <a href="#">Expedia</a></span>
											<span class="job-label label label-success">Freelance</span>
										</div>
										<p class="texing">It if sometimes furnished unwilling as additions so. Blessing resolved peculiar fat graceful ham. Sussex on at really ladies in as elinor. Sir sex opinions age properly extended...</p>
										<div class="sub-category">
											<a href="#">Engineer</a>
											<a href="#">Packaging</a>
											<a href="#">Package</a>
											<a href="#">Manufacturing</a>
										</div>
									</div>
									<div class="col-md-3">
										<ul class="meta-list">
											<li>
												<span>Location: </span>Paris, France
											</li>
											<li>
												<span>Rate/Salary: </span>Negotiable
											</li>
											<li>
												<span>Experience: </span>Expert
											</li>
											<li>
												<span>Posted: </span>32 minutes ago
											</li>
										</ul>
										<button type="button" class="btn btn-info btn-lg ">Apply for job</button>
									</div>
								</div>
							</div>
							<div class="col-md-12 backColor">
								<div class="row">
									<div class="col-md-2">
										<img src="image/imagesr/02.png" alt="">
									</div>
									<div class="col-md-7">
										<h4 class="heading">Mechanical Engineer - Medical Devices - Medical Equipment</h4>
										<div class="meta-div clearfix">
											<span>at <a href="#">Go Daddy</a></span>
											<span class="job-label label label-danger">Part-time</span>
										</div>
										<p class="texing">It if sometimes furnished unwilling as additions so. Blessing resolved peculiar fat graceful ham. Sussex on at really ladies in as elinor. Sir sex opinions age properly extended...</p>
										<div class="sub-category">
											<a href="#">Engineer</a>
											<a href="#">Packaging</a>
											<a href="#">Package</a>
											<a href="#">Manufacturing</a>
										</div>
									</div>
									<div class="col-md-3">
										<ul class="meta-list">
											<li>
												<span>Location: </span>Paris, France
											</li>
											<li>
												<span>Rate/Salary: </span>Negotiable
											</li>
											<li>
												<span>Experience: </span>Expert
											</li>
											<li>
												<span>Posted: </span>32 minutes ago
											</li>
										</ul>
										<button type="button" class="btn btn-info btn-lg ">Apply for job</button>
									</div>
								</div>
							</div>
							<div class="col-md-12 backColor">
								<div class="row">
									<div class="col-md-2">
										<img src="image/imagesr/05.png" alt="">
									</div>
									<div class="col-md-7">
										<h4 class="heading">Audio Visual Field Engineer</h4>
										<div class="meta-div clearfix">
											<span>at <a href="#">Wottif</a></span>
											<span class="job-label label label-danger">Part-time</span>
										</div>
										<p class="texing">It if sometimes furnished unwilling as additions so. Blessing resolved peculiar fat graceful ham. Sussex on at really ladies in as elinor. Sir sex opinions age properly extended...</p>
										<div class="sub-category">
											<a href="#">Engineer</a>
											<a href="#">Packaging</a>
											<a href="#">Package</a>
											<a href="#">Manufacturing</a>
										</div>
									</div>
									<div class="col-md-3">
										<ul class="meta-list">
											<li>
												<span>Location: </span>Paris, France
											</li>
											<li>
												<span>Rate/Salary: </span>Negotiable
											</li>
											<li>
												<span>Experience: </span>Expert
											</li>
											<li>
												<span>Posted: </span>32 minutes ago
											</li>
										</ul>
										<button type="button" class="btn btn-info btn-lg ">Apply for job</button>
									</div>
								</div>
							</div>
							<div class="col-md-12 backColor">
								<div class="row">
									<div class="col-md-2">
										<img src="image/imagesr/07.png" alt="">
									</div>
									<div class="col-md-7">
										<h4 class="heading">Solution Architect</h4>
										<div class="meta-div clearfix">
											<span>at <a href="#">Ebay</a></span>
											<span class="job-label label label-warning">Fulltime</span>
										</div>
										<p class="texing">It if sometimes furnished unwilling as additions so. Blessing resolved peculiar fat graceful ham. Sussex on at really ladies in as elinor. Sir sex opinions age properly extended...</p>
										<div class="sub-category">
											<a href="#">Engineer</a>
											<a href="#">Packaging</a>
											<a href="#">Package</a>
											<a href="#">Manufacturing</a>
										</div>
									</div>
									<div class="col-md-3">
										<ul class="meta-list">
											<li>
												<span>Location: </span>Paris, France
											</li>
											<li>
												<span>Rate/Salary: </span>Negotiable
											</li>
											<li>
												<span>Experience: </span>Expert
											</li>
											<li>
												<span>Posted: </span>32 minutes ago
											</li>
										</ul>
										<button type="button" class="btn btn-info btn-lg ">Apply for job</button>
									</div>
								</div>
							</div>
							<div class="col-md-12 backColor">
								<div class="row">
									<div class="col-md-2">
										<img src="image/imagesr/08.png" alt="">
									</div>
									<div class="col-md-7">
										<h4 class="heading">Controls Engineer</h4>
										<div class="meta-div clearfix">
											<span>at <a href="#">FedEx</a></span>
											<span class="job-label label label-warning">Fulltime</span>
										</div>
										<p class="texing">It if sometimes furnished unwilling as additions so. Blessing resolved peculiar fat graceful ham. Sussex on at really ladies in as elinor. Sir sex opinions age properly extended...</p>
										<div class="sub-category">
											<a href="#">Engineer</a>
											<a href="#">Packaging</a>
											<a href="#">Package</a>
											<a href="#">Manufacturing</a>
										</div>
									</div>
									<div class="col-md-3">
										<ul class="meta-list">
											<li>
												<span>Location: </span>Paris, France
											</li>
											<li>
												<span>Rate/Salary: </span>Negotiable
											</li>
											<li>
												<span>Experience: </span>Expert
											</li>
											<li>
												<span>Posted: </span>32 minutes ago
											</li>
										</ul>
										<button type="button" class="btn btn-info btn-lg ">Apply for job</button>
									</div>
								</div>
							</div>
							<div class="col-md-12 backColor">
								<div class="row">
									<div class="col-md-2">
										<img src="image/imagesr/06.png" alt="">
									</div>
									<div class="col-md-7">
										<h4 class="heading">Packaging Engineer</h4>
										<div class="meta-div clearfix">
											<span>at <a href="#">Expedia</a></span>
											<span class="job-label label label-success">Freelance</span>
										</div>
										<p class="texing">It if sometimes furnished unwilling as additions so. Blessing resolved peculiar fat graceful ham. Sussex on at really ladies in as elinor. Sir sex opinions age properly extended...</p>
										<div class="sub-category">
											<a href="#">Engineer</a>
											<a href="#">Packaging</a>
											<a href="#">Package</a>
											<a href="#">Manufacturing</a>
										</div>
									</div>
									<div class="col-md-3">
										<ul class="meta-list">
											<li>
												<span>Location: </span>Paris, France
											</li>
											<li>
												<span>Rate/Salary: </span>Negotiable
											</li>
											<li>
												<span>Experience: </span>Expert
											</li>
											<li>
												<span>Posted: </span>32 minutes ago
											</li>
										</ul>
										<button type="button" class="btn btn-info btn-lg ">Apply for job</button>
									</div>
								</div>
							</div>
							<div class="col-md-12 backColor">
								<div class="row">
									<div class="col-md-2">
										<img src="image/imagesr/02.png" alt="">
									</div>
									<div class="col-md-7">
										<h4 class="heading">Mechanical Engineer - Medical Devices - Medical Equipment</h4>
										<div class="meta-div clearfix">
											<span>at <a href="#">Go Daddy</a></span>
											<span class="job-label label label-danger">Part-time</span>
										</div>
										<p class="texing">It if sometimes furnished unwilling as additions so. Blessing resolved peculiar fat graceful ham. Sussex on at really ladies in as elinor. Sir sex opinions age properly extended...</p>
										<div class="sub-category">
											<a href="#">Engineer</a>
											<a href="#">Packaging</a>
											<a href="#">Package</a>
											<a href="#">Manufacturing</a>
										</div>
									</div>
									<div class="col-md-3">
										<ul class="meta-list">
											<li>
												<span>Location: </span>Paris, France
											</li>
											<li>
												<span>Rate/Salary: </span>Negotiable
											</li>
											<li>
												<span>Experience: </span>Expert
											</li>
											<li>
												<span>Posted: </span>32 minutes ago
											</li>
										</ul>
										<button type="button" class="btn btn-info btn-lg ">Apply for job</button>
									</div>
								</div>
							</div>
							<div class="col-md-12 backColor">
								<div class="row">
									<div class="col-md-2">
										<img src="image/imagesr/05.png" alt="">
									</div>
									<div class="col-md-7">
										<h4 class="heading">Audio Visual Field Engineer</h4>
										<div class="meta-div clearfix">
											<span>at <a href="#">Wottif</a></span>
											<span class="job-label label label-danger">Part-time</span>
										</div>
										<p class="texing">It if sometimes furnished unwilling as additions so. Blessing resolved peculiar fat graceful ham. Sussex on at really ladies in as elinor. Sir sex opinions age properly extended...</p>
										<div class="sub-category">
											<a href="#">Engineer</a>
											<a href="#">Packaging</a>
											<a href="#">Package</a>
											<a href="#">Manufacturing</a>
										</div>
									</div>
									<div class="col-md-3">
										<ul class="meta-list">
											<li>
												<span>Location: </span>Paris, France
											</li>
											<li>
												<span>Rate/Salary: </span>Negotiable
											</li>
											<li>
												<span>Experience: </span>Expert
											</li>
											<li>
												<span>Posted: </span>32 minutes ago
											</li>
										</ul>
										<button type="button" class="btn btn-info btn-lg ">Apply for job</button>
									</div>
								</div>
							</div>
							<div class="col-md-12 backColor">
								<div class="row">
									<div class="col-md-2">
										<img src="image/imagesr/07.png" alt="">
									</div>
									<div class="col-md-7">
										<h4 class="heading">Solution Architect</h4>
										<div class="meta-div clearfix">
											<span>at <a href="#">Ebay</a></span>
											<span class="job-label label label-warning">Fulltime</span>
										</div>
										<p class="texing">It if sometimes furnished unwilling as additions so. Blessing resolved peculiar fat graceful ham. Sussex on at really ladies in as elinor. Sir sex opinions age properly extended...</p>
										<div class="sub-category">
											<a href="#">Engineer</a>
											<a href="#">Packaging</a>
											<a href="#">Package</a>
											<a href="#">Manufacturing</a>
										</div>
									</div>
									<div class="col-md-3">
										<ul class="meta-list">
											<li>
												<span>Location: </span>Paris, France
											</li>
											<li>
												<span>Rate/Salary: </span>Negotiable
											</li>
											<li>
												<span>Experience: </span>Expert
											</li>
											<li>
												<span>Posted: </span>32 minutes ago
											</li>
										</ul>
										<button type="button" class="btn btn-info btn-lg ">Apply for job</button>
									</div>
								</div>
							</div>
							<div class="col-md-12 backColor">
								<div class="row">
									<div class="col-md-2">
										<img src="image/imagesr/08.png" alt="">
									</div>
									<div class="col-md-7">
										<h4 class="heading">Controls Engineer</h4>
										<div class="meta-div clearfix">
											<span>at <a href="#">FedEx</a></span>
											<span class="job-label label label-warning">Fulltime</span>
										</div>
										<p class="texing">It if sometimes furnished unwilling as additions so. Blessing resolved peculiar fat graceful ham. Sussex on at really ladies in as elinor. Sir sex opinions age properly extended...</p>
										<div class="sub-category">
											<a href="#">Engineer</a>
											<a href="#">Packaging</a>
											<a href="#">Package</a>
											<a href="#">Manufacturing</a>
										</div>
									</div>
									<div class="col-md-3">
										<ul class="meta-list">
											<li>
												<span>Location: </span>Paris, France
											</li>
											<li>
												<span>Rate/Salary: </span>Negotiable
											</li>
											<li>
												<span>Experience: </span>Expert
											</li>
											<li>
												<span>Posted: </span>32 minutes ago
											</li>
										</ul>
										<button type="button" class="btn btn-info btn-lg ">Apply for job</button>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- ========================================= Result SideBar starts ========================================= -->
					<div class="resultSideBar">
						<div class="col-md-3">
							<div class="row">
								<div class="col-md-12 marg20">
									<span><h4>FEATURED EMPLOYERS</h4></span>
									<div class="top">
										<a href="#">
											<div class="image">
												<img src="image/imagesr/08.png" alt="image">
											</div>
											<div class="content">
												<h5 class="heading text font700">FexEd</h5>
												<p class="texting font600">Account, IT, Manager, Marketing, and much more...</p>
												<p class="mata-p clearfix"><span class="text font700">25</span> <span class="font13">position available</span> <span class="pull-right icon"><i class="fa fa-long-arrow-right"></i></span></p>
											</div>
										</a>
									</div>
								</div>
								<div class="col-md-12 marg20">
									<div class="top">
										<a href="#">
											<div class="image">
												<img src="image/imagesr/09.png" alt="image">
											</div>
											<div class="content">
												<h5 class="heading text font700">FexEd</h5>
												<p class="texting font600">Account, IT, Manager, Marketing, and much more...</p>
												<p class="mata-p clearfix"><span class="text font700">25</span> <span class="font13">position available</span> <span class="pull-right icon"><i class="fa fa-long-arrow-right"></i></span></p>
											</div>
										</a>
									</div>
								</div>
								<div class="col-md-12 marg20">
									<div class="top">
										<a href="#">
											<div class="image">
												<img src="image/imagesr/05.png" alt="image">
											</div>
											<div class="content">
												<h5 class="heading text font700">FexEd</h5>
												<p class="texting font600">Account, IT, Manager, Marketing, and much more...</p>
												<p class="mata-p clearfix"><span class="text font700">25</span> <span class="font13">position available</span> <span class="pull-right icon"><i class="fa fa-long-arrow-right"></i></span></p>
											</div>
										</a>
									</div>
								</div>
								<div class="col-md-12 locations">
									<div class="sidebar-module">
										<h4 class="sidebar-title">Top Locations</h4>
										<ul class="sidebar-link-list">
											<li><a href="#">Louisville, KY <span>(432)</span></a></li>
											<li><a href="#">Charleroi, PA <span>(123)</span></a></li>
											<li><a href="#">New York, NY<span>(3332)</span></a>
											<ul class="sidebar-link-list active">
												<li><a href="#">Mahattan<span>(23)</span></a></li>
												<li><a href="#">Broadway<span>(43)</span></a></li>
												<li><a href="#">Midtown<span>(09)</span></a></li>
												<li><a href="#">Brooklyn<span>(18)</span></a></li>
												<li><a href="#">Wall Streat<span>(65)</span></a></li>
											</ul></li>
											<li><a href="#">Richmond, VA <span>(134)</span></a></li>
											<li><a href="#">Overland Park, KS <span>(321)</span></a></li>
											<li><a href="#">Dallas, TX <span>(554)</span></a></li>
											<li><a href="#">Irvine, CA <span>(66)</span></a></li>
											<li><a href="#">Escondido, CA <span>(78)</span></a></li>
										</ul>
									</div>
								</div>
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
					</div>
					<!-- ========================================= Result SideBar ends ========================================= -->
				</div>
			</div>
		</div>
		<!-- ========================================= Result Job Lists ends ========================================= -->
		<!-- ========================================= Result Pagination starts ========================================= -->
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