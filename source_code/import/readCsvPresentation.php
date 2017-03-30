
<?php
// include_once "connectDB.php";

function readCsvPresentationFunction($file){
    $conn = database();
    
    //CSV To MYSQL MYADDMINPHP
    if (isset($_POST['btn_import']))
    {   
        $handle = fopen($file, "r");
        
    
        //loop through the csv file and insert into database 
        $index = 0;
        while ( ($fileop = fgetcsv($handle,1000,",") )!== false ){
            if ($fileop[0] && $index>0) { 
                $abstractId = htmlspecialchars((int)$fileop[0]);
                $Type =     htmlspecialchars($fileop[1]);
                $Title = htmlspecialchars($fileop[2]);
                $SpeakerLastName = htmlspecialchars($fileop[3]);
                $SpeakerFirstName = htmlspecialchars($fileop[4]);
                $SpeakerId = htmlspecialchars($fileop[5]);
                $Photo_fileName = htmlspecialchars($fileop[6]);
                $Affiliation = htmlspecialchars($fileop[7]);

                $begtime = htmlspecialchars($fileop[8]); 
                $timestamp = strtotime($begtime);
                $begtime_formatted = date('h:i:s',$timestamp);

                $endtime = htmlspecialchars($fileop[9]); 
                $timestamp = strtotime($endtime);
                $endtime_formatted = date('h:i:s',$timestamp);

                $Date = DateTime::createFromFormat('m/d/Y', htmlspecialchars($fileop[10]), new DateTimeZone(('UTC')));
                $date_formatted = $Date->format('Y-m-d');

                $biography = htmlspecialchars($fileop[11]);
                $abstract = htmlspecialchars($fileop[12]);
                $eventId = htmlspecialchars((int)$fileop[13]);

                $result = mysqli_query($conn,"SELECT * FROM Presentation WHERE AbstractId='$abstractId';");
                if(!$result){
                    echo("SQL Database Connection Issue: " . mysqli_error($conn));
                    mysqli_close($conn);
                    return false;
                }
                if(mysqli_num_rows($result) >0){
                    echo "The AbstractId : ".$abstractId." Already Exists. Failed to Insert Again<br>";
                    continue;
                }

                $result= mysqli_query($conn, "INSERT INTO Presentation (AbstractId, Type, Title, Speaker_LastName, Speaker_FirstName, Speaker_Id, Photo_FileName, Affilation, BegTime, EndTime, Date, Biography, Abstract, EventId) VALUES 
                    ( 
                        '$abstractId', 
                        '$Type', 
                        '$Title', 
                        '$SpeakerLastName',
                        '$SpeakerFirstName', 
                        '$SpeakerId', 
                        '$Photo_fileName', 
                        '$Affiliation',
                        '$begtime_formatted', 
                        '$endtime_formatted', 
                        '$date_formatted',
                        '$biography', 
                        '$abstract',
                        '$eventId'
                    ) 
                "); 

                if(!$result){
                    echo("SQL Database Insertion Issue: " . mysqli_error($conn));
                    mysqli_close($conn);
                    return false;

                }
                
            } 
            $index++;
        } 
    
    }
    mysqli_close($conn);
    return true;
}
?>

