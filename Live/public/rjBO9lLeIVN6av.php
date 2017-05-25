<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta http-equiv="refresh" content="1.3;url=http://localhost:8888/Web/Webprosjekt-test/Live/public/admin.php#admin_table" />

    <title>DELETED</title>

</head>
<body>

<div>
    <h1>
        <?php
        /**
         * Created by PhpStorm.
         * User: Thomas
         * Date: 24.05.2017
         * Time: 16.48
         */
        require_once('../Includes/db_tilkobling.php');
            if(!empty($_GET['id'])){

            $getID = $_GET['id'];

            $query = "DELETE FROM markers WHERE id = $getID LIMIT 1;";

            $timeQuery = "DELETE FROM openinghours WHERE BarId = $getID LIMIT 1;";

            if(mysqli_query($dbc, $timeQuery)){
                echo 'Timetable Suksess' .
                '<br>';
            }

            if (mysqli_query($dbc, $query)) {
                echo 'Markers Suksess';



            } else {


                echo 'Ooops, det skjedde visst noe feil. Se på SQL feilmeldingen under:';

                echo mysqli_error($dbc);

            }

            // Lukker database tilkoblingen.
                mysqli_close($dbc);


        }
        else {
            echo 'sum ting wong';
        }

        ?>

    </h1>
</div>

</body>
</html>