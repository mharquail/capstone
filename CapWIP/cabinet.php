<?php 
    session_start();

    if (isset($_GET['uid'])) {
		$_SESSION['uid'] = $_GET['uid'];
	}
	else{
		$_SESSION['uid'] = "0001203B";
	}
?>
<!-- 
    
        ArraysAtOne Capstone 2018 - Maple Leaf Foods

        Kevin Baumgartner
        Jesse Berube
        Marc Harquail
        Alex Ireland

 -->
<!DOCTYPE html>

<!-- HTML -->
<html>

	<!-- Head -->
	<head>

		<!-- Meta -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" type="image/png" href="./media/maple.png"/>
		<title>Temperature Monitor</title>

		<!-- Style Imports -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
	    <link rel="stylesheet" type="text/css" href="./css/style_xs.css">
		<link rel="stylesheet" type="text/css" href="./css/style_sm.css">
	    <link rel="stylesheet" type="text/css" href="./css/style_md.css">
	    <link rel="stylesheet" type="text/css" href="./css/style_lg.css">

		<!-- Script Imports -->
		<script src="./js/cabinetScript.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js"></script>
	</head>

	<!-- Body -->
	<body>

		<!-- Navigation Bar -->
    	<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container">

                <!-- Logo -->
        		<a href="index.php"><img id="navbar-image" src="./media/maple.png" alt="logo"></a>

                <!-- Dropdown Menu -->
        		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        			<span class="navbar-toggler-icon"></span>
        		</button>

                <!-- Dropdown Items -->
        		<div class="collapse navbar-collapse" id="navbarNav">
        			<ul class="navbar-nav">
        				<li class="nav-item active">
        					<a class="nav-link" href="#">Live View</a>
        				</li>
        				<li class="nav-item">
        					<a class="nav-link" href="trends.php">Trends</a>
        				</li>
        			</ul>
        		</div>
            </div>
    	</nav>

    	<!-- Data Display -->

    	<!-- Primary Temperature -->
		<div class="row">
			<div class="col block hist" style="text-align: center;" id="temp">
				<p class="temp" style="color:white">LOADING</p>
			</div>
		</div>

		<!-- Accelerometer Movement -->
		<div class="row">
			<div class="col block" id="accel">
				<p class="accel">No Movement Detected</p>
			</div>
		</div>

		<!-- MAX Temperature -->
		<div class="row" id="maxTemp">
			<div class="histLbl col hist">HIGH*</div>
			<div class="col hist histInfo">-- &degC</div>
		</div>

		<!-- MIN Temperature -->
		<div class="row" id="minTemp">
			<div class="col hist histLbl">LOW*</div>
			<div class="col hist histInfo">-- &degC</div>
		</div>

		<!-- Last Update -->
		<div class="row">
			<div class="col hist histLbl">Updated</div>
			<div class="col hist histInfo" id="time">--:--</div>
		</div>

		<!-- Disclaimer -->
		<div class="row">
			<div class="col disclaim histInfo">*LAST 24 HOURS</div>
		</div>
	</body>
</html>