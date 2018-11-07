<?php 
    session_start();
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

        <!-- Style Imports-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="./css/style_xs.css">
    	<link rel="stylesheet" type="text/css" href="./css/style_sm.css">
        <link rel="stylesheet" type="text/css" href="./css/style_md.css">
        <link rel="stylesheet" type="text/css" href="./css/style_lg.css">

        <!-- Script Imports -->
    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
        <script src="./js/indexScript.js"></script>
    </head>

    <!-- Body -->
    <body>

        <!-- Navigation Bar -->
    	<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container">

                <!-- Logo -->
        		<a href="#"><img id="navbar-image" src="./media/maple.png" alt="logo"></a>

                <!-- Dropdown Menu -->
        		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        			<span class="navbar-toggler-icon"></span>
        		</button>

                <!-- Dropdown Items -->
        		<div class="collapse navbar-collapse" id="navbarNav">
        			<ul class="navbar-nav">
        				<li class="nav-item active">
        					<a class="nav-link" href="#">Cabinet<span class="sr-only">(current)</span></a>
        				</li>
        				<li class="nav-item">
        					<a class="nav-link" href="cabinet.html">Live View</a>
        				</li>
        				<li class="nav-item">
        					<a class="nav-link" href="trends.html">Trends</a>
        				</li>
        				<li class="nav-item">
        				    <?php
                                include './php/checkforuser.php';
                            ?>
        				</li>
        			</ul>
        		</div>
            </div>
    	</nav>

        <!-- Cabinet List -->
    	<div class="row">
            <div class="col-lg-12">
              <p>
                <button type="button" class="btn btn-sq-nm" id="cab1" onclick=" window.location = 'cabinet.html'">
                	<span class="btnTitle">Cabinet 1</span>
                    <br>
                    <div class="btnData">
                        <span class="btnTemp" id="cab1Temp">22&degC</span>
                        <br>
                        <span class="btnMotion">No Movement Detected</span>
                    </div>
            	</button>
            	<button type="button" class="btn btn-sq-nm" onclick=" window.location = 'cabinet.html'">
                	<span class="btnTitle">Cabinet 2</span>
                    <br>
                    <div class="btnData">
                        <span class="btnTemp">--&degC</span>
                        <br>
                        <span class="btnMotion">No Movement Detected</span>
                    </div>
            	</button>
            	<button type="button" class="btn btn-sq-nm" onclick=" window.location = 'cabinet.html'">
                	<span class="btnTitle">Cabinet 3</span>
                    <br>
                    <div class="btnData">
                        <span class="btnTemp">--&degC</span>
                        <br>
                        <span class="btnMotion">No Movement Detected</span>
                    </div>
            	</button>
            	<button type="button" class="btn btn-sq-nm" onclick=" window.location = 'cabinet.html'">
                	<span class="btnTitle">Cabinet 4</span>
                    <br>
                    <div class="btnData">
                        <span class="btnTemp">--&degC</span>
                        <br>
                        <span class="btnMotion">No Movement Detected</span>
                    </div>
            	</button>
            	<button type="button" class="btn btn-sq-nm" onclick=" window.location = 'cabinet.html'">
                	<span class="btnTitle">Cabinet 5</span>
                    <br>
                    <div class="btnData">
                        <span class="btnTemp">--&degC</span>
                        <br>
                        <span class="btnMotion">No Movement Detected</span>
                    </div>
            	</button>
            	<button type="button" class="btn btn-sq-nm" onclick=" window.location = 'cabinet.html'">
                	<span class="btnTitle">Cabinet 6</span>
                    <br>
                    <div class="btnData">
                        <span class="btnTemp">--&degC</span>
                        <br>
                        <span class="btnMotion">No Movement Detected</span>
                    </div>
            	</button>
                <button type="button" class="btn btn-sq-nm" onclick=" window.location = 'cabinet.html'">
                    <span class="btnTitle">Cabinet 7</span>
                    <br>
                    <div class="btnData">
                        <span class="btnTemp">--&degC</span>
                        <br>
                        <span class="btnMotion">No Movement Detected</span>
                    </div>
                </button>
                <button type="button" class="btn btn-sq-nm" onclick=" window.location = 'cabinet.html'">
                    <span class="btnTitle">Cabinet 8</span>
                    <br>
                    <div class="btnData">
                        <span class="btnTemp">--&degC</span>
                        <br>
                        <span class="btnMotion">No Movement Detected</span>
                    </div>
                </button>
                <button type="button" class="btn btn-sq-nm" onclick=" window.location = 'cabinet.html'">
                    <span class="btnTitle">Cabinet 9</span>
                    <br>
                    <div class="btnData">
                        <span class="btnTemp">--&degC</span>
                        <br>
                        <span class="btnMotion">No Movement Detected</span>
                    </div>
                </button>
                <button type="button" class="btn btn-sq-nm" onclick=" window.location = 'cabinet.html'">
                    <span class="btnTitle">Cabinet 10</span>
                    <br>
                    <div class="btnData">
                        <span class="btnTemp">--&degC</span>
                        <br>
                        <span class="btnMotion">No Movement Detected</span>
                    </div>
                </button>
              </p>
            </div>
    	</div>
    </body>
</html>