<?php include("../includes/head.php"); ?>


<?php include("../includes/menu.php"); ?>

<div class="top-image">
</div>

<section class="admin_content">

    <?php
    include_once('../Includes/content_added.php');
    ?>

    <?php
    include_once('../Includes/adminGetRowsDelete.php');
    ?>

</section>




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






</body>
</html>