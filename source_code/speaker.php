<!DOCTYPE html>
<html>
<head>
	<title>Speaker</title>
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
		if(isset($_GET['sid']) && $_GET['sid'] != ""){
			$sql = "SELECT *, a.Type FROM `Presentation` as p, `AuthorsAbstracts` as a WHERE p.Speaker_Id = ". $_GET['sid'];
			$result = DB::getInstance()->query($sql);
			if($result->rowCount()>0){
				$row = $result->fetch(PDO::FETCH_ASSOC)
			?>
				<h2><?= $row['Speaker_LastName'] ?>&nbsp;<?= $row['Speaker_FirstName'] ?></h2>
				<table>
					<tr>
						<td><strong>ID:</strong> <?= $row['Speaker_Id'] ?></td>
						<td><strong>Type:</strong> <?= ($row['Type'] == 'n')?'Non-PolyU':'PolyU'?></td>
						<td><strong>Photo filename:</strong> <?= $row['Photo_FileName'] ?></td>
					</tr>
					<tr>
						<td colspan="3"><strong>Biography:</strong> <?= $row['Biography'] ?></td>
					</tr>
					<tr>
						<td><strong>Abstract ID:</strong> <?= $row['AbstractId'] ?></td>
						<td><strong>Presentation Title:</strong> <?= $row['Title'] ?></td>
						<td><strong>Begin time:</strong> <?= $row['Date']." ".$row['BegTime'] ?></td>
					</tr>
					<tr>
						<td colspan="3"><strong>Abstract:</strong> <?= $row['Abstract'] ?></td>
					</tr>
				</table>
				
			<?php
			}
		}else{
			$sql = "SELECT * FROM `AuthorsAbstracts`";//"SELECT p.*, a.AuthorId, a.Type FROM `AuthorsAbstracts` as a, `Presentation` as p WHERE a.AbstractId = p.AbstractId;";
			$result = DB::getInstance()->query($sql);
			if($result->rowCount()>0){
				
				echo '<h2>Speakers</h2>';
				echo '<table>';
				echo '<tr>';
				echo '<th>ID</th>';
				echo '<th>Name</th>';
				echo '<th>Type</th>';
				echo '</tr>';
				while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
					echo '<tr>';
					?>
						<td><?= $row['AuthorId'] ?></td>
						<td>
							<a href="speaker.php?sid=<?= $row['AuthorId'] ?>">
								<?= $row['LastName'] ?>&nbsp;<?= $row['FirstName'] ?>
							</a>
						</td>
						<td><?= ($row['Type'] == 'n')?'Non-PolyU':'PolyU'?></td>
					<?php
					echo '</tr>';
				}
				echo '</table>';
			}
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