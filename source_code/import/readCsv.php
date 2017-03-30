<?php
include_once "readCsvEvent.php";
include_once "readCsvAuthor.php";
include_once "readCsvPresentation.php";
include_once "readCsvSurvey.php";
include_once "readCsvAttraction.php";
include_once "readCsvSpeaker.php";
include_once "readCsvSponsor.php";
include_once "readCsvThank.php";
include_once "connectDB.php";


$file = "";
$file_tmp="";

if(isset($_POST['btn_import'])){
    $file = strtolower($_FILES['file']['name']);
    $file_tmp = $_FILES['file']['tmp_name'];
}

if (strpos($file, 'author') !== false) {
    if(readCsvAuthorFunction($file_tmp)){
        echo "Complete Author Successfully"."\r\n";
    }
}
elseif (strpos($file, 'event') !== false) {
    if(readCsvEventFunction($file_tmp)){
        echo "Complete Event Successfully"."\r\n";
    }
}
elseif (strpos($file, 'presentation') !== false) {
    if(readCsvPresentationFunction($file_tmp)){
        echo "Complete Presen Successfully"."\r\n";
    }
}
elseif (strpos($file, 'survey') !== false) {
    if(readCsvSurveyFunction($file_tmp)){
        echo "Complete Survey Successfully"."\r\n";
    }
}elseif(strpos($file, 'speaker')!== false) {
    if(readCsvSpeakerFunction($file_tmp)){
        echo "Complete Speaker Successfully"."\r\n";
    }
}elseif(strpos($file, 'attraction')!== false) {
    if(readCsvAttractionFunction($file_tmp)){
        echo "Complete Attraction Successfully"."\r\n";
    }
}
elseif(strpos($file, 'thank')!== false) {
    if(readCsvThankFunction($file_tmp)){
        echo "Complete Thankyou Table Successfully"."\r\n";
    }
}
elseif(strpos($file, 'sponsor')!== false) {
    if(readCsvSponsorFunction($file_tmp)){
        echo "Complete Sponsorship Table Successfully"."\r\n";
    }
    
}
else{
    echo "Sorry, Table cannot be loaded";
}
?>