
<?php
include "konek.php";
if(isset($_POST['simpan'])) {
	$periode_sepatu= $_POST['periode_sepatu'];
	$jumlah_sepatu = $_POST['jumlah_sepatu'];
	$sql = mysqli_query($konek_forecasting, "INSERT INTO sepatu VALUES (null, '$periode_sepatu', '$jumlah_sepatu')") or die (mysqli_error($konek_forecasting));
	if($sql) {
		echo "<script>alert('Data Sepatu Berhasil di simpan!!!'); window.location='./';</script>";
	}
}
?>