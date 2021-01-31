<!DOCTYPE html>
<html>
<head>
	<title>@yield('title') ADMINISTRACION</title>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="routeName" content="{{ Route::currentRouteName() }}">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="{{ url('/static/css/admin.css?v='.time()) }}">
	<link rel="stylesheet" type="text/css"  href="{{ asset('/static/css/tabla.css?v='.time()) }}">
	<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
	 <script src="https://kit.fontawesome.com/6c52bb4677.js" crossorigin="anonymous"></script>

	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
	

	<script>
		$(document).ready(function(){
			$('[data-toggle="tooltip"]').tooltip()
		});
	</script>
	<script src="/bootstrap-4.5.3-dist/js/jquery-3.5.1.min.js"></script>
  <script src="https://kit.fontawesome.com/6c52bb4677.js" crossorigin="anonymous"></script>
  <script src="/bootstrap-4.5.3-dist/js/bootstrap.bundle.min.js"></script>
	 <script src="/js/axios.js"></script>
  @yield('escripts')
</head>
<body class="fondo">
	<div class="wrapper">
	<div class="col1">@include('admin.sidebar')</div>
	<div class="col2">
		<nav class="navbar navbar-expand-lg shadow">
			<div class="collapse navbar-collapse">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a href="{{ url('/admin') }}" class="nav-link"><i class="fas fa-home"></i>Home</a>
					</li>
				</ul>
				
			</div>
		</nav>
		<div class="page">
			<div class="container-fluid">
				<nav aria-label="breadcrumb shadow">
					<ol class="breadcrumb">
					<li class="breadcrumb-item">
						<a href="{{url('/admin')}}"><i class="fas fa-home"></i>Home</a>
					</li>
					@section('breadcrumb')
					@show
					</ol>
				</nav>
			</div>
			@if(Session::has('message'))
				<div class="container">
				<div class="metop16 alert alert-{{ Session::get('typealert') }}" style="display:none;">
				{{ Session::get('message') }}
			@if ($errors->any())
			<ul>
				@foreach($errors->all() as $error)
				<li>{{ $error }}</li>
				@endforeach
			</ul>
			@endif
			<script>
				$('.alert').slideDown();
				setTimeout(function(){ $('.alert').slideUp(); }, 10000);
			</script>
		</div>
	</div>
	@endif
	@section('content')
	@show

		</div>
	</div>
	</div>

</body>
</html>