<html>
<head><title>Form</title></head>
	<body>
		<form action="prosform.php" method="post" 
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
