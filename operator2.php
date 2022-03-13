<!DOCTYPE html>
<html>
<body>

<?php
$a = 5;
$b = 9;
echo "$a == $b : ". ($a == $b);
echo "<br>$a != $b : ". ($a != $b);
echo "<br>$a > $b : ". ($a > $b);
echo "<br>$a < $b : ". ($a < $b);
echo "<br>($a == $b) && ($a > $b) : ".(($a != $b) && ($a > $b));
echo "<br>($a == $b) || ($a > $b) : ".(($a != $b) || ($a > $b));
?>



</body>
</html>