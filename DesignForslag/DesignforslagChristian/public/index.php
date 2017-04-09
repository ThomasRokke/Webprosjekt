<?php
    require_once("connection.php");
    require_once("../includes/functions.php");
    include("../Includes/Layouts/header.php")
?>
<body>
    <div id="navbar">
        <ul>
            <?php
                $pages = select_all_from_pages();
                foreach ($pages as $page) {     
            ?>
            <li class="navbaritems"><a href=""><p><?php echo $page['menu_name']   ?></p></a></li>          
            <?php } ?>
        </ul>   
    </div>
    
    <h1>Wzup!</h1>
    
    <div class="content_menu">
        <ul>
            <?php
                $content = select_all_from_content_type();
                foreach ($content as $title)    {
            ?>
            <li class="content_menu_items"><?php echo $title['title']?></li>
            <?php } ?>        
        </ul>
    
    </div>
        <?php
            $events = select_all_from_events();
            foreach($events as $event){
        ?>
    <div class="event_box"><a href="">
        <div class="img_box"><img src="<?php echo $event['img_url']?>"></div>
        <div class="text_box"><h3><?php echo $event['title'] ?></h3></div>
        </a></div>
    <?php } ?>
</body>
</html>