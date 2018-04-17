<style>
	@import url(css/styles.css); 
</style>

<?php
    include 'functions.php';
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <h1 id="title">
            SilverJack Card Game
        </h1>
        <br />
    </head>
    
    <body>

        <div id="wrapper">
        <?php
            if(!isset($_SESSION['times'])){
                $_SESSION['times'] = array();
            }
            
            $time_start = microtime(true);
            for($i = 0; $i < 4; $i++){
                dealHand($field[$i], $$cards);
            }
            $time_end = microtime(true);
            array_push($_SESSION['times'], $time_end - $time_start);
            
            
            echo printGame($field);
            // echo count($_SESSION['times']);
            echo '<br>';
            
             if(count($_SESSION['times']) >= 10){
                $total = 0;
                for($i = count($_SESSION['times']) - 11; $i < count($_SESSION['times']); $i++){
                    $total += $_SESSION['times'][$i];
                }
                // echo $total / 10;
            }
            
            if(count($_SESSION['times']) == 10){
                session_destroy();
            }
            
        ?>
        </div>
        
        <form>
          <input type="submit" value=" Play Again! " /> 
          
        </form>
           
    </body>

</html>


