<?php

     function find_all_from_bars(){
         global $connection;
         $query  = "SELECT *";
         $query .= "FROM bars";
        
         $bars = mysqli_query($connection, $query);
         if(!$bars){
             die("query failed");
         }
         return $bars;
     }

?>