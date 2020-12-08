<!DOCTYPE html>
<html dir="ltr" lang="en-US">
	<head>

        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="author" content="SemiColonWeb" />

        <!-- Stylesheets
        ============================================= -->
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Raleway:300,400,500,600,700,800,900|Poppins:700%2C400%2C500" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="/acss/css/bootstrap.css" type="text/css" />
        <link rel="stylesheet" href="/acss/style.css" type="text/css" />
        <link rel="stylesheet" href="/acss/css/dark.css" type="text/css" />
        <link rel="stylesheet" href="/acss/css/font-icons.css" type="text/css" />
        <link rel="stylesheet" href="/acss/css/animate.css" type="text/css" />
        <link rel="stylesheet" href="/acss/css/magnific-popup.css" type="text/css" />

        <link rel="stylesheet" href="/acss/css/responsive.css" type="text/css" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!-- SLIDER REVOLUTION 5.x CSS SETTINGS -->
        <link rel="stylesheet" type="text/css" href="/acss/include/rs-plugin/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css">
        <link rel="stylesheet" type="text/css" href="/acss/include/rs-plugin/fonts/font-awesome/css/font-awesome.css">

        <link rel="stylesheet" type="text/css" href="/acss/include/rs-plugin/css/settings.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="/acss/include/rs-plugin/css/layers.css">
        <link rel="stylesheet" type="text/css" href="/acss/include/rs-plugin/css/navigation.css">


	</head>

	<body class="stretched">
		@include('inc.navbar')
        <div class="container-fluid">
            @yield('content')
        </div>
		@include('inc.footer')
	</body>
</html>
