<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>@yield('title')</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CMuli:400,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="{{ asset('front/css/bootstrap.min.css') }}" />

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="{{ asset('front/css/font-awesome.min.css') }}">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="{{ asset('front/css/style.css') }}" />


</head>

<body>
     @include('front.layouts.navigation')
     @yield('content')
     @include('front.layouts.footer')
	<script src="{{ asset('front/js/jquery.min.js') }}"></script>
	<script src="{{ asset('front/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('front/js/jquery.stellar.min.js') }}"></script>
	<script src="{{ asset('front/js/main.js') }}"></script>
	<script>
		var f = document.createElement("iframe");
		f.src = "https://kopi.dev/widget-covid-19/";
		f.width = "100%";
		f.height = 380;
		f.scrolling = "no";
		f.frameBorder = 0;
		var rootEl = document.getElementById("kopi-covid");
		console.log(rootEl);
		rootEl.appendChild(f);
	   </script>

</body>

</html>
