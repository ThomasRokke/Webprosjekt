<?php
/**
 * Created by PhpStorm.
 * User: Thomas
 * Date: 15.05.2017
 * Time: 10.53
 */

require_once('../Includes/db_tilkobling.php');

//Setter riktig tidssone
date_default_timezone_set('Europe/Berlin');

$engDay = date('l');

$time = date('His');



$day = "";

switch($engDay) {
    case "Monday":
        $day = "Mandag";
        break;
    case "Tuesday":
        $day = "Tirsdag";
        break;
    case "Wednesday":
        $day = "Onsdag";
        break;
    case "Thursday":
        $day = "Torsdag";
        break;
    case "Friday":
        $day = "Fredag";
        break;
    case "Saturday":
        $day = "Lørdag";
        break;
    case "Sunday":
        $day = "Søndag";
        break;

}




    if($time > 000000 && $time < 050000 ){
        $query = "SELECT * FROM markers AS ma join openinghours AS oh on ma.id = oh.BarId JOIN Days AS da on
        oh.DayId = da.DayId WHERE oh.EndTime > 000000 && oh.EndTime < 050000 && da.Weekday = '$day'";
        $response = @mysqli_query($dbc, $query);
    }
    else{
        $query = "SELECT * FROM markers AS ma join openinghours AS oh on ma.id = oh.BarId JOIN Days AS da on
        oh.DayId = da.DayId WHERE (oh.EndTime > $time || oh.EndTime BETWEEN 000000 AND 050000) && oh.StartTime < $time && da.Weekday = '$day';";
        $response = @mysqli_query($dbc, $query);
    }






# City = bilde, first_name = tittel, last_name = beskrivelse
if($response){
// mysqli_fetch_array will return a row of data from the query
// until no further data is available

    while($row = mysqli_fetch_array($response)) {




        echo '<div class="CTbox" id="festbox">' .
            '<div class="CTbox-image">' .
            '<h3 class="boksStenger">' .
            'Stenger: ' . $row['EndTime'] .
            '</h3>' .
            '<img src="Images/'.
            $row['imagepath'] .
            '.jpg">' .
            '</div>' .
            '<div class="CTbox-info">' .
            '<h4>'.
            $row['name'].
            '</h4>' .
            '<p>'.
            $row['sDesc']. '<br>' .


            '</p>' .
            '<a class="CTbutton" href="merinfo.php?id=' .
            $row['id'] .
            '#merInfoAnchor">Mer info!</a>' .
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