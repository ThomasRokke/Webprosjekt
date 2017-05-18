<?php include("../includes/head.php"); ?>

    
    <?php include("../includes/menu.php"); ?>

    <div class="top-image">    
    </div>





    <section class="main-content">

        <button onclick="findLatLng()">Finn koordinater</button>

        <form action="/Web/Webprosjekt-test/Live/public/adddcontent.php" method="post" autocomplete="on">

            <b>Legg til innhold</b>

            <p>Navn:
                <input type="text" name="name" size="30" maxlength="60" value="" />
            </p>

            <p>Marker info:
                <input type="text" name="address" size="30" maxlength="85" value="" />
            </p>



            <p>lat(lengdegrad):
                <input type="text" name="lat" size="30" maxlength="60" value="" />
            </p>

            <p>lng(breddegrad):
                <input type="text" name="lng" size="30" maxlength="60" value="" />
            </p>

            <p>Type:
                <input type="text" name="type" size="30" maxlength="30" value="" />
            </p>

            <p>Kort beskrivelse:
                <input type="text" name="sDesc" size="30" maxlength="90" value="" />
            </p>

            <p>Beskrivelse:
                <input type="text" name="description" size="30" maxlength="500" value="" />
            </p>

            <p>Filnavn på bilde:
                <input type="text" name="imagepath" size="30" maxlength="60" value="" />
            </p>

            <p>
                <input type="submit" name="submit" value="Send" />
            </p>

        </form>






    </section>

<button onclick="findLatLng()">Finn koordinater</button>

<script type="text/javascript">

    function findLatLng() {
        var mittVindu = window.open("http://www.latlong.net/convert-address-to-lat-long.html", "", "width=800,height=600,titlebar=no");
    }

</script>


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
                left: location,
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