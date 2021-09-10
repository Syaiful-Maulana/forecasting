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

<form action="tampil.php" method="post">
Peramalan Penjualan Sepatu Untuk
<select name="bulan" required>
<?php
				for ($i = 1; $i <= 10; $i++) {
					echo "<option value='$i'>$i</option>";
				}
				?>
</select>
Bulan Selanjutnya
<input type="submit" name="prediksi" value="Prediksi">
</form>
</body>
</html>