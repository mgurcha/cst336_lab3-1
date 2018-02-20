<style>
	@import url(css/styles.css); 
</style>

<?php
    include 'functions.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <h2>
            Lab 3: SilverJack Card Game
        </h2>
        
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
            <input type="submit" value="Play Again!"/>
        </form>
    </body>
</html>


