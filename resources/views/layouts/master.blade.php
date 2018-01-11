<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="description" content="Neon Admin Panel" />
	<meta name="author" content="" />

	<link rel="icon" href="images/favicons.png">

	<title>Surveynesia | Navbars</title>

	<link rel="stylesheet" href="js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css">
	<link rel="stylesheet" href="css/font-icons/entypo/css/entypo.css">
	<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/neon-core.css">
	<link rel="stylesheet" href="css/neon-theme.css">
	<link rel="stylesheet" href="css/neon-forms.css">
	<link rel="stylesheet" href="css/custom.css">

	<script src="js/jquery-1.11.3.min.js"></script>
	

	<!--[if lt IE 9]><script src="assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
	
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->


</head>
<body class="page-body" data-url="http://neon.dev">

<div class="page-container"><!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->
	
	<div class="main-content">
				
		<nav class="navbar navbar-fixed-top navbar-inverse" role="navigation">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">
        			<img alt="Brand" src="images/logos.png" style="margin-top: -3px;" width="120">
      			</a>
			</div>
		
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
				<ul class="nav navbar-nav">
					<li class="active"><a href="#">Free Trial</a>
					</li>
					<li><a href="#">Pricing</a>
					</li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="register">Sign Up</a>
					<li><a href="login">Login</a>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span> Menu <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="#">Action</a>
							</li>
							<li><a href="#">Another action</a>
							</li>
							<li><a href="#">Something else here</a>
							</li>
							<li class="divider"></li>
							<li><a href="#">Separated link</a>
							</li>
						</ul>
					</li>
				</ul>
			</div>
			<!-- /.navbar-collapse -->
		</nav>
		<br><br>

		@yield('content')

		<br>
		<br>
		<br>
		<!-- Footer -->
		<footer class="main">
			
			&copy; 2017 <strong>Surveynesia</strong> Admin Theme by <a href="#" target="_blank">Surveynesia - MJ</a>
		
		</footer>
	</div>
	
</div>


	<!-- Imported styles on this page -->
	<link rel="stylesheet" href="js/selectboxit/jquery.selectBoxIt.css">

	<!-- Bottom scripts (common) -->
	<script src="js/gsap/TweenMax.min.js"></script>
	<script src="js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/joinable.js"></script>
	<script src="js/resizeable.js"></script>
	<script src="js/neon-api.js"></script>


	<!-- Imported scripts on this page -->
	<script src="js/icheck/icheck.min.js"></script>
	<script src="js/neon-chat.js"></script>
	<script src="js/jquery.bootstrap.wizard.min.js"></script>
	<script src="js/jquery.validate.min.js"></script>
	<script src="js/jquery.inputmask.bundle.js"></script>
	<script src="js/selectboxit/jquery.selectBoxIt.min.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/bootstrap-switch.min.js"></script>
	<script src="js/jquery.multi-select.js"></script>
	<script src="js/neon-chat.js"></script>



	<!-- JavaScripts initializations and stuff -->
	<script src="js/neon-custom.js"></script>


	<!-- Demo Settings -->
	<script src="js/neon-demo.js"></script>

</body>
</html>