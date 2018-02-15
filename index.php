<!DOCTYPE html>
<html>
    <head>
        
    </head>
    
    <body>
        <?php
       // echo "<img src= './img/cards/clubs/2.png'/>";
        
        $player1 = array('name' => 'Judith', 'imgURL' =>'https://78.media.tumblr.com/513aaf30566f6308d379b9a76a71c458/tumblr_otox3fKZ9Y1s05s0mo1_500.png' , 'hand' => array(), 'points' => 0);
        $player2 = array('name' => 'Gabriel', 'imgURL' => 'user_img/german.png', 'hand' => array(), 'points' => 0);
        $player3 = array('name' => 'Irais', 'hand' => array(), 'points' => 0);
        $player = array('name' => 'ThePleb',  'hand' => array(), 'points' => 0);
        
        $allPlayers = array(
            $player1,
            $player2,
            $player3,
            $player,
            );
            
            function printGame($allPlayers){
                foreach ($allPlayers as $player) {
                    //echo "<img src= './img/cards/clubs/2.png'/>";
                    echo "<img src= '". $player['imgURL'] . "'/>";
                    echo $player['name'] . "<br/>";
                }
            }
            
        printGame($allPlayers);
        ?>
    </body>
</html>