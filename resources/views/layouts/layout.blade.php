<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Lab 8 v1</title>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}" />
		<script src="{{ URL::asset('js/jquery.js') }}"></script>
		<script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
		<!-- Latest compiled and minified JavaScript -->
	</head>
	<body>
	{{--  --}}
	@if (Session::has('flash_message'))
	<div class="container">
	<div class="col-md-12" style="margin-top:20px;">
		<div class="alert alert-success alert-dismissable tex-center"><a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>{{ Session::get('flash_message') }}</div>
		</div>
		</div>
	@endif
	{{-- </div> --}}
		<!-- kat sini akan display kita punya content -->
		<!-- ini master page -->
{{-- 		<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					<a class="navbar-brand" href="#">A Survey for UPM Academics</a>
				</div>
			</div>
		</nav> --}}
		
		@yield('content')
	</body>
</html>