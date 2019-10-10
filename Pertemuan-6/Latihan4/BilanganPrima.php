<?php  
$a = 37;

for ( $i=1; $i<=$a; $i++) {
    $count = 0;
    for($j=1; $j<=$i; $j++){
        if(($i % $j)==0){
            $count++;
        }
    }
    if($count==2){
        echo $i." , ";
    }
}
?>  