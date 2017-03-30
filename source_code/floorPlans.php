<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PolyU COMP 3421 Project</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">

    <style>
      .venue {
        background-color: white;
        width: 200px;
        position: relative;
      }

      #v1 {
        right: -187px;
        top: -370px;
      }

      #v2 {
        right: -187px;
        top: -370px;
      }

      #v3 {
        right: -67px;
        top: -250px;
      }

      #v4 {
        right: -147px;
        top: -290px;
      }

      #v5 {
        right: -187px;
        top: -370px;
      }
    </style>
  </head>

  <body>

    <!-- Static navbar -->
    <?php
            include_once "header.php";
            navigateHeader("floor");
        ?> 


  <div id="headerwrap">
      <div class="container">
      <div class="row">
        <div class="col-lg-6 col-lg-offset-3">
          <h1>Floor Plans</h1>
        </div>
      </div>
      </div> 
  </div>
  
  <section id="works"></section>
  <div class="container">
    <main>
    <h2>Route of the hotel entrance to the conference venue</h2>
    <img src="floorPlans/00.jpg" alt="">
    <h2>Floor Plans</h2>
    <img src="floorPlans/01.jpg" alt="">
    <div class="venue" id="v1">
      <a href="http://www2.comp.polyu.edu.hk/~14116974d/comp3421/project/final/presentation.php?eid=17"><--A Crowdsourcing Approach to Promote Safe Walk</a>
    </div>
    <img src="floorPlans/02.jpg" alt="">
    <div class="venue" id="v2">
      <a href="http://www2.comp.polyu.edu.hk/~14116974d/comp3421/project/final/presentation.php?eid=17"><--Soft Real-Time GPRS Traffic Analytics for Com</a>
    </div>
    <div class="venue" id="v3">
      <a href="http://www2.comp.polyu.edu.hk/~14116974d/comp3421/project/final/presentation.php?eid=17"><--Cloud Service Recommendation based on Trust M</a>
    </div>
    <img src="floorPlans/03.jpg" alt="">
    <div class="venue" id="v4">
      <a href="http://www2.comp.polyu.edu.hk/~14116974d/comp3421/project/final/presentation.php?eid=17"><--Complex Data Collection in Large-scale RFID S</a>
    </div>
    <img src="floorPlans/04.jpg" alt="">
    <div class="venue" id="v5">
      <a href="http://www2.comp.polyu.edu.hk/~14116974d/comp3421/project/final/presentation.php?eid=13"><--From DUMB computers to SMART computing</a>
    </div>
    <img src="floorPlans/05.jpg" alt="">
    </main><br /><br /><br /><br /><br />
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
  


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  </body>
</html>