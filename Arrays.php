<?php

$fruit = array("Apple", "Orange", "Banana");
echo $fruit[2];

for ($counter=0; $counter<count($fruit); ++$counter){
    echo "<div>". $fruit[$counter]."</div>";
}

foreach ($fruit as $food){

    echo ".."."<div>". $food."</div>";
 }


?>