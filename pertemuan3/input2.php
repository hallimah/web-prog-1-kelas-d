<form action ="input2.php" method ="get">
masukkan angka
<input type="text" name="nilai"><br>
<input type="submit" value="proses">
</form>

<?php
if (array_key_exists("nilai", $_GET)) {
	if($_GET["nilai"]>0 &&
		$_GET["nilai"]<= 25) {
			echo "NIlai kamu E";
		}
}else if($_GET["nilai"]>25 &&
		$_GET["nilai"]<= 50) {
			echo "Nilai Kamu D";
		}
		else if($_GET["nilai"]>50 &&
		$_GET["nilai"]<= 65) {
			echo "Nilai Kamu C";
		}
		else if($_GET["nilai"]>65 &&
		$_GET["nilai"]<= 80) {
			echo "Nilai Kamu B";
		}
		else if($_GET["nilai"]>80 &&
		$_GET["nilai"]<= 100) {
			echo "Nilai Kamu A";
		}
		
	else{
		echo "Kalau masukin nilai yang benar";
	}
?>