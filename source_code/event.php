<!DOCTYPE html>
<?php
if(isset($_GET['cid']) && $_GET['cid']!=""){
?>
<html>
<head>
	<title>Event</title>
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
	<link href="assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>
	<?php
        include_once "header.php";
        navigateHeader("search");
    ?> 
    <br><br>
	<main>
		<h6><a href="index.php">Home</a></h6>
	<?php
		require_once 'DB.php';
		include 'search.php';
		$sql = "SELECT e.*, IFNULL(p.p_count, 0) as p_count FROM Event as e LEFT JOIN (SELECT COUNT(AbstractId) as p_count, EventId FROM Presentation GROUP BY EventId) as p ON e.EventId = p.EventId WHERE ConferenceId='".$_GET['cid']."' ORDER BY BegTime;";
		$result = DB::getInstance()->query($sql);
		if($result->rowCount()>0){
			
			echo '<h2>Event</h2>';
			echo '<table>';
			echo '<tr>';
			echo '<th>Title</th>';
			echo '<th>Venue</th>';
			echo '<th>Date</th>';
			echo '<th>Begin</th>';
			echo '<th>End</th>';
			echo '<th>Presentations</th>';
			echo '</tr>';
			while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
				echo '<tr>';
				?>
					<td><?= $row['Title'] ?></td>
					<td><?= $row['Venue'] ?></td>
					<td><?= $row['Date'] ?></td>
					<td><?= $row['BegTime'] ?></td>
					<td><?= $row['EndTime'] ?></td>
					<td>
						<?php 
						if($row['p_count']>0) 
							echo '<a href="presentation.php?eid='.$row['EventId'].'">View Details</a>';
						else
							echo 'N/A';
						?>
					</td>
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
	</div>
</body>
</html>
<?php
}else{
	header('Location: index.php');
}
?>