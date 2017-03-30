<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="survey.css">
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
        <script src="survey.js" charset="utf-8"></script>
        <title>Survey</title>
        <link href="assets/css/bootstrap.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="assets/css/style.css" rel="stylesheet">
        <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    </head>
    <body>
      <!-- Static navbar -->
    <?php
        include_once "header.php";
        navigateHeader("survey");
    ?>  

    <section id="works"></section>
      <div class="container">
      <div class="row centered mt mb">

      <h1>Survey</h1>
        <h2>Please Fill All the Questions Below. Thank you!</h2>
        <!-- <button id="debug-fillin">DEBUG - fillin randomly</button> -->
        <form class="questions" id="survey" action="answerQuestion.php" method="post">
          <div class="question">
            <h3>Personal information</h3>
            <span>Email: </span><input type="text" name="email"><br>
          </div>
        </form>
        
      </div>
      </div>
        

      <div id="footerwrap">
    <div class="container">
      <div class="row centered">

        <div class="col-lg-4">
          <p>Masamichi Tanaka 14116974D</p>
        </div>
      
        <div class="col-lg-4">
          <p>Chan Wing Lun 16033356D</p>
        </div>
        <div class="col-lg-4">
          <p>Zhou Huakang 15050698d</p>
        </div>
      </div>
    </div>
  </div>

    </body>
</html>
