<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">

<title>Basic html</title>

</head>
<body>

<?php 
    $var = "dust";
    $to = "-e-";
    $tre = "mikkel!!!"; 
        
        for($count = 0; $count <= 10; $count++ ){
            if($count % 2 ==1) { // partal 
                
                continue; //Vi forteller den at den skal loope tidligere. Altså hopper et hakk frem i loopen. Derfor blir echo aldri kjørt. 
            }
            echo $count . ", ";
        }
    
    ?>
    
    <ul>
    
    <li><?= $var ?> </li>
    <li><?php echo $to ?></li>
    <li><?php echo $tre ?></li>
        
        
    </ul>
    
   

</body>
</html>