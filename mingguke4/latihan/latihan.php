<html>
<head><title>Form</title></head>
	<body>
		<form action="" method="post" 
name="input">
<style>
table {
  border-collapse: collapse;
  width: 100%;
}
td, th {
  border: 2px solid #eeee;
  text-align: left;
  padding: 8px;
}
</style>
</head>
<body>
<h2>NILAI MAHASISWA </h2>
<table>
  </tr>
  <tr>
    <td>NIM</td>
    <td><input type="text" name="nim" value="Disikan manual"></td>
  </tr>
  <tr>
    <td>Program Studi</td>
    <td>
	<select name="progam" >
		<option value=>Pilih Data</option>
		<option value="Teknik Informatika S1">A11</option>
		<option value="Sistem Informasi S1">A12</option>
		<option value="Teknik Informatika D3">A22</option>
	</select>
	</td>
  </tr>
  <tr>
    <td>Nilai Tugas</td>
    <td><input type="number_format" name="tugas" value="angka maksimal 100"></td>
  </tr>
  <tr>
    <td>Nilai UTS</td>
    <td><input type="number_format" name="uts" value="angka maksimal 100"></td>
  </tr>
  <tr>
    <td>Nilai UAS</td>
    <td><input type="number_format" name="uas" value="angka maksimal 100"></td>
  </tr>
  <tr>
    <td>Catatan Khusus</td>
    <td>
	<input type="checkbox" name="catatan1" value="Kehadiran >= 70 %" checked> Kehadiran >= 70 %<br>
	<input type="checkbox" name="catatan2" value="Interaktif dikelas"> Interaktif dikelas<br>
	<input type="checkbox" name="catatan3" value="Tidak terlambat mengumpulkan tugas">Tidak terlambat mengumpulkan tugas<br>
	</td>
  </tr>
  <tr>
    <td> </td>
    <td><input type="submit" name="Input" value="SIMPAN">
	</tr>
</table>
</html>

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