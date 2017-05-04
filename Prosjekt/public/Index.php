<?php include("../includes/head.php"); ?>

    <div class="top-image">
        <?php include("../includes/menu.php"); ?>
        <h1>fint om noen finner ett nytt bilde, dette var det beste jeg fant og det er ikke særlig bra</h1>
        <h1>og det her er noe jeg kjapt mekka sammen, ikke vær redd for å gjøre om det dere vil på siden. christian</h1>
    </div>
    
    <section class="main-content">
        
        <article>
            <h2>Skulle vi ha noe her?</h2>
            <p>Tamen eiusmod graviterque id se sunt tamen labore admodum, fugiat a ab quorum 
                vidisse ne incididunt dolor non ingeniis illustriora ex ingeniis quid ex 
                arbitror arbitrantur, magna ita possumus de velit, eu ipsum ingeniis, qui a 
                despicationes. Consequat est eiusmod, ubi sint     commodo est tamen appellat. Deserunt quo fugiat laborum, malis mentitum 
            </p>
        </article>
        <div id="map"></div>
        
        <div class="CTbox">
            <div class="CTbox-image"></div>
            <div class="CTbox-info">
                <h4>Fest</h4>
                <p>Dette er en fest hvor det skal festes noe veldig! Gled dere.</p>
            </div>
        </div>
        
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