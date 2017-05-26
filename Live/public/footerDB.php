<?php 

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