<?php

/**

 * Created by PhpStorm.

 * User: Thomas

 * Date: 24.05.2017

 * Time: 19.00

 */



include('db_tilkobling.php');



echo '<table id="admin_table">

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

            '<a href="rjBO9lLeIVN6av.php?id=' .

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



