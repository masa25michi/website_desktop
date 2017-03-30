
<?php
// include_once "connectDB.php";

function readCsvSpeakerFunction($file){
    $conn = database();
    
    //CSV To MYSQL MYADDMINPHP
    if (isset($_POST['btn_import']))
    {   
        $handle = fopen($file, "r");
        
    
        //loop through the csv file and insert into database 
        $index = 0;
        while ( ($fileop = fgetcsv($handle,1000,",") )!== false ){
            if ($fileop[0] && $index>0) { 
                //abstract ID, Type, title, speakerlastname, speaker firstname,speaker ID,photo jpg filename,affiliation, begtime,endtime Date,biography,abstract
    
                $speakerId = htmlspecialchars((int)$fileop[0]);
                $speaker_lastname =     htmlspecialchars($fileop[1]);
                $speaker_firstname = htmlspecialchars($fileop[2]);
                $type = htmlspecialchars($fileop[3]);
    
                mysql_query("INSERT INTO Speaker (SpeakerId, Speaker_LastName, Speaker_FirstName, Type) VALUES 
                    ( 
                        '$speakerId', 
                        '$speaker_lastname', 
                        '$speaker_firstname', 
                        '$type
                    ) 
                "); 
                
            } 
            $index++;
        } 
    
    }
    mysql_close($conn);
}

?>

