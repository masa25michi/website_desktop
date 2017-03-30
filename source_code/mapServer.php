<?php
	$db=mysqli_connect("mysql.comp.polyu.edu.hk","14116974d","migdzart");
	mysqli_select_db($db,"14116974d");

	$query = "SELECT * FROM Attraction";
	$result = mysqli_query($db, $query);

	$jsonArray = array();
	while($row =mysqli_fetch_array($result, MYSQL_ASSOC))
	{
	    $row_array['AttractionId'] = $row['AttractionId'];
	    $row_array['Title'] = $row['Title'];
	    $row_array['Url'] = $row['Url'];
	    $row_array['Description'] = $row['Description'];
	    $row_array['Photo'] = $row['Photo'];
	    $row_array['longtitude'] = $row['longtitude'];
	    $row_array['latitude'] = $row['latitude'];

	    array_push($jsonArray,$row_array);
	}

	echo json_encode($jsonArray);

	mysqli_close($db);
?>