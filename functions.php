<?php
    
    $cards = array();
    $player1 = array('name' => 'Judith', 'imgURL' =>'user_img/cat.png' , 'hand' => array(), 'points' => 0);
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
            echo "<img id='people' align='left' src='".$player['imgURL']."'/>". "<h3 id='name'>".$player['name'] .displayHand($player)."</h3>"
            ."<h3 id='points'>".$player['points']."</h3>";
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
        
        
        $one = 42 - $player1['points'];
        $two = 42 -$player2['points'];
        $three = 42 - $player3['points'];
        $four = 42 - $player4['points'];
        
        if($one >= 0){
            $smallest = $one;
        }
        
        if($two < $smallest && $two >= 0 ){
            $two = $smallest;
        }
        if($three < $smallest && $three >= 0 ){
            $three = $smallest;
        }
        if($four < $smallest && $four >= 0 ){
            $four = $smallest;
        }
        
        
        
            
     
    }

?>