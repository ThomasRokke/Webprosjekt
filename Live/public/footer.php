<?php require_once('../Includes/db_tilkobling.php'); ?>




<footer class="footer">
    <div class="footer_form_container">
        <form class="footer_form" action="/Web/Webprosjekt-test/Live/public/footerDB.php" method="post">
            <p>Send oss tips om nye steder dere ønsker på nettsiden!</p>
            <textarea class="footer_input_area" rows="7" type="text" id="tips" name="tips" value=""></textarea>
            
        <button class="send" type="submit" name="submit" value="send">Send</button>
        </form>
        
    </div>
    <div class="footer_social_media_icons"></div>
    <div class="footer_text">
        <h2 class="footer_navn">2017 WZup?</h2><br>   
        <h3 class="footer_adresse">Chr. Krohgs gate 32, 0186 Oslo</h3>
    </div>
</footer>

