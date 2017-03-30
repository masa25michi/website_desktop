
<?php
function readCsvAuthorFunction($file){
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
                $authorID = htmlspecialchars((int)$fileop[1]);
                $lastname = htmlspecialchars($fileop[2]);
                $firstname = htmlspecialchars($fileop[3]);
                $type = htmlspecialchars($fileop[4]);

                $result = mysqli_query($conn,"SELECT * FROM AuthorsAbstracts WHERE AbstractId='$abstractId';");
                if(!$result){
                    echo("SQL Database Connection Issue: " . mysqli_error($conn));
                    mysqli_close($conn);
                    return false;
                }
                if(mysqli_num_rows($result) >0){
                    echo "The AbstractId : ".$abstractId." Already Exists. Failed to Insert Again<br>";
                    continue;
                }
                
                $result = mysqli_query($conn, "INSERT INTO AuthorsAbstracts (AbstractId, AuthorId, LastName,FirstName,Type) VALUES 
                    ( 
                        '$abstractId', 
                        '$authorID', 
                        '$lastname', 
                        '$firstname', 
                        '$type'
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
    mysql_close($conn);
    return true;
}


    

?>

