<!DOCTYPE html>
<html>
<body>

<?php
function pyrnum()
{
    $i=1; $j=5; $k=1;

    while($i <= 5 ) {
        $j=5; $k=1;

        while($j > $i){
            $j--;
        }
        while($k <= $i){
            echo $i;
            ++$k;

        }
        echo "<br>";
        $i++;
    }
}
    pyrnum()
?>
</body>
</html>