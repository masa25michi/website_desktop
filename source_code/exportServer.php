<?php
include "connectDB.php";

$conn = database();

//export conference Information
$query  = 'SELECT con.ConferenceId, con.ConferenceName, ev.EventId, ev.Date, ev.BegTime, ev.EndTime, ev.Title, ev.Venue, presen.Speaker_LastName, presen.Speaker_FirstName FROM Conference AS con ';
$query .= 'JOIN Event AS ev ON con.ConferenceId=ev.ConferenceId ';
$query .= 'LEFT JOIN Presentation AS presen ON ev.EventId=presen.EventId ';

$result = mysqli_query($conn, $query);
if(!$result){
	die("Cannot process sql query");
}

$fp = fopen('report_conference.csv', 'w');

fputcsv($fp, array('ConferenceId', 'ConferenceName', 'EventId', 'Date', 'Beginning Time', 'Ending Time','Title', 'Venue', 'Speaker LastName', 
	'Speaker FirstName'));

while($row = mysqli_fetch_assoc($result))
{
    fputcsv($fp, $row);
}

fclose($fp);

//export survey data
$query2  = 'SELECT * FROM SurveyAnswer;';

$result = mysqli_query($conn, $query2);

if(!$result){
	die("Cannot process sql query");
}

$fp = fopen('report_survey.csv', 'w');

//
fputcsv($fp, array('User Email', '101', '102', '103', '104', '105', '106', '201', '202','203', '204','205', '206', '207', '208',
	'209', '210', '301','302'));


while($row = mysqli_fetch_assoc($result))
{
    fputcsv($fp, $row);
}

fclose($fp);


mysqli_close($conn);

?>