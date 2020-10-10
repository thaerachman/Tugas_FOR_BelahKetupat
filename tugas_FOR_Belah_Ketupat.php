<?php

for( $a=9; $a>0; $a--){
    for($x=1; $x<=$a; $x++){
        echo "=";
    }for($a1=9; $a1>$a; $a1--){
        echo"*";
    }for($a2=9; $a2>$a; $a2--){
        echo"*";
    }echo"<br>";
}for($b=0; $b<=9; $b++){
    for($y=1; $y<=$b; $y++){
        echo"=";
    }for($b1=9; $b1>$b; $b1--){
        echo"*";
    }for($b2=9; $b2>$b; $b2--){
        echo"*";
    }echo"<br>";
}
?>