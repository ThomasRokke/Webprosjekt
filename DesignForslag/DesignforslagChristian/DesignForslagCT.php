<?php
    $port = '3306';
    $username = 'my_cms';
    $password = 'webprosjekt';
    $name = 'my_company';

    $connection = new PDO("mysql:host=localhost;dbname={$name};port={$port}", $username, $password);

    $statement = $connection->prepare('SELECT * FROM pages');
    $statement->execute();

    $pages = [];

    while($row = $statement->fetch(PDO::FETCH_ASSOC))   {
        $pages[] = $row; 
    }

    
    
?>


<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<link rel="stylesheet" style="text/css" href="CTtheme.css">
<title>Designforslag</title>
    

</head>
<body>

    <div id="navbar">
        <ul>
            <?php
                foreach ($pages as $page) {     
            ?>
            
            <li><a href=""><p><?php echo $page['menu_name']   ?></p></a></li>
            
            <?php } ?>
            
        </ul>   
    </div>
    
    <h1>Wzup!</h1>
    
    
    
    <div class="event_box"><a href="">
        <div class="img_box"><img src="event.png"></div>
        <div class="text_box"><h3>Tittel på Event</h3></div>
    </a></div>

</body>
</html>