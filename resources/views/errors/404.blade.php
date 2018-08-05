<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
	<head>
		<meta charset="utf-8">
		<title>Page Not Found</title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="robots" content="noindex, nofollow">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
		<link href="{{ mix('/css/app.css') }}" rel="stylesheet">
	</head>
	<body class="bg-github">
		<div class="litepie-not-found">
			<h2><strong>OOPS<span class="lblue">!</span></strong> It<span class="lblue">'</span>s <strong>404<span class="lblue">!</span></strong></h2>
			<h3>This page <span class="red">  {{ Request::path() }}  </span> cannot be found.</h3>
			<p>The wise man therefore always holds in these matters to this principle always these of selection.</p>
			<p></p>
			<a href="{{ URL('/') }}" class="btn btn-xs bg-red white"><i class="fa fa-angle-double-left white"></i> Back</a>
		</div>
	</body>
</html>