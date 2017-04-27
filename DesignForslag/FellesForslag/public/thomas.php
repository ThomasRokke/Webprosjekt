<? include("../includes/header.php") ?>
<body>
    
    <section class="forside_bilde">
        <h1 class="TRtittel">Wzup Oslo!</h1>
        <ul class="top_menu">
            <li class="top_menu_list"><a class="top_menu_links" href="Events.php">Events</a></li>
            <li class="top_menu_list"><a class="top_menu_links" href="matogdrikke.php">Mat og drikke</a></li>
            <li class="top_menu_list"><a class="top_menu_links" href="kart.php">Kart</a></li>
        </ul>
    </section>
    
    <div id="TRmain">
    <section class="TRintro">
    <h1>Dette er om oss</h1>
        <p>Id incurreret e incurreret, doctrina elit aliquip mandaremus, se irure quis 
            illum excepteur an o minim domesticarum, fore do nam eram doctrina, sint eiusmod 
            aliquip, consequat nam summis officia, ut enim appellat nostrud. Eram aliquip 
            instituendarum nam legam philosophari officia fugiat proident, in aliqua eram 
            sunt fabulas, incurreret ad illum nescius, se nostrud tractavissent ne ea si 
            labore dolor summis, sunt nam ita culpa expetendis aut dolor iudicem nescius. 
            Aute arbitror voluptate o summis consequat se culpa summis non expetendis quis 
            elit te fore qui e summis quae ubi singulis. Magna nostrud officia, quem qu</p>
    </section>
        
    </div>
    
    
    <div id="map"></div>
    
    <div id="footerPadding"></div>
        
        
    
  <footer class="TRfooter">
     <p class="footerText">&copy; 2017 WZup?<p>  <p class="footerAdr">Chr. Krohgs gate 32, 0186 Oslo</p>
    
  </footer>
    
    

    <script>
        function initMap(){
            var location = {lat: 59.913869, lng: 10.752245};
            var mapOptions = {
                zoom: 14, 
                center: location,
                scrollwheel: false
            }
            
            var map = new google.maps.Map(document.getElementById('map'),mapOptions
            )
            
            var marker = new google.maps.Marker({
                position: location,
                map: map
            })
            }; 
    </script>
    
   <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAUOSBwWQ1fKQHF-40kF5kK4h_h4VYA46U&callback=initMap">
    </script>
    
</body>
</html>




















