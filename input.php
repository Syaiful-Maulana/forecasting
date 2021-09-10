<html>
<head>
<title>Aplikasi Data Sepatu Nike Perbulan</title>
<link href="style.css?version=<?php echo fileatime('main.css'); ?>" rel="stylesheet">
</head>
<style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
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
	<div>
<form action="simpan.php" method="post">
    <label for="input">Input Data Sepatu</label>
    <input type="text" id="jumlah_sepatu" name="jumlah_sepatu" placeholder="Jumlah Sepatu">

        <label for="periode sepatu">Periode Sepatu</label>
    <select id="periode_sepatu" name="periode_sepatu">
      <option value="">----Masukan Bulan periode----</option>
      <option value="Januari">Januari</option>
      <option value="Febuari">Februari</option>
      <option value="Maret">Maret</option>
      <option value="April">April</option>
      <option value="Mei">Mei</option>
      <option value="Juni">Juni</option>
      <option value="Juli">Juli</option>
      <option value="Agustus">Agustus</option>
      <option value="September">September</option>
      <option value="Oktober">Oktober</option>
      <option value="November">November</option>
      <option value="Desember">Desember</option>
    </select>

    <input type="submit" name="simpan" value="Simpan">
</div>
   </body>
   </html>