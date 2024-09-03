<?php
    $d=array("-","-","-","-","-","-","-","-","-");
function xo(){
    global $d;
    $player="X";
    for($i=0;$i<count($d);$i++){
        if(move($player)==true){
            display();  
            if(winner($player)){
                return;
            }
            $player = $player=="X"?"O":"X";
        }
        else {
            echo "Invalid move";
            $i--;
        }
    }
    echo "match s draw";
}
function display(){
    global $d;
    for($i=0;$i<count($d);$i++){ 
        echo ("|");
        if(($i+1)%3==0){
           print_r ($d[$i]);
           echo "|";
           echo "\n";
        }else{
            print_r ($d[$i])."|";
        }
    }
}
function move($player){
    global $d;
     $a=readline();
    if($d[$a-1]=="-"){
       $d[$a-1]=$player;
       return true;
    }else{
        return false;
    }
}
function winner($player){
    global $d;
   if(  $d[0]==$player&&$d[1]==$player&&$d[2]==$player||
        $d[3]==$player&&$d[4]==$player&&$d[5]==$player||
        $d[6]==$player&&$d[7]==$player&&$d[8]==$player||
        $d[0]==$player&&$d[3]==$player&&$d[6]==$player||
        $d[1]==$player&&$d[4]==$player&&$d[7]==$player||
        $d[2]==$player&&$d[5]==$player&&$d[8]==$player||
        $d[0]==$player&&$d[4]==$player&&$d[8]==$player||
        $d[2]==$player&&$d[4]==$player&&$d[6]==$player){
            echo $player ."is winner";
            return true;
   }else{
     return false;
   }
}
xo();
?>

