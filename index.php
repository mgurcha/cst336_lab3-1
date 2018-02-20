<style>
	@import url(css/styles.css); 
</style>

<?php
    include 'functions.php';
?>
<!DOCTYPE html>
<html>
    <head>
        
    </head>
    
    <body>
        <div id="wrapper">
        <?php
            
            
            for($i = 0; $i < 4; $i++){
                dealHand($field[$i], $$cards);
            }
            
            echo printGame($field);
        ?>
        </div>
    </body>
</html>


