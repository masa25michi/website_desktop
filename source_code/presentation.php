<!DOCTYPE html>
<?php
if(isset($_GET['eid']) && $_GET['eid']!=""){
?>
<html>
<head>
	<title>Presentation</title>
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

    <br><br><br>
	<main>
	<?php
		require_once 'DB.php';
		include 'search.php';
		$sql = "SELECT * FROM Presentation WHERE EventId = '".$_GET['eid']."' ORDER BY BegTime;";
		$result = DB::getInstance()->query($sql);
		if($result->rowCount()>0){
			
			echo '<h2>Presentation</h2>';
			echo '<table>';
			echo '<tr>';
			echo '<th>Title</th>';
			echo '<th>Speaker Name</th>';
			echo '<th>Date</th>';
			echo '<th>Begin at</th>';
			echo '<th>End at</th>';
			echo '</tr>';
			while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
				echo '<tr>';
				?>
					<td><?= $row['Title'] ?></td>
					<td><?= $row['Speaker_FirstName'] ?>&nbsp;<?= $row['Speaker_LastName'] ?></td>
					<td><?= $row['Date'] ?></td>
					<td><?= $row['BegTime'] ?></td>
					<td><?= $row['EndTime'] ?></td>
				<?php
				echo '</tr>';
				echo '<tr class="bottom-border">';
				echo '<td colspan="5"><strong>Abstract:&nbsp;</strong>'.$row['Abstract'].'</td>';
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