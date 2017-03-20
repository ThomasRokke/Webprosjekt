<?php
    //Ser om db query fungerer 
    function confirm_query($result_set) {
        if(!$result_set) {
            die("Database query has failed"); 
        }
    }

    function find_all_subjects(){
        
        global $connection; 
        
        $query  = "SELECT * ";
        $query .= "FROM subjects ";
        $query .= "WHERE visible = 1 ";
        $query .= "ORDER BY position ASC";
        $result = mysqli_query($connection, $query);
        //test if there was a querry error using function.
        confirm_query($result); 
        
        return $result; 
    }

    function find_pages_for_subject($subject_id){
        
        global $connection; 
         
        $query  = "SELECT * ";
        $query .= "FROM pages ";
        $query .= "WHERE visible = 1 ";
        $query .= "AND subject_id = {$subject_id} ";
        $query .= "ORDER BY position ASC"; 

        $pages_result = mysqli_query($connection, $query);
        //test if there was a querry error using function.
        confirm_query($pages_result);  
        
        return $pages_result; 
    }
    

?>