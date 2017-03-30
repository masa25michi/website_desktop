<!DOCTYPE html>
<html>
<head>
	<title>Conference</title>
	<style>
	html, body{
		margin: 0px;
	}
	main{
		width: 1000px;
		margin: 0px auto;
		padding: 10px;
	}
	table{
		width: 100%;
	}
	
	tr.bottom-border td{
		border-bottom: 1px solid black;
	}
	
	table tr th{
		padding: 10px;
		text-align: left;
	}
	table tr td{
		padding: 10px;
	}
	
	</style>
	<!-- Bootstrap core CSS -->
        <link href="assets/css/bootstrap.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="assets/css/style.css" rel="stylesheet">
        <link href="assets/css/font-awesome.min.css" rel="stylesheet">
</head>

<body>
	<!-- Static navbar -->
   	 	<?php
            include_once "header.php";
            navigateHeader("search");
        ?>  
    <br />
    <br />
    <br />

	<main>
		<h5><a href="speaker.php">Speakers List</a></h5>
	<?php
		require_once 'DB.php';
		include 'search.php';
		
		$sql = "SELECT * FROM Conference ORDER BY Date;";
		$result = DB::getInstance()->query($sql);
		if($result->rowCount()>0){
			
			echo '<h2>Conference</h2>';
			echo '<table>';
			echo '<tr>';
			echo '<th>Conference Name</th>';
			echo '<th>Date</th>';
			echo '</tr>';
			while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
				echo '<tr>';
				?>
					<td><a href="event.php?cid=<?= $row['ConferenceId'] ?>"><?= $row['ConferenceName'] ?></a></td>
					<td><?= $row['Date'] ?></td>
				<?php
				echo '</tr>';
			}
			echo '</table>';
		}
	?>

	</main>

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
</body>
</html>