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
            echo "<table>";
            for($i = 0; $i < 4; $i++){
                dealHand($field[$i], $$cards);
            }
            
            echo "<tr>".printGame($field)."</tr>";
            echo "</table>";
        ?>
        </div>
    </body>
</html>


