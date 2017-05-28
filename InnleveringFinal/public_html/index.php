<?php include("../Includes/head.php"); ?>

<div class="top-image">

    <?php include("../Includes/menu.php"); ?>
    <?php include("logo.php"); ?>

</div>

<section class="main-content">

    <section class="topSection">
        <article class="headArticle">
            <h2>Wzup</h2>
            <p>Wzup er en side hvor du som ny student kan finne alle mulige tilbud i nærmiljøet. Her kan du finne butikker, barer, cafeer og aktiviteter i nærheten av Westerdals Campus Vulkan. Kjeder du deg på kvelden, men vet ikke hva du skal ta deg til? Er kjøleskapet tomt og magen rumler? Ta en kikk innom "Åpen nå" siden for å se hva som er åpent i nærheten.
            </p>
        </article>

        <div id="google_map"></div>

    </section>

    <section class="parallax">

    </section>

    <section class="box_section">
        
        <?php
            require_once('../Includes/getAllBox.php');
        ?>
        
    </section>

</section>

<?php include("footer.php"); ?>

<!-- Javascript -->

<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>

<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyAUOSBwWQ1fKQHF-40kF5kK4h_h4VYA46U">
</script>

<script src="js/kart.js" type="text/javascript">

</script>

<script src="js/dropdown.js" type="text/javascript">

</script>

<audio id="audio" src="lyd.mp3"></audio>

</body>
</html>
