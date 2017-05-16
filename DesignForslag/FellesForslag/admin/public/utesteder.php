<?php include("../includes/head.php"); ?>

<!--  henter filene for database connection og ferdiglagde funksjoner for søk i databasen -->
<?php require("connection.php"); ?>
<?php require("../includes/functions.php"); ?>


    <div class="top-image">
        
        <?php include("../includes/menu.php"); ?>
        
    </ul>
    </div>

    
    <section class="main-content">
        
        <!-- div for Google Map -->
        <div id="map"></div>
        
        <!-- Henter info fra database og lagrer det i en array -->
        <?php $bars = find_all_from_bars(); ?>
        
        <!-- start på while loop -->
        <!-- hver rad i Bars tabellen i DB legges i $rad_fra_DB variabelen og loopen
             kjører så lenge queryen er i stand til å hente info -->
        <?php while($rad_fra_DB = mysqli_fetch_assoc($bars)){ ?>
        
            <div class="CTbox" id="festbox">
            <div class="CTbox-image">
                <img src="Images/barcodenatt.jpg">
            </div>
            <div class="CTbox-info">
                <h4> <?php echo $rad_fra_DB["Name"]; ?></h4>
                <p>Adresse: <?php echo $rad_fra_DB["Location"]; ?> <br><?php echo $rad_fra_DB["Text"]; ?></p>
                <a class="CTbutton" href="#fest">Les mer!</a>
            </div>
        </div>
        <?php      
            }
        ?>
        <!-- Slutt på while loop -->
        
            
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