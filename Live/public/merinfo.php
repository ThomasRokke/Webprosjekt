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

            $query = "SELECT name, id, imagepath, description FROM markers WHERE id = $getID";

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
                        '<table class="tid_table">' .
                        '<tr>' .
                        '<th>Dag</th>' .
                        '<th>Åpner</th>' .
                        '<th>Stenger</th>' .
                        '</tr>' .
                        
                        '<tr>' .
                        '<td> Mandag' .
                        '</td>' .
                        '<td>' .
                        $row['id'] .
                        '</td>' .
                        '<td>' .
                        $row['id'] .
                        '</td>' .
                        '</tr>' .
                        
                        '<tr>' .
                        '<td> Tirsdag' .
                        '</td>' .
                        '<td>' .
                        $row['id'] .
                        '</td>' .
                        '<td>' .
                        $row['id'] .
                        '</td>' .
                        '</tr>' .
                        
                        '<tr>' .
                        '<td> Onsdag' .
                        '</td>' .
                        '<td>' .
                        $row['id'] .
                        '</td>' .
                        '<td>' .
                        $row['id'] .
                        '</td>' .
                        '</tr>' .
                        
                        '<tr>' .
                        '<td> Torsdag' .
                        '</td>' .
                        '<td>' .
                        $row['id'] .
                        '</td>' .
                        '<td>' .
                        $row['id'] .
                        '</td>' .
                        '</tr>' .
                        
                        '<tr>' .
                        '<td> Fredag' .
                        '</td>' .
                        '<td>' .
                        $row['id'] .
                        '</td>' .
                        '<td>' .
                        $row['id'] .
                        '</td>' .
                        '</tr>' .
                        
                        '<tr>' .
                        '<td> Lørdag' .
                        '</td>' .
                        '<td>' .
                        $row['id'] .
                        '</td>' .
                        '<td>' .
                        $row['id'] .
                        '</td>' .
                        '</tr>' .
                        
                        '<tr>' .
                        '<td> Søndag' .
                        '</td>' .
                        '<td>' .
                        $row['id'] .
                        '</td>' .
                        '<td>' .
                        $row['id'] .
                        '</td>' .
                        '</tr>' .
                        '</table>' .
                        '</div>' .
                        '</article>' .
                        

                        '<img class="merInfoBilde" src="Images/storeBilder/' .

                        $row['imagepath'] .

                        'S.jpg">';
                }
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

    <section class="box_section">

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