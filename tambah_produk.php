<?php
  include('koneksi.php'); 
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Produk</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
      <center>
        <h1>Tambah Produk</h1>
      <center>
      <form method="POST" action="proses_tambah.php" enctype="multipart/form-data" >
      <section class="base">
        <div>
          <label>Nama Produk</label>
          <input type="text" name="nama_produk"/>
        </div>
        <div>
          <label>Deskripsi</label>
         <input type="text" name="deskripsi"/>
        </div>
        <div>
          <label>Harga Beli</label>
         <input type="number" name="harga_beli"/>
        </div>
        <div>
          <label>Harga Jual</label>
         <input type="number" name="harga_jual"/>
        </div>
        <div>
         <button type="submit">Simpan Produk</button>
        </div>
        </section>
      </form>
  </body>
</html>