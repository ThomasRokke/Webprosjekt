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

$time = 140000; //date('His');


    if($time > 000000 && $time < 050000 ) {

        echo 'hei';

        switch ($engDay) {

            case "Monday":

                $day = "Søndag";

                break;

            case "Tuesday":

                $day = "Mandag";

                break;

            case "Wednesday":

                $day = "Tirsdag";

                break;

            case "Thursday":

                $day = "Onsdag";

                break;

            case "Friday":

                $day = "Torsdag";

                break;

            case "Saturday":

                $day = "Fredag";

                break;

            case "Sunday":

                $day = "Lørdag";

                break;


        }


        $query = "SELECT * FROM markers AS ma join OpeningHours AS oh on ma.id = oh.BarId JOIN Days AS da on

        oh.DayId = da.DayId WHERE oh.EndTime > 000000 && oh.EndTime < 050000 && da.Weekday = '$day'";

        $response = @mysqli_query($dbc, $query);


        if ($response) {

            while ($row = mysqli_fetch_array($response)) {

                echo '<div class="CTbox" id="festbox">' .

                    '<div class="CTbox-image">' .

                    '<h3 class="boksStenger">' .

                    'Stenger: ' . $row['EndTime'] .

                    '</h3>' .

                    '<img src="Images/' .

                    $row['imagepath'] .

                    '.JPG">' .

                    '</div>' .

                    '<div class="CTbox-info">' .

                    '<h4>' .

                    $row['name'] .

                    '</h4>' .

                    '<p>' .

                    $row['sDesc'] . '<br>' .

                    '</p>' .

                    '<a class="CTbutton" href="merinfo.php?id=' .

                    $row['id'] .

                    '#merInfoAnchor">Mer info!</a>' .

                    '</div>' .

                    '</div>';


            }
            // Close connection to the database

            mysqli_close($dbc);
        }
    }

    else {

        echo '<script type="text/javascript">alert("else!");</script>';
        echo $engDay;
        $time = 140000;
        switch ($engDay) {

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

                $day = "Lordag";

                break;

            case "Sunday":

                $day = "Søndag";

                break;

        }
        $query = "SELECT * FROM markers AS ma join openinghours AS oh on ma.id = oh.BarId JOIN Days AS da on
            oh.DayId = da.DayId WHERE (oh.EndTime > $time || oh.EndTime BETWEEN 000000 AND 050000) && oh.StartTime < $time && da.Weekday = '$day'";

        $response = @mysqli_query($dbc, $query);

        if ($response) {

            while ($row = mysqli_fetch_array($response)) {
                echo 'DUST';

                echo '<div class="CTbox" id="festbox">' .

                    '<div class="CTbox-image">' .

                    '<h3 class="boksStenger">' .

                    'Stenger: ' . $row['EndTime'] .

                    '</h3>' .

                    '<img src="Images/' .

                    $row['imagepath'] .

                    '.JPG">' .

                    '</div>' .

                    '<div class="CTbox-info">' .

                    '<h4>' .

                    $row['name'] .

                    '</h4>' .

                    '<p>' .

                    $row['sDesc'] . '<br>' .

                    '</p>' .

                    '<a class="CTbutton" href="merinfo.php?id=' .

                    $row['id'] .

                    '#merInfoAnchor">Mer info!</a>' .

                    '</div>' .

                    '</div>';


            }

        }

    else {


            echo "Kunne ikke hente data fra databasen<br />";


            echo "$query" . mysqli_error($dbc);



        }

        mysqli_close($dbc);



    }





