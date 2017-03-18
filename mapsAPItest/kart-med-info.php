<!DOCTYPE html>
<html>
  <head>
    <style>
       #map {
        height: 600px;
        width: 100%;
       }
        
        .info-window-bilde{
          
            width: 100%;
        }
        #content { 
           
        }
        p{
            font-size: 16px;
        }
        #overskrift{
            text-align: center;
        }
    </style>
  </head>
  <body>

    <h1 id="overskrift">Wzup? - Fjerdingen</h1>
    <div id="map"></div>
    <script>
        
        //https://fusiontables.google.com/DataSource?dsrcid=308519#map:id=3
        //Link til forskjellige 'markers'
        
        //Setter kartet til å starte på denne koordinatene med 17 zoom og 'center' posisjon. 
       <?php   
            $lat = 59.916158;
            $lng = 10.759654;
        
       ?>
       var lat = <?php echo $lat  ?>;
       var lng = <?php echo $lng ?>;
       
       function initMap() {
        var fjerdingen = {lat, lng};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 17,
          center: fjerdingen
        });
           
       //Innhold i 'trykk-boksen' 
        var contentString = '<div id="content">'+
            '<div id="siteNotice">'+
            '</div>'+
            '<h1 id="firstHeading" class="firstHeading">Westerdals Fjerdingen</h1>'+
            '<div id="bodyContent">'+
            '<p><b>WOACT</b>, bedre kjent som <b>Westerdals Oslo School of Arts, Communications and Technology</b>, er en unik, bransjenær og nyskapende høyskole for deg som vil jobbe innen kunst, kommunikasjon og teknologi.' +
            'På Westerdals Oslo ACT er det kort avstand mellom teori og praksis, mellom student og underviser, mellom høyskole og bransjer. Du får en unik og annerledes læringsprosess i et dynamisk og kreativt tverrfaglig miljø, 1700 medstudenter og fagfolk som er aktive i sine bransjer.'+
            '<br>'+ '<img class="info-window-bilde" src="fasade-fra-gaten.jpg">'+
            '<p>Link til hjemmeside <a href="https://en.wikipedia.org/w/index.php?title=fjerdingen&oldid=297882194">'+
            'https://www.westerdals.no/nyheter/campus-fjerdingen/</a> '+
            '</div>'+
            '</div>';
           
          var infowindow = new google.maps.InfoWindow({
          content: contentString
        });

        var marker = new google.maps.Marker({
          position: fjerdingen,
          map: map,
          title: 'fjerdingen (Ayers Rock)'
        });
        marker.addListener('click', function() {
          infowindow.open(map, marker);
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAUOSBwWQ1fKQHF-40kF5kK4h_h4VYA46U&callback=initMap">
    </script>
  </body>
</html>