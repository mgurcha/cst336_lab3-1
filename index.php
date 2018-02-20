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
                for($j = 0; $j < 4; $j++){
                    generateCard($field[$i], $cards);
                }
            }
            printGame($field);
        ?>
    </body>
</html>


