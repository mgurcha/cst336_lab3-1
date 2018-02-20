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
            for($i =0; $i< 5;$i++){
                
                generateCard($field[0]);
                generateCard($field[1]);
                generateCard($field[2]);
                generateCard($field[3]);
            }
            
            echo "<tr>".printGame($field)."</tr>";
            echo "</table>";
        ?>
        </div>
    </body>
</html>


