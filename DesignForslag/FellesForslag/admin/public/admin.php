<?php include("../includes/head.php"); ?>

    
    <?php include("../includes/menu.php"); ?>

    <div class="top-image">    
    </div>


    
    <section class="main-content">
        
        <h1 id="adminH1">Administrator side</h1>
        
        <form>
            
             Navn:<br>
            <input type="text" name="firstname">
            <br>
            Beskrivelse:<br>
            <input type="text" name="lastname">
            <br>
            
            <input type="radio" name="gender" value="Utesteder" checked> Utesteder<br>
            <input type="radio" name="gender" value="Mat og Drikke"> Mat og Drikke<br>
            <input type="radio" name="gender" value="Aktiviteter"> Aktiviteter
        
        
        
        </form>
        
        
        
        
    </section>


    <footer class="TRfooter">
         <p class="footerText">&copy; 2017 WZup?<p>
         <p class="footerAdr">Chr. Krohgs gate 32, 0186 Oslo</p>

    </footer>




    <!-- Javascript -->
    
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