<?php
$mark = "pass";
switch($mark){
    case "high mark":
        echo "Very Good";
    break;
    case "pass":
        echo "Good ";
        
    break;
    default:
    echo "Bad Mark";

}

$Num1 = 40;
$Num2 = 5;

echo $Num1 . $Num2;

$color = 1;
switch($color){
    case 1:
        echo "<style> body{
            background: pink;
            padding: 25%;
            color: white;

        } </style>";
    break;
    case 2:
        echo "<style> body{
            background: red;
        } </style>";
    break;

}

?>