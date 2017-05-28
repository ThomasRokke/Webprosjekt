<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>New HMTL document by NewJect</title>

</head>
<body>

<div>
    <h3>

        <?php
                include('../Includes/db_tilkobling.php');

        $time = 140000;
        $day = "Fredag";
            $query = "SELECT * FROM markers AS ma join openinghours AS oh on ma.id = oh.BarId JOIN Days AS da on
            oh.DayId = da.DayId WHERE (oh.EndTime > $time || oh.EndTime BETWEEN 000000 AND 050000) && oh.StartTime < $time && da.Weekday = '$day';";

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

        } else {

            echo "Kunne ikke hente data fra databasen<br />";

            echo "$query" . mysqli_error($dbc);

        }

        mysqli_close($dbc);
        ?>

    </h3>
</div>

</body>
</html>