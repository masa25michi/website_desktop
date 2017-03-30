<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PolyU COMP 3421 Project</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">

  </head>
    <body>

    <?php
        include_once "header.php";
        navigateHeader("login");
    ?>  

    <section id="works"></section>
    <div class="container">

        <div class="row mt mb">
            <h2>Please choose CSV file from you local folder to import to our database</h2><br>
            <form method="POST" action = 'import/readCsv.php' enctype="multipart/form-data">
                <input type="file" name="file"><br />
                <button  type="submit" name="btn_import">Data Import</button>
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


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

    </body>
</html>