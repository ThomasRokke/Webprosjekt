

<?php include("../Includes/head.php"); ?>



<div class="top-image">



    <?php include("../Includes/menu.php"); ?>

    <?php include("logo.php"); ?>



</div>



<section class="main-content">



    <section class="topSection">

        <article class="headArticle">

            <h2>Wzup</h2>

            <p>Wzup er en side hvor du som ny student kan finne alle mulige tilbud i nærmiljøet. Her kan du finne butikker, barer, eventer og aktiviteter i nærheten

            </p>

        </article>



        <div id="google_map"></div>



    </section>



    <section class="parallax">



    </section>



    <section class="box_section">


        <?php



        include('../Includes/getOpenBox.php');

        ?>

    </section>





</section>





<footer class="TRfooter">

    <p class="footerText">&copy; 2017 WZup?<p>

    <p class="footerAdr">Chr. Krohgs gate 32, 0186 Oslo</p>



</footer>




<!-- Javascript -->



<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>

<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyAUOSBwWQ1fKQHF-40kF5kK4h_h4VYA46U"></script>



<script src="js/openKart.js" type="text/javascript">

</script>

<script src="js/dropdown.js" type="text/javascript">

</script>



<audio id="audio" src="lyd.mp3" ></audio>





</body>

</html>