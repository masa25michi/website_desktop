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
            navigateHeader("sponsor");
        ?> 


	<div id="headerwrap">
	    <div class="container">
			<div class="row">
				<div class="col-lg-6 col-lg-offset-3">
					<h1>THANK YOU FOR YOUR EFFORT!</h1>
				</div>
			</div>
	    </div> 
	</div>
	
	<section id="works"></section>
	<div class="container">
		<main>
			<h2>For Following Members, We Greatly Appreciate Your Contribution! </h2><br>
			<table>


		<?php
				require_once 'DB.php';
				
				$sql = "SELECT * FROM Sponsor;";
				$result = DB::getInstance()->query($sql);
				if($result->rowCount()>0){
					
					
					echo '<tr>';
					echo '<th style="min-width:200px">Sponsor ID</th>';
					echo '<th style="min-width:200px">Type</th>';
					echo '<th style="min-width:200px">Logo</th>';
					echo '</tr>';
					//http://www2.comp.polyu.edu.hk/~14116974d/comp3421/project/final/assets/img/.jpg
					//<img src="pic_mountain.jpg" alt="Mountain View" style="width:304px;height:228px;">
					while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
						echo '<tr>';
						?>
							<td><?= $row['SponsorId'] ?></a></td>
							<td><?= $row['SponsorType'] ?></td>
							<td><img src="<?= $row['LogoImage'] ?>" alt="logo" style="width:400px;height:400px;"></td>
						<?php
						echo '</tr>';
					}
				}else{
					echo '<th>Not Available....</th>';
				}
			?>

			</table>

		</main><br /><br /><br /><br /><br />
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
