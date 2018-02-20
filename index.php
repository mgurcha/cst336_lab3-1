<?php
    include 'functions.php';
?>
<!DOCTYPE html>
<html>
    <head>
        
    </head>
    
    <body>
        <?php
            for($i =0; $i< 5;$i++){
                
                generateCard($field[0]);
                generateCard($field[1]);
                generateCard($field[2]);
                generateCard($field[3]);
            }
            
            printGame($field);
        ?>
    </body>
</html>


