<?php


?>

<form method="get">

Number1 <input name="num1" type="number"/>
Number2 <input name="num2" type="number"/>

<button name="button" type="submit"> Send</button>

</form>
<?php
 if (isset($_POST['button'])){
   if ( $_POST['num1']==400 && $_POST['num2']==700){
      echo "<h1 style=\"color:blue\">  hello wael "."</h1>";
   }
    #echo "num1 :". $_POST['num1']."<br/> nume : <span style=\"color:red;\">".$_POST['num2']."</span>";
    
   

 }
?>