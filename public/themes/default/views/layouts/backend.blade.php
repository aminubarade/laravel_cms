<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="{{ theme('css/backend.css')}}">
	<title>Admin</title>
</head>
<body>
	 <nav class="navbar navbar-static-top navbar-inverse">
            <div class="container">
                <div class="navbar-header"><a href="/" class="navbar-brand">CMSAmeen</a></div>
                <ul class="nav navbar-nav">
                    <li><a href="#">Dashboard</a></li>
                    <li><a href="{{route('users.index')}}">Users</a></li>
                    <li><a href="{{route('pages.index')}}">Pages</a></li>
                    <li><a href="#">Posts</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><span class="navbar-text">Hello, Ameen</span></li>
                    <li><a href="{{route('logout')}}">Logout</a></li>
                </ul>
            </div>
        </nav>
         <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3>@yield('title')</h3>
                    @yield('content')
         		</div>
         	</div>
         </div>
</body>
</html>