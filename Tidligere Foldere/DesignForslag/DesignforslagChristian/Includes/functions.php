<?php

    function select_all_from_events(){
        global $connection;   
        $statement = $connection->prepare('SELECT * FROM events');
        $statement->execute();

        $events = [];

        while($row = $statement->fetch(PDO::FETCH_ASSOC))   {
            $events[] = $row; 
        }
     
        return $events;
        
    }

    function select_all_from_content_type()   {
        global $connection;
        $statement = $connection->prepare('SELECT * FROM content_type');
        $statement->execute();

        $content = [];

        while($row = $statement->fetch(PDO::FETCH_ASSOC))   {
            $content[] = $row; 
        }
        return $content;
    }

    function select_all_from_pages(){
        global $connection;
        $statement = $connection->prepare('SELECT * FROM pages');
        $statement->execute();

        $pages = [];

        while($row = $statement->fetch(PDO::FETCH_ASSOC))   {
            $pages[] = $row; 
        }
        return $pages;
    }



?>