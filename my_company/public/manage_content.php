<?php require_once("../includes/db_connection.php"); ?>


<?php require_once("../includes/functions.php") ?>



<?php include("../includes/layouts/header.php"); ?>

<?php 
    if(isset($_GET["subject"])) {
        $selected_subject_id = $_GET["subject"]; 
        $selected_page_id = null; 
    } 
    elseif(isset($_GET["page"])) {
        $selected_page_id = $_GET["page"];
        $selected_subject_id = null;
    }
    else{
        $selected_subject_id = null;
        $selected_page_id = null;
    }
?>


<div id="main">
    <div id="navigation">
        <ul class="subjects">
            <?php 
               $result = find_all_subjects();  
                // https://www.lynda.com/MySQL-tutorials/Selecting-pages-from-navigation/119003/137027-4.html?autoplay=true
            ?>
            <?php
            while($subject = mysqli_fetch_assoc($result)) { 
            ?>

            <li>
                    
                <a href="manage_content.php?subject=<?php echo urlencode($subject["id"]); ?>"><?php echo $subject["menu_name"]; ?></a>
                    
                <?php  
                     $pages_result =  find_pages_for_subject($subject["id"]);    
                ?>

                <ul class ="pages">
                <?php
                    while($page = mysqli_fetch_assoc($pages_result)) { 

                    ?>

                    <li> 
                        <a href="manage_content.php?page=<?php echo urlencode($page["id"]); ?>"><?php echo $page["menu_name"]; ?></a> 
                    </li>
                    
                <?php
                    }
                ?>
                    <!--Free up space-->
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
            <?php echo $selected_subject_id; ?> <br />
            <?php echo $selected_page_id; ?>
               
        </div>
    </div>



<?php include("../includes/layouts/footer.php"); ?>