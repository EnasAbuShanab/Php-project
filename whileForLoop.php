<?php

$counter = 0;
while($counter<=20){
    if ($counter==7 || $counter==17){
        ++$counter;
        continue;
    }
   $result=$counter*2;
    echo "<h4>Round . $counter . $counter * 2 = $result</h4>";
    echo "<style> body{
        background: purple;
        padding-left: 25%;
            color: yellow;
    }</style>";

    ++$counter; #add 1 every round
    
}



for($counter = 20; $counter>=0; --$counter){

    if ($counter==7 ){
        break;
    }

    $result=$counter*2;
    echo "<h4>Round . $counter . $counter * 2 = $result</h4>";
    
}

//do while loop 

$countere= 1;
do{
     
    
    echo "<h4> it's DONE $countere </h4>";

++$countere;

} while($countere<=10);

?>