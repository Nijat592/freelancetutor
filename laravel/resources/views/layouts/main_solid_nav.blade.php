<!DOCTYPE html>
<html>
	<head>
		<title>Master</title>
		<link rel="stylesheet" href="css/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/css/bootstrap-select.min.css">
		<link rel="stylesheet" type="text/css" href="css/kamran.css">
	</head>
	<body>
		{{-- Header --}}
		@include('partials.main_nav')
		{{-- //Header --}}

		{{-- Content --}}
		@yield('content')
		{{-- //Content --}}

		{{-- Footer --}}
		@include('partials.main_footer')
		{{-- //Footer --}}

		{{-- Login Modal --}}
		@include('partials.main_login_modal')
		{{-- //Login Modal --}}

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script> 
		<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/js/bootstrap-select.min.js"></script>
		<script src="https://use.fontawesome.com/aeb8f274a4.js"></script>
		<script src="js/jquery.js" type="text/javascript" charset="utf-8" async defer></script>
		<script src="https://cdn.ckeditor.com/4.5.10/basic/ckeditor.js"></script>
		<script src="js/main.js"></script>	
</body>
</html>
