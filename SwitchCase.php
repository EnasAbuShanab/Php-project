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