<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	
	<title>Redirecting to {{ 'https://coastwillow.org.nz' . $page->getPath() }}</title>
	<meta http-equiv="refresh" content="1; URL={{ 'https://coastwillow.org.nz' . $page->getPath() }}">
	<link rel="canonical" href="{{ 'https://coastwillow.org.nz' . $page->getPath() }}">

	<link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,300i,400,400i,700,700i,800,800i" rel="stylesheet">
	<link rel="stylesheet" href="{{ url('/assets/build/css/main.css') }}">
	<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>