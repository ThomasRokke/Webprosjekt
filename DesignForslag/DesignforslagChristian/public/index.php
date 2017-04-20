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
    
    
    
    <div id="frontpage_image">
        <h1>Wzup!</h1>
    </div>
    
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
    
    <article>Tamen quibusdam e cohaerescant ita o do culpa cernantur aut velit incurreret 
        laboris, do cupidatat sed cernantur. Sed in eram cupidatat. Aut arbitror nam 
        laboris. Incurreret domesticarum est aliquip ex o ita culpa arbitror ex legam 
        proident si concursionibus eu elit ingeniis ita concursionibus, fabulas 
        exercitation in incurreret a appellat fidelissimae nam pariatur, quid non 
        cernantur, te quid probant excepteur. Ingeniis summis enim pariatur enim nam est 
        qui noster fore quem, litteris de voluptate, est labore iis minim. Te o fugiat 
        ingeniis se cillum officia sed labore aute.</article>
</body>
</html>