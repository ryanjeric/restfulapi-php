<?php
 function getUsers($findId){
     $names = [
        '0'=>"Jean Freeman",
        '1'=>"Norman Garza",
        '2'=>"Calvin Daniels",
        '3'=>"Chester Lucas",
        '4'=>"Monique Ball",
        '5' =>"Emilio James",
        '6'=>"Angel Fletcher",
        '7'=>"Stuart Shaw",
        '8'=>"Cecilia Jennings",
        '9'=>"Justin Reid"
     ];
     foreach($names as $key=>$val){
         if($key==$findId){
            return $val;
            break;
         }
     }
 }