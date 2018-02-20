<?php
    
    $cards = array();
    $player1 = array('name' => 'Judith', 'imgURL' =>'https://78.media.tumblr.com/513aaf30566f6308d379b9a76a71c458/tumblr_otox3fKZ9Y1s05s0mo1_500.png' , 'hand' => array(), 'points' => 0);
    $player2 = array('name' => 'Gabriel', 'imgURL' => 'user_img/german.png', 'hand' => array(), 'points' => 0);
    $player3 = array('name' => 'Marco', 'imgURL' => 'user_img/marco.jpg','hand' => array(), 'points' => 0);
    $player4 = array('name' => 'Manjit', 'imgURL' => 'user_img/blue_bird.jpg', 'hand' => array(), 'points' => 0);
    $field = array(
        $player1,
        $player2,
        $player3,
        $player4
    );
    
    function printGame($allPlayers){
        foreach ($allPlayers as $player) {
            echo "<div>";
            echo "<img src='".$player['imgURL']."' width='200' height='250'/>";
            displayHand($player);
            echo $player['name'] . "<br/> <br />";
            echo "</div>";
        }
    }
    
    function displayHand(&$player){
        
        for($i = 0; $i < count($player['hand']);$i++){
            echo "<img src=" .$player['hand'][$i] . " />";
        }
    }
    
    function generateCard(&$player, &$cards){
        $temp = 0;
        $cardpath = "";
        
        do{
            $num = rand(1, 13);
            $suit = rand(1, 4);
            $temp = $num;
            switch ($suit) {
            case '1':
                $cardpath = "img/cards/clubs/" . "$num" . ".png";
                break;
            case '2':
                 $cardpath = "img/cards/diamonds/" . "$num" . ".png";
                break;
            case '3':
                 $cardpath = "img/cards/hearts/" . "$num" . ".png";
                break;
            case '4':
                 $cardpath = "img/cards/spades/" . "$num" . ".png";
                break;
            }   
          
        }while($cards[$cardpath] != null);
        
        $cards[$cardpath] = 1;
        array_push($player["hand"], $cardpath);
    }
    
?>