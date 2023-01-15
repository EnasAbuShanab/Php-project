<?php
# indexed array
$fruit = array("Apple", "Orange", "Banana");
echo $fruit[2];

for ($counter=0; $counter<count($fruit); ++$counter){
    echo "<div>". $fruit[$counter]."</div>";
}

# foreach loop 
foreach ($fruit as $food){

    echo ".."."<div>". $food."</div>";
 }

# associative array
$Personal_info= ["name"=> "enas", "age"=>'24', 'city'=>'Amman'];
foreach ($Personal_info as $info){

    echo ".."."<div>". $info."</div>";
    
 }
foreach ($Personal_info as $info=>$data){

    echo ".."."<div>". $info.' : ' .$data."</div>";
    
}
  echo $Personal_info['age'];
?>