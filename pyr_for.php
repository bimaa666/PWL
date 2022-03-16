<!DOCTYPE html>
<html>
<body>

<?php
function pyrnum($n)
{
    $num = 1;
    for ($i = 0; $i < $n; $i++)
    {
        for ($j = 0; $j <= $i; $j++)
        {
            echo $num." ";
        }
            $num = $num + 1;
        echo "<br>";
    }
}
    $n = 5;
    pyrnum($n);
  
?>
</body>
</html>