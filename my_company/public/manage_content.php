<?php require_once("../includes/db_connection.php"); ?>


<?php require_once("../includes/functions.php") ?>



<?php include("../includes/layouts/header.php"); ?>


<div id="main">
        <div id="navigation">
            <ul class="subjects">
                <?php 
                    //2. Perform database query
                    $query  = "SELECT * ";
                    $query .= "FROM subjects ";
                    $query .= "WHERE visible = 1 ";
                    $query .= "ORDER BY position ASC";
                    $result = mysqli_query($connection, $query);
                    //test if there was a querry error using function.
                    confirm_query($result);     
                ?>
                <?php

                // 3. use returned data (if any)
                
                while($subject = mysqli_fetch_assoc($result)) { 

                ?>

                <li>
                    
                <?php echo $subject["menu_name"];// . " (" . 
                //$subject["id"] . ")"; ?>

                <?php 
                //2. Perform database query
                $query  = "SELECT * ";
                $query .= "FROM pages ";
                $query .= "WHERE visible = 1 ";
                $query .= "AND subject_id = {$subject["id"]} ";
                $query .= "ORDER BY position ASC"; 
                    
                $pages_result = mysqli_query($connection, $query);
                //test if there was a querry error using function.
                confirm_query($pages_result);     
                ?>

                <ul class ="pages">
                <?php
                    while($page = mysqli_fetch_assoc($pages_result)) { 

                    ?>

                <li> <?php echo $page["menu_name"]; ?> </li>
                    
                <?php
                    }
                ?>
                    //Free up space
                <?php mysqli_free_result($pages_result); ?>
                    
                </ul>
                </li>     

               <?php
                    } //avslutter while løkka. 
                ?>
                <?php 
                    //4. Release returned data
                    mysqli_free_result($pages_result); 

                ?>
    
            </ul>
            
        </div>
        <div id="page">
            <h2>Manage content</h2>
            
       
        </div>
    </div>



<?php include("../includes/layouts/footer.php"); ?>