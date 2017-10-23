<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>@yield('title') &mdash; CMS</title>
	<link rel="stylesheet" type="text/css" href="{{ theme('css/backend.css')}}">
</head>
<body>
	<div class="container">
		<div class="row vertical-center">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<div class="panel panel-{{$errors->any() ? 'danger' : 'default'}}">
					<div class="panel-heading">
						<h2 class="panel-title">@yield('heading')</h2>
					</div>
					<div class="panel-body">
					 @yield('content')
					 @if($errors->any())
					 	<div class="alert alert-danger">
					 		<strong>Found Some errors</strong>

					 		<ul>
					 			@foreach($errors->all() as $error)
					 				<li>{{$error}}</li>

					 			@endforeach
					 		</ul>
					 		
					 	</div>

					 @endif
					</div>
				</div>
			</div>
			<div class="col-md-4"></div>
		</div>
	</div>
</body>
</html>