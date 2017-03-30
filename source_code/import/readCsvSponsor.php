
<?php
// include_once "connectDB.php";

function readCsvSponsorFunction($file){
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
    
                $id = htmlspecialchars((int)$fileop[0]);
                $type =     htmlspecialchars($fileop[1]);
                $image =     htmlspecialchars($fileop[2]);

                $result = mysqli_query($conn,"SELECT * FROM Sponsor WHERE SponsorId='$id';");
                if(!$result){
                    echo("SQL Database Connection Issue: " . mysqli_error($conn));
                    mysqli_close($conn);
                    return false;
                }
                if(mysqli_num_rows($result) >0){
                    echo "The ID: ".$id." Already Exists. Failed to Insert Again<br>";
                    continue;
                }
    
                $result = mysqli_query($conn, "INSERT INTO Sponsor (SponsorId, SponsorType, LogoImage) VALUES 
                    ( 
                        '$id', 
                        '$type',
                        '$image'
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

