<?php

$db = database();

$formatted_date ='';
$formatted_startTimte = '';
$formatted_endTimte = '';

if(isset($POST['the_date'])){
	$objDate = new DateTime($POST['the_date']); // create DateTime object with the POSTed data 
	$formatted_date = dateformat($my_date, 'Y-m-d'); //formats date into mySQL Datetime field format
}

$sql = "select * from Conference where date ==".$formatted_date.";";

//$timestamp=strtotime($fetchedValue)

// field "the_date" should be a datetime field 
// $sql = "select into table (the_date) values ('$formatted_date')";
// $sql = "select date from Conference where date"

//execute the sql to create the record; could also use mysqli
// mysql_query($sql, $conn); 

//open connection to mysql db

//fetch table rows from mysql db

$result = mysqli_query($db, $sql) or die("Error in Selecting Conference: " . mysqli_error($db));

//create an array
$jsonArray = array();
while($row =mysqli_fetch_assoc($result))
{
    $jsonArray[] = $row;
}

echo json_encode($jsonArray);

//close the db connection
mysqli_close($db);

?>