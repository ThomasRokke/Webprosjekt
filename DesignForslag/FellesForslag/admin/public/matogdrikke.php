<?php include("../includes/head.php"); ?>
    <?php include("connection.php"); ?>


    <div class="top-image">
        
        <?php include("../includes/menu.php"); ?>
        
    </ul>
    </div>

    <section class="main-content">

        <div id="map"></div>
            
    </section>



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