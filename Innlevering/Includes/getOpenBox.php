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


    if($time > 000000 && $time < 050000 ){

        echo 'hei';

        switch($engDay) {

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

        hentBox($response);



    }

    else{

        echo '<script type="text/javascript">alert("else!");</script>';
        $getDay = date('l');

        $dag = "Fredag";

        switch($getDay) {

            case "Monday":

                $dag = "Mandag";

                break;

            case "Tuesday":

                $dag = "Tirsdag";

                break;

            case "Wednesday":

                $dag = "Onsdag";

                break;

            case "Thursday":

                $dag = "Torsdag";

                break;

            case "Friday":

                $dag = "Fredag";

                break;

            case "Saturday":

                $dag = "Lørdag";

                break;

            case "Sunday":

                $dag = "Søndag";

                break;

        }

        echo '<script type="text/javascript">alert("else2");</script>';
        $dagQuery = "SELECT * FROM markers AS ma join OpeningHours AS oh on ma.id = oh.BarId JOIN Days AS da on

        oh.DayId = da.DayId WHERE (oh.EndTime > 140000 || oh.EndTime BETWEEN 000000 AND 050000) && oh.StartTime < 140000 && da.Weekday = '$dag'";
        $resp = @mysqli_query($dbc, $dagQuery);

        if($resp){
            while($row = mysqli_fetch_array($resp)){
                echo '<script type="text/javascript">alert("response");</script>';
            }

        }



        hentBox($resp);

    }



function hentBox($res)
{


    if ($res) {

        while ($row = mysqli_fetch_array($res)) {

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

    } else {


        echo "Kunne ikke hente data fra databasen<br />";


        echo mysqli_error($dbc);

    }


// Close connection to the database

    mysqli_close($dbc);

}