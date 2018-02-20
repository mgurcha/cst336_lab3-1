<?php
     $player1 = array('name' => 'Judith', 'imgURL' =>'https://78.media.tumblr.com/513aaf30566f6308d379b9a76a71c458/tumblr_otox3fKZ9Y1s05s0mo1_500.png' , 'hand' => array(), 'points' => 0);
    //$cards = array();
    $player2 = array('name' => 'Gabriel', 'imgURL' => 'user_img/german.png', 'hand' => array(), 'points' => 0);
     $player3 = array('name' => 'Marco', 'imgURL' => 'user_img/marco.jpg','hand' => array(), 'points' => 0);
    $player4 = array('name' => 'Manjit', 'imgURL' => 'user_img/blue_bird.jpg', 'hand' => array(), 'points' => 0);
    $field = array($player2,$player1,$player3, $player4);

    function play(){
        if(count(['player1']['cards']) == 0){
            for($i = 0; $i < 2; $i++){
                generateCard(['player1']);
            }
            for($i = 0; $i < 2; $i++){
                generateCard(['player2']);
            }
        }
    }
    echo "<table>";
    function printGame($allPlayers){
        // echo "<tr>";
        foreach ($allPlayers as $player) {
        //echo "<img src= './img/cards/clubs/2.png'/>";
            echo "<tr>"."<img id='people' src='".$player['imgURL']."'/>"."</tr>";
            echo $player['name'] . "<br/> <br />";
            echo $player['points'];
            displayHand($player);
        }
        //getWinner($player1, $player2,$player3, $player4);
    }
    
    function displayHand(&$player){
        echo "<td>";
        for($i = 0; $i < count($player['hand']);$i++){
            echo "<img src=" .$player['hand'][$i] . " />";
        }
        
    }
    echo "</td>";
    echo "</tr>";
    echo "</table>";
    
    function generateCard(&$player){
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
          $player['points'] += $temp;
          
        }while ($cards[$cardpath] == 1);
        
        
        
        /* USED TO KEEP SCORE
        if($temp != 1){
            $temp = 10;
        }
        else{
            $temp = 11;
        }
        
        if($temp == 11 && $player["total"] + $temp > 21){
            $player["total"]++;
        }
        else {
            $player["total"] + $temp;
        }*/
        
        $cards[$cardpath] = 1;
        array_push($player["hand"], $cardpath);
    }
    function getWinner($player1, $player2,$player3, $player4){
        
        $smallest = 42 - $player1['points'];
        $two = 42 - $player2['points'];
        $three = 42 -$player3['points'];
        $four = 42 - $player4['points'];
        
        
        if(($two < $smallest) && $two >= 0)
            $smallest = $two;
        if(($three < $smallest) && $three >= 0)
            $smallest = $three;
        if(($four < $smallest) && $four >= 0)
            $smallest = $four;
            
        echo $player1['points'];
    }
   
?>