<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="us-en"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="us-en"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="us-en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="us-en"> <!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		
		<title>Studio Hansraj</title>
		
		<meta name="title" content="Studio Hansraj" />
		<meta name="description" content="Studio Hansraj" />
		<link rel="canonical" href="http://www.studiohansraj.com" />
		
		<meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no' />
		<link rel="shortcut icon" href="./favicon.ico" >

		<meta property="og:title" content="Studio Hansraj"/>
		<meta property="og:type" content=""/>
		<meta property="og:url" content="www.studiohansraj.com"/>
		<meta property="og:image" content=""/>
		<meta property="og:site_name" content="Studio Hansraj"/>
		<meta property="og:description" content="Studio Hansraj"/>

		<link href="{{ url('css/screen.css') }}" rel="stylesheet" />
		<link href="{{ url('css/selectize.bootstrap3.css') }}" rel="stylesheet">

		<!--[if IE]><link href="/css/ie.css" media="screen, projection" rel="stylesheet" type="text/css" /><![endif]-->

		<script src="{{ url('js/libs/modernizr-2.6.2-respond-1.1.0.min.js') }}"></script>
	</head>
	<body>
		<div id="main" role="main" class=''>
			@include('partials.navigation-mobile', array('status'=>'closed'))
			<div id='content'>
				<header>
					@include('partials.logo')
					@include('partials.navigation', array('status'=>'closed'))
				</header>
				<div class='loader-container show'>
					<div class='loader'></div>
				</div>
				@yield('content')
				@include('partials.footer')
			</div>
		</div>
		<!-- /#main -->

		<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-54477259-1', 'auto');
		ga('send', 'pageview');
		</script>

		<!-- JAVASCRIPT -->
		<script type="text/javascript">var root = '{{url("/")}}';</script>

		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js" type="text/javascript"></script>
		<script>window.jQuery || document.write('<script src="/js/libs/jquery-1.8.3.min.js"><\/script>')</script>

		<script src="{{ url('js/libs/salvattore.min.js') }}" type="text/javascript"></script>
		<script src="{{ url('js/libs/selectize.js') }}" type="text/javascript"></script>
		<script src="{{ url('js/libs/pubSub.js') }}" type="text/javascript"></script>
		<script src="{{ url('js/libs/rwdResize.js') }}" type="text/javascript"></script>

		<script src="{{ url('js/studiohansraj.js') }}" type="text/javascript"></script>
		<script src="{{ url('js/studiohansraj.intro.js') }}" type="text/javascript"></script>
		<script src="{{ url('js/studiohansraj.listing.js') }}" type="text/javascript"></script>
		<script src="{{ url('js/studiohansraj.details.js') }}" type="text/javascript"></script>
		<script src="{{ url('js/studiohansraj.nav.js') }}" type="text/javascript"></script>

	</body>
</html>
