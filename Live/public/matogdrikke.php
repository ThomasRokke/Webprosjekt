<?php include("../includes/head.php"); ?>

<div class="top-image">

    <?php include("../includes/menu.php"); ?>

    </ul>
</div>

<section class="main-content">

    <article>
        <h1 class="overskrift">Mat og drikke</h1>
    </article>
    <div id="google_map"></div>



    <?php

    require_once('../Includes/getMatogdrikke.php');

    ?>




    <div class="CTbreak"></div>



</section>


<footer class="TRfooter">
    <p class="footerText">&copy; 2017 WZup?<p>
    <p class="footerAdr">Chr. Krohgs gate 32, 0186 Oslo</p>

</footer>




<!-- Javascript -->

<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyAUOSBwWQ1fKQHF-40kF5kK4h_h4VYA46U"></script>

<script src="js/matKart.js" type="text/javascript">
</script>




</body>
</html>