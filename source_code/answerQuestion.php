<?php

  $db = mysqli_connect("mysql.comp.polyu.edu.hk", "14116974d", "migdzart");
  mysqli_select_db($db, "14116974d");

  if (!isset($_POST['email'])) {
    exit;
  }

  $user_email = $_POST['email'];

  $sql = "SELECT * FROM SurveyAnswer WHERE UserEmail = '$user_email';";
  $result = mysqli_query($db, $sql);

  if (mysqli_num_rows($result) >0) {
     echo "This User Already Answered";
     exit;
  }

  set_error_handler('exceptions_error_handler');

  function exceptions_error_handler($severity, $message, $filename, $lineno) {
    if (error_reporting() == 0) {
      return;
    }
    if (error_reporting() & $severity) {
      throw new ErrorException($message, 0, $severity, $filename, $lineno);
    }
  }

  try {
    $ans_101 = $_POST[101]; $ans_102 = $_POST[102];
    $ans_103 = $_POST[103]; $ans_104 = $_POST[104];
    $ans_105 = $_POST[105]; $ans_106 = $_POST[106];

    $ans_201 = $_POST[201]; $ans_202 = $_POST[202];
    $ans_203 = $_POST[203]; $ans_204 = $_POST[204];
    $ans_205 = $_POST[205]; $ans_206 = $_POST[206];
    $ans_207 = $_POST[207]; $ans_208 = $_POST[208];
    $ans_209 = $_POST[209]; $ans_210 = $_POST[210];

    $ans_301 = $_POST[301]; $ans_302 = $_POST[302];
  }
  catch(Exception $e) {
    echo 'Failed! Please answer all the MC.
      <a href="javascript:history.back()">Go Back</a>';
    exit;
  }

  $sql = "INSERT INTO SurveyAnswer VALUES(
    '$user_email',
    '$ans_101', '$ans_102', '$ans_103', '$ans_104', '$ans_105', '$ans_106',
    '$ans_201', '$ans_202', '$ans_203', '$ans_204', '$ans_205',
    '$ans_206', '$ans_207', '$ans_208', '$ans_209', '$ans_210',
    '$ans_301', '$ans_302'
  )";

  mysqli_query($db, $sql);

  mysqli_close($db);

  echo 'Success! Thank You <br /><br />
    <a href="http://www2.comp.polyu.edu.hk/~14116974d/comp3421/project/final/index.php">Back to Home</a>';

?>
