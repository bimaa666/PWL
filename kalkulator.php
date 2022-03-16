<!DOCTYPE html>
<html>
<head>
	<title>kalkulator</title>
</head>
<body>
	<?php 
	if(isset($_POST['hitung'])){
		$bil1 = $_POST['bil1'];
		$bil2 = $_POST['bil2'];
		$operasi = $_POST['operasi'];
		switch ($operasi) {
			case 'tambah':
				$hasil = $bil1+$bil2;
			break;
			case 'kurang':
				$hasil = $bil1-$bil2;
			break;
			case 'kali':
				$hasil = $bil1*$bil2;
			break;
			case 'bagi':
				$hasil = $bil1/$bil2;
			break;			
		}
	}
	?>
	<div class="kalkulator">
		<h2 class="judul">KALKULATOR</h2>
		<form method="post" action="kalkulator.php">			
			<input type="text" name="bil1" class="bil" autocomplete="off" placeholder="Bilangan Pertama"><br><br>
			<input type="text" name="bil2" class="bil" autocomplete="off" placeholder="Bilangan Kedua"><br><br>
            <?php if(isset($_POST['hitung'])){ ?>
			<input type="text" value="<?php echo $hasil; ?>" class="bil">
		    <?php }else{ ?>
			<input type="text" class="bil" placeholder="hasil">
		    <?php } ?><br><br>
            <?php
            echo "operator";
            ?>
            <select class="opt" name="operasi">
				<option value="tambah">tambah +</option>
				<option value="kurang">kurang -</option>
				<option value="kali">kali x</option>
				<option value="bagi">bagi /</option>
			</select>
			<input type="submit" name="hitung" value="Hitung" class="tombol">											
		</form>		
	</div>
</body>
</html>