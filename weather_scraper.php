<!doctype html>
<html>
<head>
<title>Weather Scraper</title>
<meta charset="utf-8" />
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />

<!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	
	<!-- JQUERY -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<style>
	html, body {
		height:100%;
	}
	.container {
		background-image:url("pexels.jpg");
		width:100%;
		height:100%;
		background-size:cover;
		background-position:center;
		padding-top:100px;
	}
	h1 {
		font-size:300%;
	}
	
	.center {
		text-align:center;
	}
	
	.white {
		color:white;
	}
	
	p {
		padding-top:15px;
		padding-bottom:15px;
	}
	
	#btn {
		margin-top:30px;
	}
	
	.alert {
		margin-top:30px;
		display:none;
		background-color:rgba(0, 0, 0, 0.3);
		border:none;
	}
	
</style>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3 center">
				<h1 class="center white">Weather Forecaster</h1>
				<p class="lead center white">Enter your city below and press the button to see the weather forecast results of your city.</p>
				<form class="form-group" method="post">
					<div class="form-group">
						<input class="form-control" type="text" name="location" id="location" placeholder="Eg. London, Istanbul, Paris, etc..." id="location"/>
					</div>
					<div class="form-group">
						<input class="btn btn-success btn-lg" type="submit" value="Get My City's Weather" id="btnFindMyWeather"/>
					</div>
				</form>
				<div class="alert alert-success white">
				</div>
				<div class="alert alert-danger white">
				</div>
			</div>
		</div>
	</div>
	
	
	
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	
	<!-- JavaScript code to use the scraper php script to get the result on the main script... -->
	<script>
		$("#btnFindMyWeather").click(function(event) {
			event.preventDefault();
			
			if($("#location").val() != "") {
				$.get("scraper.php?city=" + $("#location").val(), function(data) {
					if(data != "") {
						$(".alert-success").html(data).fadeIn();
					} else {
						$(".alert-success").html("No available result.").fadeIn().delay(1000).fadeOut();
					}
				});
			} else {
				alert("You must enter a city.");
				$(".alert-success").fadeOut();
				//$(".alert-danger").html("You must enter a city.").fadeIn().fadeOut();
			}
			
			
		});
	</script>
</body>
</html>