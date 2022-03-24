
<?php
if (isset($_POST['Input'])) {
	$nim = $_POST['nim'];
	$progam = $_POST['progam'];
	$tugas = $_POST['tugas'];
	$uts = $_POST['uts'];
	$uas = $_POST['uas'];
	//$catatan = $_POST['catatan'];
	$nilaiakhir = 0.4*$_POST['tugas']+0.3*$_POST['uts']+0.3*$_POST['uas'];
}
?>

<html>
<head>
<style>
table {
  border-collapse: collapse;
  width: 60%;
}
td, th {
  border: 2px solid #eeee;
  text-align: left;
  padding: 8px;
}
tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>
<h2>HASIL NILAI</h2>
<table style="width:80%">
  <tr>
    <th>Program Studi</th>
    <th>NIM</th> 
    <th>Nilai Akhir</th>
    <th>STATUS</th>
    <th>Catatan Khusus</th>	
  </tr>
  <tr>
    <td>
	<?php
	echo $progam;
	?>
	</td>
	<td>
	<?php
	echo $nim;
	?>
	</td>
	<td>
	<?php
	echo $nilaiakhir;
	?>
	</td>
	<td>
	<?php
	if ($nilaiakhir > 60){
		echo "LULUS";
	}
	else {
		echo "TIDAK LULUS";
	}
	?>
	</td>
	<td>
	<?php
	if (isset($_POST['catatan1'])) {
		echo "+ " . $_POST['catatan1'] . "<br>";
	}
	if (isset($_POST['catatan2'])) {
		echo "+ " . $_POST['catatan2'] . "<br>";
	}
	if (isset($_POST['catatan3'])) {
		echo "+ " . $_POST['catatan3'] . "<br>";
	}
?>
	</td>
  </tr>
</table>
</html>
