<?php
/**
 * Created by PhpStorm.
 * User: Thomas
 * Date: 15.05.2017
 * Time: 10.53
 */

require_once('../Includes/db_tilkobling.php');

$query = "SELECT id, name, imagepath, sDesc, type FROM markers";

$response = @mysqli_query($dbc, $query);



# City = bilde, first_name = tittel, last_name = beskrivelse
if($response){
// mysqli_fetch_array will return a row of data from the query
// until no further data is available

    while($row = mysqli_fetch_array($response)) {



            echo '<div class="CTbox" id="festbox">' .
                '<div class="CTbox-image">' .
                '<img src="Images/'.
                $row['imagepath'] .
                '">' .
                '</div>' .

                '<div class="CTbox-info">' .
                '<h4>'.
                $row['name'].
                '</h4>' .
                '<p>'.
                $row['sDesc'].
                '</p>' .
                '<a class="CTbutton" href="merinfo.php?id=' .
                $row['id'] .
                '">Mer info!</a>' .
                '</div>' .
                '</div>';




    }


}
else {

    echo "Couldn't issue database query<br />";

    echo mysqli_error($dbc);

}

// Close connection to the database
mysqli_close($dbc);