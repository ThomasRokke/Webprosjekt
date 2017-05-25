<?php

if(isset($_POST['submit'])){

    $manglende_info = array();

    if(empty($_POST['name'])){

        // Adds name to array
        $manglende_info[] = 'Tittel';

    } else {

        // Trim white space from the name and store the name
        $name = trim($_POST['name']);

    }

    if(empty($_POST['address'])){

        // Adds name to array
        $manglende_info[] = 'Marker info';

    } else{

        // Trim white space from the name and store the name
        $address = trim($_POST['address']);

    }

    if(empty($_POST['lat'])){

        // Adds name to array
        $manglende_info[] = 'lat';

    } else {

        // Trim white space from the name and store the name
        $lat = trim($_POST['lat']);

    }

    if(empty($_POST['lng'])){

        // Adds name to array
        $manglende_info[] = 'lng';

    } else {

        // Trim white space from the name and store the name
        $lng = trim($_POST['lng']);

    }

    if(empty($_POST['type'])){

        // Adds name to array
        $manglende_info[] = 'Type';

    } else {

        // Trim white space from the name and store the name
        $type = trim($_POST['type']);

    }

    if(empty($_POST['sDesc'])){

        // Adds name to array
        $manglende_info[] = 'Kort beskrivelse';

    } else {

        // Trim white space from the name and store the name
        $sDesc = trim($_POST['sDesc']);

    }

    if(empty($_POST['description'])){

        // Adds name to array
        $manglende_info[] = 'Beskrivelse';

    } else {

        // Trim white space from the name and store the name
        $description = trim($_POST['description']);

    }

    if(empty($_POST['imagepath'])){

        
        $manglende_info[] = 'Filnavn på bilde';

    } else {

      
        $imagepath = trim($_POST['imagepath']);

    }

    if(empty($_POST['1o'])){


        $manglende_info[] = 'Mandag Open';

    } else {


        $mO = trim($_POST['1o']);

    }
    if(empty($_POST['1s'])){


        $manglende_info[] = 'Mandag Close';

    } else {


        $mS = trim($_POST['1s']);

    }
    if(empty($_POST['2o'])){


        $manglende_info[] = 'Tirsdag Open';

    } else {


        $tiO = trim($_POST['2o']);

    }
    if(empty($_POST['2s'])){


        $manglende_info[] = 'Tirsdag close';

    } else {


        $tiS = trim($_POST['2s']);

    }
    if(empty($_POST['3o'])){


        $manglende_info[] = 'Onsdag Open';

    } else {


        $oO = trim($_POST['3o']);

    }
    if(empty($_POST['3s'])){


        $manglende_info[] = 'Onsdag Close';

    } else {


        $oS = trim($_POST['3s']);

    }
    if(empty($_POST['4o'])){


        $manglende_info[] = 'Torsdag Open';

    } else {


        $tO = trim($_POST['4o']);

    }
    if(empty($_POST['4s'])){


        $manglende_info[] = 'Torsdag Open';

    } else {


        $tS = trim($_POST['4s']);

    }

    if(empty($_POST['5o'])){


        $manglende_info[] = 'Fredag Open';

    } else {


        $fO = trim($_POST['5o']);

    }

    if(empty($_POST['5s'])){


        $manglende_info[] = 'Fredag Close';

    } else {


        $fS = trim($_POST['5s']);

    }

    if(empty($_POST['6o'])){


        $manglende_info[] = 'Lørdag Open';

    } else {


        $lO = trim($_POST['6o']);

    }

    if(empty($_POST['6s'])){


        $manglende_info[] = 'Lørdag stengt';

    } else {


        $lS = trim($_POST['6s']);

    }

    if(empty($_POST['7o'])){


        $manglende_info[] = 'Søndag open';

    } else {


        $sO = trim($_POST['7o']);

    }

    if(empty($_POST['7s'])){


        $manglende_info[] = 'Søndag stengt';

    } else {


        $sS = trim($_POST['7s']);

    }



    if(empty($manglende_info)){

        require_once('db_tilkobling.php');




        $sporring = "INSERT INTO markers (name, address, lat, lng, type, sDesc, description, imagepath) 
            VALUES ('$name', '$address', '$lat', '$lng', '$type', '$sDesc', '$description', '$imagepath');";

        if (mysqli_query($dbc, $sporring)) {
            echo "Innhold er lagt til i databasen";
        }

        else {
            echo "Error: " . $sporring . "<br>" . mysqli_error($dbc);
        }
        

        $IDquery = "SELECT id FROM markers WHERE name = '$name'";

        $IDsvar = @mysqli_query($dbc, $IDquery);

        $id = 0;

        if($IDsvar){
            if($IDresult = mysqli_fetch_array($IDsvar)){
                $id = $IDresult['id'];

            }

        }
        else{
            ECHO 'WRONG BITCH';
        }

        $MtimeSporring = "INSERT INTO openinghours (BarId, DayId, StartTime, EndTime) 
            VALUES ('$id', 1, '$mO', '$mS');";

        if (mysqli_query($dbc, $MtimeSporring)) {

        }

        else {
            echo "Error: " . $sporring . "<br>" . mysqli_error($dbc);
        }

        $TitimeSporring = "INSERT INTO openinghours (BarId, DayId, StartTime, EndTime) 
            VALUES ('$id', 2, '$tiO', '$tiS');";

        if (mysqli_query($dbc, $TitimeSporring)) {

        }

        else {
            echo "Error: " . $OtimeSporring . "<br>" . mysqli_error($dbc);
        }

        $OtimeSporring = "INSERT INTO openinghours (BarId, DayId, StartTime, EndTime) 
            VALUES ('$id', 3, '$oO', '$oS');";

        if (mysqli_query($dbc, $OtimeSporring)) {

        }

        else {
            echo "Error: " . $OtimeSporring . "<br>" . mysqli_error($dbc);
        }

        $TtimeSporring = "INSERT INTO openinghours (BarId, DayId, StartTime, EndTime) 
            VALUES ('$id', 4, '$tO', '$tS');";

        if (mysqli_query($dbc, $TtimeSporring)) {

        }

        else {
            echo "Error: " . $TtimeSporring . "<br>" . mysqli_error($dbc);
        }

        $FtimeSporring = "INSERT INTO openinghours (BarId, DayId, StartTime, EndTime) 
            VALUES ('$id', 5, '$fO', '$fS');";

        if (mysqli_query($dbc, $FtimeSporring)) {

        }

        else {
            echo "Error: " . $FtimeSporring . "<br>" . mysqli_error($dbc);
        }

        $LtimeSporring = "INSERT INTO openinghours (BarId, DayId, StartTime, EndTime) 
            VALUES ('$id', 6, '$lO', '$lS');";

        if (mysqli_query($dbc, $LtimeSporring)) {

        }

        else {
            echo "Error: " . $LtimeSporring . "<br>" . mysqli_error($dbc);
        }

        $StimeSporring = "INSERT INTO openinghours (BarId, DayId, StartTime, EndTime) 
            VALUES ('$id', 7, '$sO', '$sS');";

        if (mysqli_query($dbc, $StimeSporring)) {

        }

        else {
            echo "Error: " . $StimeSporring . "<br>" . mysqli_error($dbc);
        }






        mysqli_close($dbc);

    } else {

        echo 'Obs! Du mangler følgende data<br/>';


        echo '<ul class="mangel_liste">';
        foreach($manglende_info as $missing){

            echo '<li><p>'.
            $missing .
            '</p></li>';

        }
          echo '</ul>';



    }

}

?>

<form id="form1" action="/Web/Webprosjekt-test/Live/public/adddcontent.php" method="post" autocomplete="on">

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
        <input class="opening_hours" type="text" name="1o" size="30" maxlength="60" value="" />
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
    
    <p><p>Type:</p>
        <input type="radio" id="event" value="event" name="type">
        <label for="event">Event</label><br>
        <input type="radio" id="matogdrikke" value="mat" name="type" >
        <label for="matogdrikke">Mat og Drikke</label><br>
        <input type="radio" id="aktivitet" value="aktivitet" name="type" >
        <label for="aktivitet">Aktivitet</label><br>
    </p>

    <button name="submit" type="submit" value="send" class="send">Send</button>
    
    


</form>