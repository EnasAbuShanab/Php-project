<?php

$counter = 0;
while($counter<=20){
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