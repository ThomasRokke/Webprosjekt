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
    
    <p><p>Type:</p>
        <input type="radio" id="event" value="event" name="type">
        <label for="event">Event</label><br>
        <input type="radio" id="matogdrikke" value="mat" name="type" >
        <label for="matogdrikke">Mat og Drikke</label><br>
        <input type="radio" id="aktivitet" value="aktivitet" name="type" >
        <label for="aktivitet">Aktivitet</label><br>
    </p>

   <!-- funkar ikkje  <input class="send" type="submit" name="submit" value="Send" /> -->

    <button name="submit" type="submit" value="send" class="send">Send</button>
    
    


</form>