<?php
    include 'functions.php';
?>
<!DOCTYPE html>
<html>
    <head>
        
    </head>
    
    <body>
        <?php
            for($i = 0; $i < 4; $i++){
                generateCard($field[0]);
            }
            printGame($field);
        ?>
    </body>
</html>


