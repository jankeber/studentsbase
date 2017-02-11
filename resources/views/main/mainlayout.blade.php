<html>
	<head>
		<title>@yield('title')</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="/bower_components/jquery-ui/themes/base/jquery-ui.min.css">
		<script type="text/javascript" src="/bower_components/jquery/dist/jquery.min.js"></script>
		<script type="text/javascript" src="/bower_components/jquery-ui/jquery-ui.min.js"></script>
		<link rel="stylesheet" href="/bower_components/bootstrap/dist/css/bootstrap.min.css">
		<script type="text/javascript" src="/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
		<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
		<link rel="stylesheet" href="/css/main.css">
		<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.css" />
<script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.js"></script>
<script>
window.addEventListener("load", function(){
window.cookieconsent.initialise({
  "palette": {
    "popup": {
      "background": "#3c404d",
      "text": "#d6d6d6"
    },
    "button": {
      "background": "#8bed4f"
    }
  }
})});
</script>
		@yield('add_assets')
	</head>
	<body>
		<div class="navbar navbar-inverse navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					<a class="navbar-brand" href="#">StudentsBase</a>
				</div>
				<div class="navbar-inner">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="{{ url('/') }}">Home</a></li>
						<li><a href="{{ url('/students/create') }}">Create student</a></li>
						<li><a href="{{ url('/students') }}">Last students</a></li>
						<li><a href="">About</a></li>
					</ul>
				</div>
			</div>
		</div>
		@yield('content')
	</body>
	@yield('footjs')
	<script type="text/javascript" src="/js/date.js"></script>
</html>