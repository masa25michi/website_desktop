<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PolyU COMP 3421 Project</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
  </head>

  <body>
    
    <!-- Static navbar -->
    <?php
        include_once "header.php";
        navigateHeader("home");
    ?>  

	<div id="headerwrap">
	    <div class="container">
			<div class="row">
				<div class="col-lg-6 col-lg-offset-3">
					<h4>COMP3421</h4>
					<h1>POLYU Conference</h1>
					<h4>Created By Masa, Pete, and Jerry</h4>
				</div>
			</div>
	    </div> 
	</div>
	
	<section id="works"></section>
	<div class="container">
		<div class="row centered mt mb">
			<h1>Menu</h1>
			<div class="col-sm-4 ">
                PolyU Website<br /><br />
				<a href="https://www.polyu.edu.hk/web/en/home/index.html"><img src="assets/img/polyu_icon.png" class="img-responsive"
				width = 50% height= 50% style="margin:0 auto"></a>
			</div>
			<div class="col-sm-4">
                Search Conference<br /><br />
				<a href="display.php"><img src="assets/img/search.png" class="img-responsive" width = 50% height= 50% style="margin:0 auto"></a>
			</div>
			<div class="col-sm-4">
                Map
				<a href="indexmap.php"><img src="assets/img/map_icon.png"  class="img-responsive" width = 50% height= 50% style="margin:0 auto"></a>
			</div>
            <br />
		</div>
		<div class="row centered mt mb">
			<div class="col-sm-4">
                Survey<br />
                <a href="survey.php"><img src="assets/img/survey_icon.png " class="img-responsive" width = 50% height= 50% style="margin:0 auto"></a>
            </div>
			<div class="col-sm-4">
                Thank You Page<br /><br />
                <a href="thankyou.php"><img src="assets/img/thank_icon.png " class="img-responsive" width = 60% height= 60% style="margin:0 auto"></a>
            </div>
			<div class="col-sm-4">
                Sponsor Page
                <a href="sponsor.php"><img src="assets/img/sponsor_icon.png " class="img-responsive" width = 70% height= 70% style="margin:0 auto"></a>
            </div>
            <div class="col-sm-4">
                Floor<br />
                <a href="floorPlans.php"><img src="assets/img/floor_icon.png " class="img-responsive" width = 50% height= 50% style="margin:0 auto"></a>
            </div>
            <div class="col-sm-4">
                About<br />
                <a href="about.php"><img src="assets/img/about_icon.png " class="img-responsive" width = 50% height= 50% style="margin:0 auto"></a>
            </div>
            
		</div>

		<div class="row centered mt mb">
			<h1>Admin</h1>
                <a href="login.php"><img src="assets/img/admin_icon.png" class="img-responsive" width = 15% height= 15% style="margin:0 auto"></a>
		</div>
		
	</div>

	<div id="footerwrap">
		<div class="container">
			<div class="row centered">

				<div class="col-lg-4">
					<p>Masamichi Tanaka 14116974D</p>
				</div>
			
				<div class="col-lg-4">
					<p>Chan Wing Lun 16033356D</p>
				</div>
				<div class="col-lg-4">
					<p>Zhou Huakang 15050698d</p>
				</div>
			</div>
		</div>
	</div>
	


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  </body>
</html>
