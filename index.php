<style>
	@import url(css/styles.css); 
</style>

<?php
    include 'functions.php';
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
            
            for($i = 0; $i < 4; $i++){
                dealHand($field[$i], $$cards);
            }
            
            echo printGame($field);
        ?>
        </div>
        
        <form>
          <input type="submit" value=" Play Again! " /> 
          
        </form>
           
    </body>

</html>


