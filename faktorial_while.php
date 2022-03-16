<!DOCTYPE html>
<html>
<body>
	
<?php
function faktorial($num)
{
	$x = 1;
	$faktorial = 1;
	 while($x <= $num){
		 $faktorial = $faktorial * $x;
		 $x = $x + 1;
	 }
	  return $faktorial;
}
echo faktorial(7);
?>
</body>
</html>