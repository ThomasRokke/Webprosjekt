<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
    
    <link href="CSS/TRcss.css" type="text/css" rel="stylesheet">

<title>WZup Oslo</title>

</head>
<body>
    
<div id="navigation">
    <ul id="navUl">
        
        <li>Hjem</li>
        <li>Mat og drikke</li>
        <li>Event</li>  
    
    </ul>
    
</div>
    
    
    <div id="cover">
    <img id="coverBilde" src="images/oslo.png">
       
        <div id="coverTitle">
            <h1>WZup?</h1>
        </div>
        
    </div>
    



    

  <!--   
<div class="forside_bilde">
    <img id="bilde" src="images/oslo.png">
        
  
    <h1 class="tittel">Wzup Oslo!</h1>
        <ul class="top_menu">
            <li class="top_menu_list"><a class="top_menu_links" href="Events.php">Events</a></li>
            <li class="top_menu_list"><a class="top_menu_links" href="matogdrikke.php">Mat og drikke</a></li>
            <li class="top_menu_list"><a class="top_menu_links" href="kart.php">Kart</a></li>
        </ul>

   

</div>

-->
 
    
    <div id="mainContainer">
    
        
    <div id="mainTitle">
            <h1>AKTIVITETER</h1>    
    </div>
        
    <div id="mainDesc">
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>    
    </div>
        
    <hr>
        
    <div id="map"></div>
        
    <hr>
        
    <div id="boks1" class="eventBoks">
        <img id="boks1Bilde" src="images/sofienbergparken2012.jpg">
        
        <div class="eventBoksTekst">
        <h3>Sofienbergsparken</h3>
        <p>Pils, grill, og chill i denne store parken.</p>
        </div>
        
        <div id="mer1" class="merInfo">
                MER INFO
        </div>    
        
    </div>
    <div class="eventBoks"></div>
    <div class="eventBoks"></div>
    <div class="eventBoks"></div>
        
         
        
    </div>
   
    
    
    

    <script>
      function initMap() {
        // Create a map object and specify the DOM element for display.
        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -34.397, lng: 150.644},
          scrollwheel: false,
          zoom: 8
        });
      }

    </script>
    
    
    <script>
            document.getElementById("mer1").onclick = function {
                document.getElementById("iframe").style.display = visible; 
            }
    </script>
    
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAUOSBwWQ1fKQHF-40kF5kK4h_h4VYA46U&callback=initMap"
    async defer></script>
    

</body>
</html>
