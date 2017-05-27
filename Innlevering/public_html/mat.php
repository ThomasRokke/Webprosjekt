<?php include("../Includes/head.php"); ?>



<div class="top-image">



    <?php include("../Includes/menu.php"); ?>

    <?php include("logo.php"); ?>

</div>



<section class="main-content">



    <section class="topSection">

        <article class="headArticle">

            <h2>Spisesteder</h2>

            <p>Tamen eiusmod graviterque id se sunt tamen labore admodum, fugiat a ab quorum

                vidisse ne incididunt dolor non ingeniis illustriora ex ingeniis quid ex

                arbitror arbitrantur, magna ita possumus de velit, eu ipsum ingeniis, qui a

                despicationes. Consequat est eiusmod, ubi sint     commodo est tamen appellat. Deserunt quo fugiat laborum, malis mentitum

            </p>

        </article>

        <div id="google_map"></div>

    </section>

    <section class="parallax">

    </section>

    <section class="box_section">

        <?php

        $phpType = 'mat';

        require_once('../Includes/getBox.php');

        ?>

    </section>

</section>


<?php include("footer.php") ?>

<!-- Javascript -->



<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>

<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyAUOSBwWQ1fKQHF-40kF5kK4h_h4VYA46U"></script>



<script src="js/mat.js" type="text/javascript">

</script>

<script src="js/dropdown.js" type="text/javascript">

</script>



<audio id="audio" src="lyd.mp3" ></audio>





</body>

</html>