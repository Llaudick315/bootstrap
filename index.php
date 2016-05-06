<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">

		<!-- sets IE rendering to IE-EDGE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />

		<!-- sets viewport width to device width, scaling 1:1 -->
		<meta name="viewport" content="width=device-width, initial-scale=1" />


		<!-- Bootstrap Latest compiled and minified CSS -->
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous" />

		<!-- Optional theme -->
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous" />

		<!-- HTML5 shiv and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

		<!-- our custom css -->
		<link rel="stylesheet" href="css/style" type="text/css"
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

		<!-- Latest compiled and minified Bootstrap JavaScript, all compiled plugins included -->
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

		<title>Bootstrap Practice</title>
	</head>
	<body class="sfooter">
		<div class="sfooter-content">

			<header>
				<div class="container">
					<!-- begin bootstrap navbar -->
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-menu" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<i class="fa fa-th fa-2x fa-spin" aria-hidden="true"></i>
						</button>
						<a class="navbar-brand" href="#">Lucas Bootstrap</a>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="main-menu">
						<ul class="nav navbar-nav navbar-right">
							<li><a href="/">Home</a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">More Items <span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="http://PGAtour.com">PGA Tour</a></li>
									<li><a href="https://google.com">Google</a></li>
									<li><a href="https://apple.com">Apple</a></li>
								</ul>
							</li>
						</ul>
					</div><!-- /.navbar-collapse -->
				</div>
			</header>
			<main>
				<div class="container">
					<div class="row">
					<!-- main text board -->
					<div class="col-xs-12 well text-center">
						<h1>Probably the Best Website Ever</h1>
						<p>This is my attempt at bootstrap hopefully it looks decent</p>
					</div>

					<!--content section-->
					<div class="row">
						<div class="col-md-4">
							<div class="well">
								<h4>Section 1</h4>
								<ol>
									<li>blah 1</li>
									<li>blah 2</li>
									<li>blah 3</li>
									<li>blah 4</li>
								</ol>
							</div>
						</div>
						<div class="col-md-4">
							<div class="well">
								<h4>Section 2</h4>
								<ol>
									<li>blah blah</li>
									<li>blah blah dos</li>
									<li>blah blah 3</li>
									<li>blah blah 7</li>
								</ol>
							</div>
						</div>
						<div class="col-md-4">
							<div class="well">
								<h4>Section 3</h4>
								<ol>
									<li>blah blah blah uno</li>
									<li>blah blah blah 5</li>
									<li>blah blah blah 3</li>
									<li>blah blah blah 15</li>
								</ol>
							</div>
						</div>
					</div>
					<!-- another content section-->
					<div class="row">
						<div class="col-md-6 well text-center">
							<div class="well">
								<h4>section 5</h4>
							</div>
						</div>
						<div class="col-md-6 well text-center">
							<div class="well">
								<h4>section 6</h4>
							</div>
						</div>
					</div>
					</div>
				</div>
			</main>
		</div>
		<footer>
			<div class="container">
				<div class="row">
					<div class="col-md-6 text-center">
						<div class="foot-content">
							<h6>More stuff</h6>
						</div>
					</div>
					<div class="col-md-6 text-center">
						<div class="foot-content">
							<h6>More stuff here too</h6>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12">
						<div class="copyright text-center">
							&copy; 2016 Yup!
						</div>
					</div>
				</div>
			</div>
		</footer>
	</body>
</html>