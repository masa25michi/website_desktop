<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PolyU COMP 3421 Project</title>

        <!-- Bootstrap core CSS -->
        <link href="assets/css/bootstrap.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="assets/css/style.css" rel="stylesheet">
        <style>
            #map {
                height: 600px;
                width: 100%;
            }
        </style>
        <script src="https://maps.googleapis.com/maps/api/js"></script> 
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
        <script type="text/javascript">

        var myLatitude = 22.31;
        var myLongitude = 114.18;
        var myOptions =[];
        var jsonDataFromServer=null;
        
        function calculateAndDisplayRoute(directionsService, directionsDisplay) {
            //114.04 22.313
            //114.18 22.31
            var e_start = document.getElementById('selection_start');
            var e_end = document.getElementById('selection_end');

            var start_location = e_start.options[e_start.selectedIndex].text;
            var end_location = e_end.options[e_end.selectedIndex].text;

            // console.log("start: "+start_location);
            // console.log("end: "+end_location);

            directionsService.route({
                origin: {
                    lat: parseFloat(getLongLatitudeByName(start_location, true)),
                    lng: parseFloat(getLongLatitudeByName(start_location, false))
                    // lat:22.313, lng:114.04
                },
                destination: {
                    lat: parseFloat(getLongLatitudeByName(end_location, true)),
                    lng: parseFloat(getLongLatitudeByName(end_location, false))
                    // lat:22.31, lng:114.18
                },
                travelMode: 'DRIVING'
            }, function(response, status) {
                if (status === 'OK') {
                    // console.log(response);
                    directionsDisplay.setDirections(response);
                } else {
                    alert('Directions request failed due to ' + status);
                }
            });
        }
        function getLongLatitudeByName(str, isLatitude){
            // console.log(jsonDataFromServer);
            if(jsonDataFromServer==null){
                // alert("OK");
                return (isLatitude)?myLatitude:myLongitude;
            }
            var longValue = 0.0;

            for (var key in jsonDataFromServer) {

                var mapTitle = jsonDataFromServer[key]["Title"];
                var linelongtitude = jsonDataFromServer[key]["longtitude"];
                var linelatitude = jsonDataFromServer[key]["latitude"];
                // console.log(linelatitude);

                if(mapTitle == str){
                    // console.log(str+": lng: "+linelongtitude+" lat: "+linelatitude);
                    return (isLatitude)?linelatitude:linelongtitude;
                }

            }
            // console.log("AYA");
            return (isLatitude)?myLatitude:myLongitude;
            

        }

        $('document').ready(function() {
            
            $.ajax({
                type: "POST",
                url: "mapServer.php",
                dataType : "json",
                scriptCharset: 'utf-8',
                success: function(data){
                    jsonDataFromServer = data;

                    //Mapping
                    var mapOptions = {
                        zoom: 10,
                        center: new google.maps.LatLng(myLatitude, myLongitude)
                    };
                    var map = new google.maps.Map(document.getElementById('map'),mapOptions);

                    var southWest = new google.maps.LatLng(22.30, 114.17 );
                    var northEast = new google.maps.LatLng(22.315, 114.185 );

                    var bounds = new google.maps.LatLngBounds(southWest, northEast);
                    map.fitBounds(bounds);

                    var infowindow = new google.maps.InfoWindow();
                    var i = 0;


                    //display keys in browser
                    
                    
                    for(var key in jsonDataFromServer){
                        var mapTitle = jsonDataFromServer[key]["Title"];
                         myOptions[key] = mapTitle;
                    }

                    var _select = $('<select>');
                    var index = 0;

                    $.each(myOptions, function(val, text) {
                        console.log(text);
                        _select.append(
                                $('<option></option>').val(index++).html(text)
                            );
                    });
                    $('#selection_start').append(_select.html());

                    var _select = $('<select>');
                    var index = 0;

                    $.each(myOptions, function(val, text) {
                        console.log(text);
                        _select.append(
                                $('<option></option>').val(index++).html(text)
                            );
                    });
                    $('#selection_end').append(_select.html());

                    

                    for (var key in jsonDataFromServer) {

                        var mapTitle = jsonDataFromServer[key]["Title"];
                        var url = jsonDataFromServer[key]["Url"];
                        var description = jsonDataFromServer[key]["Description"];
                        var photo = jsonDataFromServer[key]["Photo"];
                        var markerlongtitude = jsonDataFromServer[key]["longtitude"];
                        var markerlatitude = jsonDataFromServer[key]["latitude"];

                        var marker = new google.maps.Marker({
                            position: new google.maps.LatLng(markerlatitude, markerlongtitude),
                            map: map,
                            title: mapTitle
                        });

                        (function(marker, i) {
                            // add click event
                            var contents = "<p><b>"+mapTitle+"</b>: "+description+"</p>";

                            google.maps.event.addListener(marker, 'click', function() {
                                infowindow = new google.maps.InfoWindow({
                                    content: contents
                                });
                                
                            infowindow.open(map, marker);
                            });
                        })(marker, i);
                    }

                    var directionsService = new google.maps.DirectionsService;
                    var directionsDisplay = new google.maps.DirectionsRenderer;

                    // var map = new google.maps.Map(document.getElementById('map'), {
                    //     zoom: 2,
                    //     center: new google.maps.LatLng(myLatitude, myLongitude)
                    // });
                    directionsDisplay.setMap(map);

                    var onChangeHandler = function() {
                        calculateAndDisplayRoute(directionsService, directionsDisplay);
                    };
                    document.getElementById('selection_start').addEventListener('change', onChangeHandler);
                    document.getElementById('selection_end').addEventListener('change', onChangeHandler);

                }
                        
                
            }).fail(function(XMLHttpRequest, textStatus, errorThrown){
                alert(errorThrown);
                clearInterval(phpNotifyPlayerReady);
            });

            // initialMapDirection();

                    
        });


        </script>

    </head>
    <body>
        <?php
            include_once "header.php";
            navigateHeader("map");
        ?>  

        <div id="headerwrap">
            <h1>HONG KONG MAP</h1>
        </div>

        <section id="works"></section>
        <div class="container">
            
            <div class="row centered mt mb">
            FROM: <select id="selection_start"></select><br />

            To: &nbsp   &nbsp   &nbsp <select id="selection_end"></select>
                <h1>Map</h1>
                <div id="map"></div>
            </div>
        </div>

        <br /><br />



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