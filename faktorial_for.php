<!DOCTYPE html>
<html>
<body>

<?php
function faktorial($num)  
{
  $faktorial = 1;  
  for ($x=$num; $x>=1; $x--)   
{  
  $faktorial = $faktorial * $x;  
}  
echo $faktorial;
}
faktorial(5)  
?>
</body>
</html>