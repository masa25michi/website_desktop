	<div style="display: inline-block;">
	<form action="<?= basename($_SERVER["SCRIPT_FILENAME"]) ?>" method="GET" style="display: inline-block;">
		<?php
			foreach($_GET as $key=>$value){
				if($key != "keyword")
					echo '<input type="hidden" name="'.$key.'" value="'.$value.'" />'; 
			}
		?>
		<input type="text" name="keyword" placeholder="Please type Keyword"/>
		<input type="submit" value="Search" />
		<input type='reset' value = "Reset" />
	</form>
	</div>
	<script>
		function clearSR(){ 
			var sr = document.getElementById('sr');
			if(sr && sr.parentNode) sr.parentNode.removeChild(sr);
		}
	</script>
	<button onclick="clearSR()" >Back</button>
	
<?php
	if(isset($_GET['keyword']) && $_GET['keyword'] != ""){
		echo '<div id="sr" style="background-color: #e0ebeb; padding: 0px 10px 10px 10px; margin: 5px 0px;">';
		echo '<h2>Search Result:</h2>';
		$sql = "SELECT * FROM `Conference` as con, `Event` as ev WHERE con.ConferenceId = ev.ConferenceId AND CONCAT (con.ConferenceId, con.ConferenceName, ev.EventId, ev.Title, ev.Venue) LIKE '%".$_GET['keyword']."%';";
		$result = DB::getInstance()->query($sql);
		echo '<h4>Conference Events:</h4>';
		if($result->rowCount()>0){
			echo '<table>';
			echo '<tr>';
			echo '<th>Conference Name</th>';
			echo '<th>Event Names</th>';
			echo '<th>Venue</th>';
			echo '<th>Date</th>';
			echo '<th>Begin</th>';
			echo '<th>End</th>';
			echo '</tr>';
			while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
				echo '<tr>';
				?>
					<td><?= $row['ConferenceName'] ?></td>
					<td><?= $row['Title'] ?></td>
					<td><?= $row['Venue'] ?></td>
					<td><?= $row['Date'] ?></td>
					<td><?= $row['BegTime'] ?></td>
					<td><?= $row['EndTime'] ?></td>
				<?php
				echo '</tr>';
			}
			echo '</table>';
		}else{
			echo "No result...";
		}
		
		$sql = "SELECT * FROM `Presentation` WHERE CONCAT (Speaker_LastName, Speaker_FirstName) LIKE '%".$_GET['keyword']."%';";
		$result = DB::getInstance()->query($sql);
		echo '<h4>Speakers:</h4>';
		if($result->rowCount()>0){
			echo '<table>';
			echo '<tr>';
			echo '<th>Speaker Name</th>';
			echo '<th>Presentation Names</th>';
			echo '<th>Time</th>';
			echo '</tr>';
			while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
				echo '<tr>';
				?>
					<td>
						<a href="speaker.php?sid=<?= $row['Speaker_Id'] ?>">
							<?= $row['Speaker_LastName'] ?>&nbsp;<?= $row['Speaker_FirstName'] ?>
						</a>
					</td>
					<td><?= $row['Title'] ?></td>
					<td><?= $row['Date']." ".$row['BegTime'] ?></td>
				<?php
				echo '</tr>';
			}
			echo '</table>';
		}else{
			echo "No result...";
		}
		echo '</div>';
	}
	
?>