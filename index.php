<!doctype html>
<html>
<head>
    <title>Weather Finder</title>

    <meta charset="utf-8" />
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <style type="text/css">

    html, body {
    	height: 100%;
    }

  	#background-image {
  		height: 100%;
  		width: 100%;
  		background: url(background.jpeg);
  		-webkit-background-size: cover;
  		-moz-background-size: cover;
  		-o-background-size: cover;
  		background-size: cover;
  		background-repeat: no-repeat;
  		background-position: center;
  		padding-top: 135px;
  	}

  	.textcontrol {
  		font-family: Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif;
  		color: #EFEFEF;
  		text-align: center;
  		text-shadow: 0 0 0.2em #95A3B7;
  		
  	}

  	h4 {
  		padding-bottom: 10px;
  	}

  	.alert {
  		margin-top: 10px;
  		display: none;
  	}


    
    </style>  
    <!-- Latest compiled and minified CSS -->
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

	<!--JQuery URL: http://code.jquery.com/jquery-latest.min.js-->
   <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js">

   </script>

 
</head>

<body>

<div class="container" id="background-image">

	<div class="row">

		<div class="col-md-6 col-md-offset-3">
  
			<div class="textcontrol">

				<h1>Weather Predictor</h1>

				<h4>This webpage will tell you the weather of any place in the world!</h4>

				<h4>Enter your city below!</h4>

				<form>

	  				<div class="form-group">
	   
	    				<input type="text" class="form-control" id="city" placeholder="e.g. London, San Francisco, New York">
	  				
	  				</div>

	    				<button id="findMyWeather" class="btn btn-success btn-lrg">Find My Weather</button>

	  			</form>

	  			<div id="success" class="alert alert-success" role="alert">Success!</div>

				<div id="fail" alert class="alert alert-danger" role="alert"><strong>Uh oh!&nbsp</strong>We could not find your city, was it spelt correctly?</div>

				<div id="noCity" alert class="alert alert-info" role="alert"><strong>Oh wait!&nbsp</strong>You forgot to enter a city.</div>


			</div>

		</div>

	</div>


   
</div>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script> 

<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>

<script type="text/javascript">

	$("#findMyWeather").click(function(event) {

		event.preventDefault();

			$(".alert").hide();

			if ($("#city").val()!="") {

			$.get("scraper.php?city="+$("#city").val(), function(data) {

				if (data=="") {

				
					$("#fail").fadeIn();

				} else {


					
					$("#success").html(data).fadeIn(); 

				}

			}); 

	} else {

		$("#noCity").fadeIn();
	}

	});

</script>


</body>
</html>



