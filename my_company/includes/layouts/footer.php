 <div id="footer">Copyright 2017, Thomas Røkke</div>

</body>
</html>

<?php 
    // 5. Close database connection 
    if(isse($connection)){ //Hvis connetion har blitt skapt
        
    mysqli_close($connection); // close connection
    
        
    }

?>