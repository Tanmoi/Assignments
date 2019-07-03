<?php
$sum = 0;
$i=1;
while ($i<=100){
    for($i=0;$i<=100;$i++){
$sum = $sum + $i; 
echo $i++."<br/>";
  
    }
}
echo "sum = $sum <br>";
?>