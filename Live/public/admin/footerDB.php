<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <meta http-equiv="refresh" content="1.3;url=http://localhost:8888/Web/Webprosjekt-test/Live/public/index.php#footer" />

    <title>Tips DB </title>

</head>
<body>

<div>
    <h3>
        <?php
        require_once('../Includes/db_tilkobling.php');
        if(isset($_POST['submit'])){

            $tips = $_POST['tips'];
        }

        $query = "INSERT INTO tips (tips) 
            VALUES ('$tips');";

        if (mysqli_query($dbc, $query)) {
            echo "Innhold er lagt til i databasen";
        }
        else {
            echo "Error: " . $query . "<br>" . mysqli_error($dbc);
        }

        mysqli_close($dbc);

        ?>

    </h3>
</div>

</body>
</html>

