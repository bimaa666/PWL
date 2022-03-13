<!DOCTYPE html>
<html>
<body>

<?php
$nim = "A11.2020.80002";
$nama = 'Bima';
$umur = 22;
$nilai = 90;
$status = false;
echo "NIM : " . $nim . "<br>";
echo "Nama : $nama<br>";
print "Umur : " . $umur; print "<br>";
printf ("Nilai : %.3f<br>", $nilai);
if ($status)
echo "Status : Aktif";
else
echo "Status : Tidak Aktif";
?>
</body>
</html>