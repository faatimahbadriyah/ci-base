<!DOCTYPE html>
<html lang="en">
<head>
  <title>SHP</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>
	body {
		font: 400 15px/1.8 Lato, sans-serif;
		color: #777;
	}
	h3, h4 {
		margin: 10px 0 30px 0;
		letter-spacing: 10px;      
		font-size: 20px;
		color: #111;
	}
	.container {
		padding: 5% 1%;
	}
	.carousel-inner img {
		-webkit-filter: grayscale(90%);
		filter: grayscale(90%); /* make all photos black and white */ 
		width: 100%; /* Set width to 100% */
		margin: auto;
	}
	.carousel-caption h3 {
		color: #fff !important;
	}
	@media (max-width: 600px) {
		.carousel-caption {
		display: none; 
		}
	}
	.bg-1 {
		background: #2d2d30;
		color: #bdbdbd;
	}
	.bg-1 h3 {color: #fff;}
	.bg-1 p {font-style: italic;}
	.list-group-item:first-child {
		border-top-right-radius: 0;
		border-top-left-radius: 0;
	}
	.list-group-item:last-child {
		border-bottom-right-radius: 0;
		border-bottom-left-radius: 0;
	}	
	.nav-tabs li a {
		color: #777;
	}
	.navbar {
		font-family: Montserrat, sans-serif;
		margin-bottom: 0;
		background-color: #2d2d30;
		border: 0;
		font-size: 11px !important;
		letter-spacing: 4px;
		opacity: 0.9;
	}
	.navbar li a, .navbar .navbar-brand { 
		color: #d5d5d5 !important;
	}
	.navbar-nav li a:hover {
		color: #fff !important;
	}
	.navbar-nav li.active a {
		color: #fff !important;
		background-color: #29292c !important;
	}
	.navbar-default .navbar-toggle {
		border-color: transparent;
	}
	.open .dropdown-toggle {
		color: #fff;
		background-color: #555 !important;
	}
	.dropdown-menu li a {
		color: #000 !important;
	}
	.dropdown-menu li a:hover {
		background-color: red !important;
	}
	footer {
		background-color: #2d2d30;
		color: #f5f5f5;
		padding: 32px;
	}
	footer a {
		color: #f5f5f5;
	}
	footer a:hover {
		color: #777;
		text-decoration: none;
	}  
  </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>                        
			</button>
			<a class="navbar-brand" href="#myPage">Logo</a>
		</div>
		<div class="collapse navbar-collapse" id="myNavbar">
			<ul class="nav navbar-nav navbar-right">
				<li><a href="<?php echo base_url()?>">HOME</a></li>
				<li><a href="<?php echo base_url()?>peta">PETA</a></li>
				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#">DATA POS HIDROLOGI
					<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="<?php echo base_url()?>pda">PDA</a></li>
						<li><a href="<?php echo base_url()?>pch">PCH</a></li>
						<li><a href="<?php echo base_url()?>pka">PKA</a></li> 
					</ul>
				</li>
				<li><a href="<?php echo base_url()?>isohyet">ISOHYET</a></li>
				<li><a href="<?php echo base_url()?>analisis">ANALISIS HIDROLOGI</a></li>
			</ul>
		</div>
	</div>
</nav>

<section class="container">
	<?php $this->load->view($main_view); ?>
</section>

<!-- Footer -->
<footer class="text-center">
	<a class="up-arrow" href="#myPage" data-toggle="tooltip" title="Back to top">
		<span class="glyphicon glyphicon-chevron-up"></span>
	</a><br><br>
	<p>Copyright &copy; Company 2019</p> 
</footer>

<script>
	$(document).ready(function(){
	$('[data-toggle="tooltip"]').tooltip(); 
	$(".navbar a, footer a[href='#myPage']").on('click', function(event) {
		if (this.hash !== "") {
		event.preventDefault();
		var hash = this.hash;
		$('html, body').animate({
			scrollTop: $(hash).offset().top
		}, 900, function(){
			window.location.hash = hash;
		});
		}
	});
	})
</script>

</body>
</html>
