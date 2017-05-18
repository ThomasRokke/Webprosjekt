<?php

if(isset($_POST['submit'])){

    $manglende_info = array();

    if(empty($_POST['name'])){

        // Adds name to array
        $manglende_info[] = 'Navn';

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

        
        $manglende_info[] = 'Bildenavn';

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

        echo 'Du trenger følgende data<br />';


        echo '<ul>';
        foreach($manglende_info as $missing){

            echo '<li>'.
            $missing .
            '</li>';

        }
          echo '</ul>';



    }

}

?>

<form action="/Web/Webprosjekt-test/Live/public/adddcontent.php" method="post" autocomplete="on">

    <p class="Form_title">Legg til innhold</p>

    <p>Navn:
        <input type="text" name="name" value="" />
    </p>

    <p>Marker info:
        <input type="text" name="address" size="30" maxlength="85" value="" />
    </p>


    <p>lat(lengdegrad):
        <input type="text" name="lat" size="30" maxlength="60" value="" />
    </p>

    <p>lng(breddegrad):
        <input type="text" name="lng" size="30" maxlength="60" value="" />
    </p>
    <button type="button" class="find_coord" onclick="findLatLng()">Finn koordinater</button>
    

    <p>Type:
        <input type="text" name="type" size="30" maxlength="30" value="" />
    </p>

    <p>Kort beskrivelse:
        <input type="text" name="sDesc" size="30" maxlength="90" value="" />
    </p>
    
    <p>Beskrivelse:
        <input type="text" name="description" size="30" maxlength="500" value="" />
    </p>

    <p>Filnavn på bilde:
        <input type="text" name="imagepath" size="30" maxlength="60" value="" />
    </p>

    <button type="submit" class="send">Send</button>
    
    


</form>