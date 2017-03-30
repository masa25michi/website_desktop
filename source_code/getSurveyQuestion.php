<?php

  $db = mysqli_connect("mysql.comp.polyu.edu.hk", "14116974d", "migdzart");
  mysqli_select_db($db, "14116974d");

  $sql  = 'SELECT * FROM `SurveyQuestion`';
  $result = mysqli_query($db, $sql);

  $jsonArray = array();
  while($row = mysqli_fetch_array($result, MYSQL_ASSOC)) {
    $row_array['QuesId'] = $row['QuesId'];
    $row_array['Type'] = $row['Type'];
    $row_array['Contents'] = $row['Contents'];
    $row_array['ProvidedAnswers'] = $row['ProvidedAnswers'];

    array_push($jsonArray, $row_array);
  }

  echo json_encode($jsonArray);

  mysqli_close($db);
?>
