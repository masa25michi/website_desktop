<?php

  $db = mysqli_connect("mysql.comp.polyu.edu.hk", "14116974d", "migdzart");
  mysqli_select_db($db, "14116974d");

  $sql  = 'SELECT * FROM `SurveyQuestion`';
  $result = mysqli_query($db, $sql);

  $jsonArray = array();
  while($row = mysqli_fetch_array($result, MYSQL_ASSOC)) {
    $id = $row['QuesId'];
    $content = $row['Contents'];
    $providedAnswers = $row['ProvidedAnswers'];

    $sql  = "SELECT `$id`, COUNT(*) FROM SurveyAnswer GROUP BY `$id`";
    $ans_result = mysqli_query($db, $sql);

    // no return open questions
    if (substr($id, 0, 1) == '3') continue;

    $ansArray = array();
    $ansArray['Id'] = $id;
    $ansArray['Content'] = $content;
    $ansArray['Answers'] = array();
    $answers = str_getcsv($providedAnswers);
    foreach ($answers as $answer) {
      $ansArray['Answers'][$answer] = 0;
    }

    while($row = mysqli_fetch_array($ans_result, MYSQL_ASSOC)) {
      $ans = $row[$id];
      $count = $row['COUNT(*)'];
      $ansArray['Answers'][$ans] = intval($count);
    }

    array_push($jsonArray, $ansArray);
  }

  echo json_encode($jsonArray);

  mysqli_close($db);

?>
