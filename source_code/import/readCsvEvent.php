<?php
function readCsvEventFunction($file){
    // echo $file;
    $conn = database();
        //loop through the csv file and insert into database 
        $handle = fopen($file, "r");

        $index = 0;
        while ( ($fileop = fgetcsv($handle,1000,",") )!== false ){
            if ($fileop[0] && $index>0) { 
                
                
                $eventid = htmlspecialchars((int)$fileop[0]);
                
                $Date = DateTime::createFromFormat('m/d/Y', htmlspecialchars($fileop[1]), new DateTimeZone(('UTC')));
                $date_formatted = $Date->format('Y-m-d');

                $begtime = htmlspecialchars($fileop[2]); 
                $timestamp = strtotime($begtime);
                $begtime_formatted = date('h:i:s',$timestamp);

                $endtime = htmlspecialchars($fileop[3]); 
                $timestamp = strtotime($endtime);
                $endtime_formatted = date('h:i:s',$timestamp);


                $title = htmlspecialchars($fileop[4]);
                $venue = htmlspecialchars($fileop[5]);
                $conferenceId = htmlspecialchars($fileop[6]);
    
                $result = mysqli_query($conn,"SELECT * FROM Event WHERE EventId='$eventid';");
                if(!$result){
                    echo("SQL Database Connection Issue: " . mysqli_error($conn));
                    mysqli_close($conn);
                    return false;
                }
                if(mysqli_num_rows($result) >0){
                    echo "The EventId : ".$eventid." Already Exists. Failed to Insert Again<br>";
                    continue;
                }


                $result = mysqli_query($conn, "INSERT INTO Event (EventId, Date, BegTime,EndTime,Title,Venue, ConferenceId) VALUES 
                    ( 
                        '$eventid', 
                        '$date_formatted', 
                        '$begtime_formatted', 
                        '$endtime_formatted', 
                        '$title', 
                        '$venue',
                        '$conferenceId'
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
        
    
    
    mysqli_close($conn);
    return true;
}
    

?>


