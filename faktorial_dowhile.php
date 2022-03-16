<!DOCTYPE html>
<html>
<body>

<?php
function faktorial($num)
{
$faktorial = 1;
do {
  $faktorial *= $num;
  $num = $num - 1;
} while ($num > 0);
echo $faktorial;
}
faktorial(7)
?>
</body>
</html>