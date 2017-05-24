<?php include("../includes/head.php"); ?>


<?php include("../includes/menu.php"); ?>

<div class="top-image">
</div>


<style type="text/css">
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #dddddd;
    }
    .aKnapp {
        display: block;
        height: 20px;
        width: auto;
        border: 1px solid #000;
    }
</style>




    <?php

    require_once('../Includes/db_tilkobling.php');

    echo '<table>
     <tr>
        <th>Navn</th>
        <th>Beskrivelse</th>
        <th>Type</th>
        <th>Slett rad</th>
    </tr>';

    $query = "SELECT id, name, sDesc, type FROM markers";

    $response = @mysqli_query($dbc, $query);

    if($response){

        while($row = mysqli_fetch_array($response)) {

        echo
        '<tr>'.
            '<td>'.
             $row['name'].
            '</td>'.
            '<td>'.
            $row['sDesc'].
            '</td>'.
            '<td>'.
            $row['type'].
            '</td>'.
            '<td>'.
            '<a href="/Web/Webprosjekt-test/Live/public/rjBO9lLeIVN6av.php?id=' .
            $row['id'] .
            '" onclick="return confirm(\'er du sikker på du vil slette ' .
            $row['name'] .
            '? \n\nDet er ikke mulighet til å angre i ettertid! \n\nTrykk OK for å slette. Avbryt for angre.\')">Slett meg</a>'.
            '</td>' .
            '</form>'.
            '</td>'.
        '</tr>';

        }}



    else {

        echo "Couldn't issue database query<br />";

        echo mysqli_error($dbc);

    }

    echo '</table>';

    // Close connection to the database
    mysqli_close($dbc);
    ?>






<footer class="TRfooter">
    <p class="footerText">&copy; 2017 WZup?<p>
    <p class="footerAdr">Chr. Krohgs gate 32, 0186 Oslo</p>

</footer>








</body>
</html>