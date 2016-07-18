<nav class="mainPage navbar navbar-fixed-top">
	<div class="container">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="/"><img src="/image/logo.png"></a>
		</div>
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse " id="bs-example-navbar-collapse-1" style="margin:0 auto">
			<ul class="nav navbar-nav home ">
				<li><a href="/results">Results</a></li>
				<li><a href="/details">Details</a></li>
				<li><a href="/profile">Profile</a></li>
				<li><a href="/education">Education</a></li>
				<li><a href="/experience">Experience</a></li>
				<li><a href="/subject">Subject</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right login">
				@if(Auth::guest())
					<button type="button" class="btn btn-info" data-toggle="modal" data-target="#login">Login</button>
					<a href="/register_page"><button type="button" class="btn btn-info">Register</button></a>
				@else
					<a href="/logout"><button type="button" class="btn btn-info">{{ Auth::user()->name }}</button></a>
				@endif
			</ul>
			</div><!-- /.navbar-collapse -->
			</div><!-- /.container-fluid -->
</nav>