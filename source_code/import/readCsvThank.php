
<?php
// include_once "connectDB.php";

function readCsvThankFunction($file){
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
    
                $name = htmlspecialchars($fileop[0]);
                $affiliation =     htmlspecialchars($fileop[1]);

                 $result = mysqli_query($conn,"SELECT * FROM Thankyou WHERE  Name='$name';");
                if(!$result){
                    echo("SQL Database Connection Issue: " . mysqli_error($conn)."<br>");
                    mysqli_close($conn);
                    return false;
                }
                if(mysqli_num_rows($result) >0){
                    echo "The Name : ".$name." Already Exists. Failed to Insert Again<br>";
                    continue;
                }

    
                $result=mysqli_query($conn, "INSERT INTO Thankyou (Name, Affiliation) VALUES 
                    ( 
                        '$name', 
                        '$affiliation'
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

