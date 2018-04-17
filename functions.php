<?php
    
    $cards = array();
    $player1 = array('name' => 'Judith', 'imgURL' =>'user_img/cat.png' , 'hand' => array(), 'points' => 0);
    $player2 = array('name' => 'Gabriel', 'imgURL' => 'user_img/gabe_pic.jpg', 'hand' => array(), 'points' => 0);
    $player3 = array('name' => 'Marco', 'imgURL' => 'user_img/marco.jpg','hand' => array(), 'points' => 0);
    $player4 = array('name' => 'Manjit', 'imgURL' => 'user_img/blue_bird.jpg', 'hand' => array(), 'points' => 0);
    
    $field = array(
        $player1,
        $player2,
        $player3,
        $player4
    );

    shuffle($field);

    function printGame($allPlayers){
        foreach ($allPlayers as $player) {
            echo "<img id='people' align='left' src='".$player['imgURL']."'/>". "<h3 id='name'>".$player['name'] .displayHand($player)."</h3>"
            ."<div class='points'"."<h3 id='points_num'>".$player['points']."</h3>"."</div>";
        }
         getWinner($allPlayers);
    }
    
    function displayHand(&$player){
        for($i = 0; $i < count($player['hand']);$i++){
            echo "<img id='cards' src=" .$player['hand'][$i] . " />";
        }
        
    }
    
    function dealHand(&$player, &$cards){
        if($player['points'] < 42){
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
    function cmp($a, $b){
          if($a['points'] < $b['points']){
              return 1;
           }
          return 0;
        }
          
        


    function getWinner(&$field){
        
        $winners = array();
        $winningEndPoints += $player['points'];
        
        usort($field, cmp);
        
        foreach($field as $player){
            $winningEndPoints += $player['points'];
            if(count($winners) == 0 && $player['points'] <= 42){
                array_push($winners,$player);
                
            }
            else if($player['points'] <= 42){
                if($winners[0]['points'] == $player['points']){
                    array_push($winners, $player);
                    
                }
                 else if($winners[0] < $player['points']){
                     $winners = array();
                     array_push($winners, $player);
                     
                 }
            }
        }
        
        $winningEndPoints -=$winners[0]['points'];
        
        echo "<div id='result'>";
        if(count($winners) == 1){
            echo "<h3 id='winner'>" . $winners[0]['name'] . " Wins " . $winningEndPoints. " Points!" . "</h3>";
        }
        elseif(count($winners)== 0){
            echo "<h3 id='winner'>" ."No one wins." . "</h3>";
        }
        else{
            $fn = "Its a Tie!<br/> ";
            for($i = 0; $i < count($winners); $i++){
                $fn =  $fn . $winners[$i]['name'];
                $fn =  $fn . ", ";
            }
            echo "<h3 id='winner'>" . $fn . " Win!" . "</h3>";
        }
        echo "</div>";
        
        
    

}
?>
