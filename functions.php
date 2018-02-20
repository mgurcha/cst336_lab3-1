<?php
    global $player1 = array('name' => 'Judith', 'imgURL' =>'https://78.media.tumblr.com/513aaf30566f6308d379b9a76a71c458/tumblr_otox3fKZ9Y1s05s0mo1_500.png' , 'hand' => array(), 'points' => 0);
    // global $player2 = array('name' => 'Gabriel', 'imgURL' => 'user_img/german.png', 'hand' => array(), 'points' => 0);
    // global $player3 = array('name' => 'Marco', 'imgURL => user_img/marco.jpg','hand' => array(), 'points' => 0);
    // global $player = array('name' => 'Manjit', 'imgURL' => 'user_img/blue_bird.jpg', 'hand' => array(), 'points' => 0);
    global $field = array{
        $player1,
        $player2,
        $player3,
        $player4,
    };
      
      
    
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
    
    function displayHand(&$player){
        echo "<div>";
        for($i = 0; $i < count($player['hand']);$i++){
            echo "<img src=" .$player['hand'][$i] . " />";
        }
        echo "</div>";
    }
    
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
          
        }while ($cards[$cardpath] == 1);
        
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
        }
        
        $_SESSION['cards'][$cardpath] = 1;
        array_push($player["cards"], $cardpath);
    }
    
?>