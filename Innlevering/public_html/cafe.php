<?php include("../Includes/head.php"); ?>

<div class="top-image">
    <?php include("../Includes/menu.php"); ?>
    <?php include("logo.php"); ?>
</div>

<section class="main-content">

    <section class="topSection">

        <article class="headArticle">

            <h2>Cafe</h2>
            <p>I dag kan være en fin dag å dra på kafe med venner. Finn den nærmeste cafeen på kartet og nyt et varm kaffe. Trykk mer info for å få mer informasjon.
            </p>

        </article>

        <div id="google_map"></div>

    </section>

    <section class="parallax"></section>

    <section class="box_section">

        <?php
            $phpType = 'cafe';
            require_once('../Includes/getBox.php');
        ?>

    </section>

</section>

<?php include("footer.php") ?>

<!-- Javascript -->

<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>

<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyAUOSBwWQ1fKQHF-40kF5kK4h_h4VYA46U"></script>

<script src="js/cafe.js" type="text/javascript">

</script>

<script src="js/dropdown.js" type="text/javascript">

</script>

<audio id="audio" src="lyd.mp3" ></audio>

</body>
</html>