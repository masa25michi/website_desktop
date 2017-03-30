<?php
include "connectDB.php";
if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    if(empty($valueToSearch)){
        $query = "SELECT * FROM Conference;";
        $result = filterTable($query);;
    }else{
        // search in all table columns
        //convert(datetime, CONVERT(float,date_column))
        $query  = 'SELECT con.ConferenceId, con.ConferenceName, ev.EventId, ev.Date, ev.BegTime, ev.EndTime, ev.Title, ev.Venue, presen.Speaker_LastName, presen.Speaker_FirstName FROM Conference AS con ';
        $query .= 'JOIN Event AS ev ON con.ConferenceId=ev.ConferenceId ';
        $query .= 'LEFT JOIN Presentation AS presen ON ev.EventId=presen.EventId ';
        $query .= "WHERE CONCAT (con.ConferenceId, con.ConferenceName, ev.EventId, ev.Title, ev.Venue) LIKE '%".$valueToSearch."%' OR CONCAT (presen.Speaker_LastName, presen.Speaker_FirstName) LIKE '%".$valueToSearch."%';";

        $result= filterTable($query);
    }   
}
 else {
    $query = "SELECT * FROM Conference";
    $result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
    $connect = database();
    $result = mysqli_query($connect, $query);
    return $result;
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>PHP HTML TABLE DATA SEARCH</title>
        <style>
            table,tr,th,td
            {
                border: 1px solid black;
            }
        </style>
    </head>
    <body>
        <h1>General Search</h1>
        <form action="general_search.php" method="post">
            <input type="text" name="valueToSearch" placeholder="Value To Search"><br><br>
            <input type="submit" name="search" value="Filter"><br><br>
        </form>
        <hr>
        <?php
            $all_property = array();  //declare an array for saving property

            //showing property
            echo '<table class="data-table">
                    <tr class="data-heading">';  //initialize table tag
            while ($property = mysqli_fetch_field($result)) {
                echo '<td>' . $property->name . '</td>';  //get field name for header
                array_push($all_property, $property->name);  //save those to array
            }
            echo '</tr>'; //end tr tag

            //showing all data
            while ($row = mysqli_fetch_array($result)) {
                echo "<tr>";
                foreach ($all_property as $item) {
                    echo '<td>' . $row[$item] . '</td>'; //get items using property value
                }
                echo '</tr>';
            }
            echo "</table>";

        ?>

        
        
    </body>
</html>
