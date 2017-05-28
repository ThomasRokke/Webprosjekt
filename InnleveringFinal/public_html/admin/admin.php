<?php include("../../Includes/adminHead.php"); ?>

<?php include("../../Includes/adminMenu.php"); ?>

    <section class="admin_content">


        <form id="form1" action="adddcontent.php" method="post" autocomplete="on">

            <p class="Form_title">Legg til innhold</p>

            <p>Tittel:
                <input type="text" name="name" value="" placeholder="Tittel på innholdet" />
            </p>

            <p>Marker info:
                <input type="text" name="address" placeholder="" size="30" maxlength="85" value="" />
            </p>


            <p>Latitude(lengdegrad):
                <input type="text" name="lat" size="30" placeholder="F.eks 59.913869" maxlength="60" value="" />
            </p>

            <p>Longditude(breddegrad):
                <input type="text" name="lng" placeholder="F.eks 10.752245" size="30" maxlength="60" value="" />
            </p>
            <button type="button" class="find_coord" onclick="findLatLng()">Finn koordinater</button>


            <p>Kort beskrivelse:
                <input type="text" name="sDesc" size="30" maxlength="90" value="" />
            </p>

            <p>Beskrivelse:
                <input type="text" name="description" size="30" maxlength="500" value="" />
            </p>

            <p>Filnavn på bilde:
                <input type="text" name="imagepath" size="30" maxlength="60" value="" />
            </p>

            <p>Mandag:<br></p>
            <p>Åpner:
                <input class="opening_hours" type="text" name="1o" size="30" maxlength="60" value="" placeholder="Format er timeMinuttSekund F.eks. 143000 = 14:30" />
            </p>
            <p>Stenger:
                <input class="opening_hours" type="text" name="1s" size="30" maxlength="60" value="" />
            </p>

            <p>Tirsdag:<br></p>
            <p>Åpner:
                <input class="opening_hours" type="text" name="2o" size="30" maxlength="60" value="" />
            </p>
            <p>Stenger:
                <input class="opening_hours" type="text" name="2s" size="30" maxlength="60" value="" />
            </p>

            <p>Onsdag:<br></p>
            <p>Åpner:
                <input class="opening_hours" type="text" name="3o" size="30" maxlength="60" value="" />
            </p>
            <p>Stenger:
                <input class="opening_hours" type="text" name="3s" size="30" maxlength="60" value="" />
            </p>

            <p>Torsdag:<br></p>
            <p>Åpner:
                <input class="opening_hours" type="text" name="4o" size="30" maxlength="60" value="" />
            </p>
            <p>Stenger:
                <input class="opening_hours" type="text" name="4s" size="30" maxlength="60" value="" />
            </p>

            <p>Fredag:<br></p>
            <p>Åpner:
                <input class="opening_hours" type="text" name="5o" size="30" maxlength="60" value="" />
            </p>
            <p>Stenger:
                <input class="opening_hours" type="text" name="5s" size="30" maxlength="60" value="" />
            </p>

            <p>Lørdag:<br></p>
            <p>Åpner:
                <input class="opening_hours" type="text" name="6o" size="30" maxlength="60" value="" />
            </p>
            <p>Stenger:
                <input class="opening_hours" type="text" name="6s" size="30" maxlength="60" value="" />
            </p>

            <p>Søndag:<br></p>
            <p>Åpner:
                <input class="opening_hours" type="text" name="7o" size="30" maxlength="60" value="" />
            </p>
            <p>Stenger:
                <input class="opening_hours" type="text" name="7s" size="30" maxlength="60" value="" />
            </p>

            <p><p>Kategori:</p>
            <input type="radio" id="bar" value="bar" name="type">
            <label for="bar">Utested</label><br>
            <input type="radio" id="mat" value="mat" name="type" >
            <label for="mat">Spisesteder</label><br>
            <input type="radio" id="cafe" value="cafe" name="type" >
            <label for="cafe">Cafe</label><br>
            <input type="radio" id="butikk" value="butikk" name="type" >
            <label for="butikk">Butikk</label><br>
            <input type="radio" id="aktivitet" value="aktivitet" name="type" >
            <label for="aktivitet">Aktivitet</label><br>

            </p>

            <button name="submit" type="submit" value="send" class="send">Send</button>

        </form>

        <?php

        include("../../Includes/adminGetRowsDelete.php");

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









    







</body>

</html>