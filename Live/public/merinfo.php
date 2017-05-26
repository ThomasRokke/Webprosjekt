<?php include("../includes/head.php"); ?>

<div class="top-image">

    <?php include("../includes/menu.php"); ?>
    <?php include("../includes/db_tilkobling.php"); ?>

</div>

<section class="main-content">

    <section id="scrollDown" class="topSection">
        <article id="merInfoAnchor" class="headArticle">
            
            <?php
            require_once('../Includes/db_tilkobling.php');

            $getID = $_GET['id'];

            $query = "SELECT name, description, imagepath FROM markers WHERE id = $getID";

            $dayQuery = "SELECT BarId, DayID, TIME_FORMAT(`StartTime`, '%H:%i') AS StartTime, TIME_FORMAT(`EndTime`, '%H:%i') AS EndTime FROM openinghours WHERE BarId = $getID";
            
            /*SELECT FORMAT(CAST(StartTime AS DATETIME),'hh:mm tt') AS StartTime
            FROM TableA*/
            

            $dayResponse =  @mysqli_query($dbc, $dayQuery);

            $response = @mysqli_query($dbc, $query);

            if($response){

                if($row = mysqli_fetch_array($response)) {

                    echo '<h2>' .
                        $row['name'] .
                        '</h2>' .

                        '<p>' .
                        $row['description'] .
                        '</p><br>' .
                        '<div class="table_container">' .
                        '<table>' .
                        '<tr>' .
                        '<th>Dag</th>' .
                        '<th  class="table_right_align">Åpningstid</th>' .
                        '</tr>' ;


                }
            }

            if($dayResponse){
               while($rad = mysqli_fetch_array($dayResponse)){
                   $dag = "tirs";
                   $dagTall = $rad['DayID'];
                   switch($dagTall){
                       case 1:
                           $dag = "Mandag";
                           break;
                       case 2:
                           $dag = "Tirsdag";
                           break;
                       case 3:
                           $dag = "Onsdag";
                           break;
                       case 4:
                           $dag = "Torsdag";
                           break;
                       case 5:
                           $dag = "Fredag";
                           break;
                       case 6:
                           $dag = "Lørdag";
                           break;
                       case 7:
                           $dag = "Søndag";
                           break;
                       Default:
                           $dag = "Kunne ikke hente dag";

                   }

                   echo '<tr>' .
                   '<td>' .
                       $dag .
                   '</td>' .
                   '<td class="table_right_align">' .
                   $rad['StartTime'] . ' - ' . $rad['EndTime'] .
                   '</td>' .
                   '</tr>' ;
               }
               echo'</table>' .
                   '</div>' .
                   '</article>' .

                   '<img class="merInfoBilde" src="Images/storeBilder/' .

                   $row['imagepath'] .

                   'S.jpg">';
            }

            else {

                echo "Couldn't issue database query<br />";

                echo mysqli_error($dbc);
            }

            // Lukker database tilkoblingen.
            mysqli_close($dbc);

            ?>
    </section>

    <section class="parallax">

    </section>

</section>

<footer class="TRfooter">
    <p class="footerText">&copy; 2017 WZup?<p>
    <p class="footerAdr">Chr. Krohgs gate 32, 0186 Oslo</p>

</footer>

<!-- Javascript -->

<script type="text/javascript">

</script>

<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>

<script src="js/dropdown.js" type="text/javascript">
</script>

<audio id="audio" src="lyd.mp3" ></audio>


</body>
</html>