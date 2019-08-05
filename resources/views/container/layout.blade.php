<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.css">
	<title>@yield('title', 'Laracast')</title>
</head>

<body>
	<div class="container">
		<ul>
			<li><a href="/">Home</a></li>
			<li><a href="/contact">contact us</a></li>
			<li><a href="/about">About us</a></li>
		</ul>
		@yield('content')
	</div>
</body>

</html>