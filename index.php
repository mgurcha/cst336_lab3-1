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
        $player = array('name' => 'Manjit', 'imgURL' => 'user_img/blue_bird.jpg', 'hand' => array(), 'points' => 0);
        
        $allPlayers = array(
            $player1,
            $player2,
            $player3,
            $player4,
            );
            
            function printGame($allPlayers){
                foreach ($allPlayers as $player) {
                    //echo "<img src= './img/cards/clubs/2.png'/>";
                    echo "<img src= '". $player['imgURL'] . "'/>";
                    echo $player['name'] . "<br/>";
                }
            }
            
        printGame($allPlayers);
        getImgURL(0);
                
                /*
                create array of 52 cards
                    //each card a associative array ==> suit, rank, imgURL, points
                shuffle array
                pop off one card a time to generate hand
                */
                
        function getImgURL($index){
                    
                    //get number 0 to 51
                    //return imgURL
                    
                    $suitIndex = floor ($index / 13);
                    echo "suitIndex: $suitIndex";
                    
                    // switch
                }
                
                function generateDeck(){
                    for($i=0; $i<51; $i++){
                        $card = array(
                            'imgURL' => ""
                            );
                    }
                    
                    
                }
                
                function getHand(){
                    
                }
        ?>
    </body>
</html>