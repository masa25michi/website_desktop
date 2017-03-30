
<?php
function readCsvSurveyFunction($file){
    $conn = database();
    
    //CSV To MYSQL MYADDMINPHP
    if (isset($_POST['btn_import']))
    {   
        $handle = fopen($file, "r");
    
        //loop through the csv file and insert into database 
        $index = 0;
        while ( ($fileop = fgetcsv($handle,1000,",") )!== false ){
            if ($fileop[0] && $index>0) { 

                $questionId = htmlspecialchars((int)$fileop[0]);
                $type =     htmlspecialchars($fileop[1]);
                $contents = htmlspecialchars($fileop[2]);
                // $answer = htmlspecialchars($fileop[3]);
                
                $result = mysqli_query($conn,"SELECT * FROM Survey WHERE  QuesId=".$questionId.";");
                if(!$result){
                    echo("SQL Database Connection Issue: " . mysqli_error($conn));
                    mysqli_close($conn);
                    return false;
                }
                //update information
                if(mysqli_num_rows($result) >0){
                    
                    //UPDATE Customers
                        // SET ContactName='Alfred Schmidt', City='Frankfurt'
                        // WHERE CustomerID=1;

                    $result=mysqli_query($conn, "UPDATE Survey SET Type='$type', Contents='$contents' WHERE QuesId='$questionId';"); 
                    if(!$result){
                        echo("SQL Database Update Issue: " . mysqli_error($conn));
                        mysqli_close($conn);
                        return false;
                    }


                }else{
                    //if the table is not initialized
                    $result=mysqli_query($conn, "INSERT INTO Survey (QuesId, Type, Contents) VALUES 
                        ( 
                            '$questionId', 
                            '$type', 
                            '$contents'
                        ) 
                    "); 

                    if(!$result){

                        echo("SQL Database Insertion Issue: " . mysqli_error($conn));
                        mysqli_close($conn);
                        return false;
                    }
                }
                
            } 
            
            $index++;
        } 
    
    }

    mysqli_close($conn);
    return true;
}

?>

