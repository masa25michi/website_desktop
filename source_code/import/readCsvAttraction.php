<?php
function readCsvAttractionFunction(){
    // echo $file;
    $conn = database();
        //loop through the csv file and insert into database 
        $file = $_FILES['file']['tmp_name'];
        $handle = fopen($file, "r");

        $index = 0;
        while ( ($fileop = fgetcsv($handle,1000,",") )!== false ){
            if ($fileop[0] && $index>0) { 
                
                $attractionId = htmlspecialchars((int)$fileop[0]);
                $title = htmlspecialchars($fileop[1]);
                $url = htmlspecialchars($fileop[2]);
                $description = htmlspecialchars($fileop[3]);
                $photo = htmlspecialchars($fileop[4]);

                $result = mysqli_query($conn,"SELECT * FROM Attraction WHERE AttractionId='$attractionId';");
                if(!$result){
                    echo("SQL Database Connection Issue: " . mysqli_error($conn));
                    mysqli_close($conn);
                    return false;
                }
                if(mysqli_num_rows($result) >0){
                    echo "The AttractionId : ".$attractionId." Already Exists. Failed to Insert Again<br>";
                    continue;
                }

                $result = mysqli_query($conn, "INSERT INTO Attraction (AttractionId, Title, Url, Description, Photo) VALUES 
                    ( 
                        '$attractionId', 
                        '$title', 
                        '$url', 
                        '$description', 
                        '$photo'
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


