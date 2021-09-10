
<?php include "konek.php"; ?>
<html>
<head>
<title>Aplikasi Data Sepatu Nike Perbulan</title>
 <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	<nav id="menu">
     <ul>
        <div id="heading">
       <h3>Input Data Prediksi Penjualan Sepatu Perbulan</h3>
        </div>
<li><a href="index.php">Home</a></li>
        <li><a href="input.php">Input Data</a></li>
        <li><a href="tampil.php">Tampil Data</a></li>
        <li><a href="prediksi.php">Prediksi Data</a></li>
</nav>
<table class="tb">
	<tr>
	<th>NO</th>
	<th>Bulan Periode</th>
	<th>Jumlah Sepatu</th>
	<th>X</th>
	<th>Y</th>
	<th>XX</th>
	<th>XY</th>
	</tr>
<?php
	$sql = mysqli_query($konek_forecasting, "SELECT * FROM sepatu") or die (mysqli_error($konek_forecasting));
	if (mysqli_num_rows($sql) > 0) {
		
		$x = 0;
			$jumlah_x = 0;
			$jumlah_y = 0;
			$jumlah_xx = 0;
			$jumlah_xy = 0;
	while ($data = mysqli_fetch_array($sql)) {
				$jumlah_x += $x;
				$jumlah_y += $data['jumlah_sepatu'];
				$jumlah_xx += ($x * $x);
				$jumlah_xy += ($x * $data['jumlah_sepatu']); 
				?>
					<tr>
					<td><?=$x+1;?>.</td>
					<td><?=$data['periode_sepatu'];?></td>
					<td align="center"><?=$data['jumlah_sepatu'];?></td>
					<td align="center"><?=$x;?></td>
					<td align="center"><?=$data['jumlah_sepatu'];?></td>
					<td align="center"><?=$x * $x;?></td>
					<td align="center"><?=$x * $data['jumlah_sepatu'];?></td>
				</tr>
					<?php
				$x++;
			}
			?>
			<tr>
				<td colspan="2">Jumlah</td>
				<td></td>
				<td><?=$jumlah_x;?></td>
				<td><?=$jumlah_y;?></td>
				<td><?=$jumlah_xx;?></td>
				<td><?=$jumlah_xy;?></td>
			</tr>
			<tr>
				<td colspan="2">Rata2</td>
				<td></td>
				<td>
					<?php
					$rata2_x = $jumlah_x / $x;
					echo $rata2_x;
					?>	
				</td>
				<td>
					<?php
					$rata2_y = $jumlah_y / $x;
					echo $rata2_y;
					?>	
				</td>
				<td colspan="2"></td>
			</tr>
			<tr>
				<td colspan="2">B1</td>
				<td colspan="5">
					<?php
					$b1 = ($jumlah_xy - (($jumlah_x * $jumlah_y) / $x)) / ($jumlah_xx - ($jumlah_x * $jumlah_x) / $x);
					echo $b1;
					?>
				</td>
			</tr>
			<tr>
				<td colspan="2">B0</td>
				<td colspan="5">
					<?php
					$b0 = $rata2_y - $b1 * $rata2_x;
					echo $b0;
					?>
				</td>
			</tr>
			<?php
		}
		?>
</table>

<div>
Rumus Regresi Linear :<br>y =
<?php
$y = $b0." + " .$b1." x";
echo $y;
?>
</div>

<?php
	if(isset($_POST['prediksi'])) {
		$bulan = $_POST['bulan'];
		$bln = ($x - 1) + $bulan;
		$prediksi = $b0 + ($b1 * $bln);
		?>
		<div>
			Prediksi PMB untuk <?=$bulan;?> Bulan berikutnya adalah <?=$prediksi;?>
		</div>
	<?php
	}
	?>


	<div>
		<a href="./">
			<button>Halaman Utama</button>
		</a>
	</div>
</body>
</html>