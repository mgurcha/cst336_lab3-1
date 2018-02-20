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
        //echo "<img src= './img/cards/clubs/2.png'/>";
            echo "<h3 id='name'>". $player['name'] . "</h3>";
            echo "<img id='people' align='left' src='".$player['imgURL']."'/>";
            // echo $player['name'] . "<br/> <br />";
            echo "<h3 id='points'>".$player['points']."</h3>";
            displayHand($player);
        }
        getWinner($allPlayers);
    }
    
    function displayHand(&$player){
        for($i = 0; $i < count($player['hand']);$i++){
            echo "<img id='cards' src=" .$player['hand'][$i] . " />";
        }
        
    }
    
    function dealHand(&$player, &$cards){
        if($player['points'] <= 36){
            generateCard($player, $cards);
            dealHand($player, $cards);
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
            
            
        }while ($cards[$cardpath] == 1);

        $player['points'] += $temp;
        $cards[$cardpath] = 1;
        array_push($player["hand"], $cardpath);
    }


    function getWinner($field){
        
        foreach($field as $player){
            if($player['points'] == 42){
                echo $player['name'] . " Wins!";
            }
        }
            
       // echo $player1['points'];
    }

?>