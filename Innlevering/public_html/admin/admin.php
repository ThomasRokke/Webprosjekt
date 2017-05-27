<?php include("../../Includes/adminHead.php"); ?>



    

    <?php include("../../Includes/adminMenu.php"); ?>



    











    <section class="admin_content">



        <form id="form1" action="adddcontent.php" method="post" autocomplete="on">



            <p class="Form_title">Legg til innhold</p>



            <p>Tittel:

                <input class="admin_form" type="text" name="name" value="" placeholder="Tittel på innholdet" />

            </p>



            <p>Marker info:

                <input class="admin_form" type="text" name="address" placeholder="" size="30" maxlength="85" value="" />

            </p>





            <p>Latitude(lengdegrad):

                <input class="admin_form" type="text" name="lat" size="30" placeholder="F.eks 59.913869" maxlength="60" value="" />

            </p>



            <p>Longditude(breddegrad):

                <input class="admin_form" type="text" name="lng" placeholder="F.eks 10.752245" size="30" maxlength="60" value="" />

            </p>

            <button type="button" class="find_coord" onclick="findLatLng()">Finn koordinater</button>





            <p>Kort beskrivelse:

                <input class="admin_form" type="text" name="sDesc" size="30" maxlength="90" value="" />

            </p>



            <p>Beskrivelse:

                <input class="admin_form" type="text" name="description" size="30" maxlength="500" value="" />

            </p>



            <p>Filnavn på bilde:

                <input class="admin_form" type="text" name="imagepath" size="30" maxlength="60" value="" />

            </p>



            <p>Mandag:<br></p>

            <p>Åpner:

                <input class="admin_form opening_hours" type="text" name="1o" size="30" maxlength="60" value="" />

            </p>

            <p>Stenger:

                <input class="admin_form opening_hours" type="text" name="1s" size="30" maxlength="60" value="" />

            </p>



            <p>Tirsdag:<br></p>

            <p>Åpner:

                <input class="admin_form opening_hours" type="text" name="2o" size="30" maxlength="60" value="" />

            </p>

            <p>Stenger:

                <input class="admin_form opening_hours" type="text" name="2s" size="30" maxlength="60" value="" />

            </p>



            <p>Onsdag:<br></p>

            <p>Åpner:

                <input class="admin_form opening_hours" type="text" name="3o" size="30" maxlength="60" value="" />

            </p>

            <p>Stenger:

                <input class="admin_form opening_hours" type="text" name="3s" size="30" maxlength="60" value="" />

            </p>



            <p>Torsdag:<br></p>

            <p>Åpner:

                <input class="admin_form opening_hours" type="text" name="4o" size="30" maxlength="60" value="" />

            </p>

            <p>Stenger:

                <input class="admin_form opening_hours" type="text" name="4s" size="30" maxlength="60" value="" />

            </p>



            <p>Fredag:<br></p>

            <p>Åpner:

                <input class="admin_form opening_hours" type="text" name="5o" size="30" maxlength="60" value="" />

            </p>

            <p>Stenger:

                <input class="admin_form opening_hours" type="text" name="5s" size="30" maxlength="60" value="" />

            </p>



            <p>Lørdag:<br></p>

            <p>Åpner:

                <input class="admin_form opening_hours" type="text" name="6o" size="30" maxlength="60" value="" />

            </p>

            <p>Stenger:

                <input class="admin_form opening_hours" type="text" name="6s" size="30" maxlength="60" value="" />

            </p>



            <p>Søndag:<br></p>

            <p>Åpner:

                <input class="admin_form opening_hours" type="text" name="7o" size="30" maxlength="60" value="" />

            </p>

            <p>Stenger:

                <input class="admin_form opening_hours" type="text" name="7s" size="30" maxlength="60" value="" />

            </p>



            <p><p>Type:</p>

            <input type="radio" id="event" value="event" name="type">

            <label for="event">Event</label><br>

            <input type="radio" id="matogdrikke" value="mat" name="type" >

            <label for="matogdrikke">Mat og Drikke</label><br>

            <input type="radio" id="aktivitet" value="aktivitet" name="type" >

            <label for="aktivitet">Aktivitet</label><br>

            </p>



            <button name="submit" type="submit" value="send" class="button_send">Send</button>









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