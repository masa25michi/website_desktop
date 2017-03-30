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

  <script type="text/javascript">
  	// $('document').ready(populateIframe());
	function populateIframe(id,path) 
	{
		var ifrm = document.getElementById(id);
		ifrm.src = "download.php?path="+path;
	}
	</script>

  <body>

    <!-- Static navbar -->
    <?php
    	include_once "header.php";
    	navigateHeader("login");
    ?>	


	<div id="headerwrap_admin">
	    
	</div>
	<section id="works"></section>
	<div class="container">
		<div class="row centered mt mb">
			<h1>Menu</h1>
				<div class="col-sm-4">
					<iframe id="frame1" style="display:none"></iframe>
					<a href="javascript:populateIframe('frame1','report_conference.csv')">Download Conference Information
					<img src="assets/img/csv_icon.png" class="img-responsive" width = 80% height= 80% ></a>
				</div>
				<div class="col-sm-4" >
					<iframe id="frame1" style="display:none"></iframe>
					<a href="javascript:populateIframe('frame1','report_survey.csv')">Download Survey Data
					<img src="assets/img/csv_icon.png" class="img-responsive" width = 80% height= 80% ></a>
				</div>
				<div class="col-sm-4" >
					<a href="http://www2.comp.polyu.edu.hk/~16033356d/Project/report.html">Show Report
					<img src="assets/img/chart_icon.png" class="img-responsive" width = 80% height= 80% ></a>
				</div>

		</div>
		<div class="row centered mt mb">
			<div class="col-sm-4" >
				<a href="http://www2.comp.polyu.edu.hk/~14116974d/comp3421/project/final/import.php">Import Data
				<img src="assets/img/import_icon.jpg" class="img-responsive" width = 75% height= 75% ></a>
			</div>
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
	
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  </body>
</html>
