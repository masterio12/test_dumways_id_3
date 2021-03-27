<html>
<head>
  <title>PERPUSTAKAAN</title>
</head>
<body>
  <h1>Buku Perpustakaan</h1>
  <h2>MOTIFASI</h2>
  <a href="form_simpan.php">Tambah Data</a><br><br>
  <table border="1" width="100%">
  <tr>
    <th>Foto</th> 
    <th>Buku</th>
    <th>stok</th>
    <th>colspan="2">tambah/kurang stok </th>
    <th>keterangan</th>  
    <th colspan="2">Aksi</th>
  </tr>
  <?php
  // Load file koneksi.php
  include "koneksi.php";
  // Buat query untuk menampilkan semua data
  $sql = $pdo->prepare("SELECT image,name,stok,deskripsi FROM books WHERE cateory_id = 1");
  $sql->execute(); // Eksekusi querynya
  while($data = $sql->fetch()){ // Ambil semua data dari hasil eksekusi $sql
    echo "<tr>";
    echo "<td><img src='images/".$data['foto']."' width='300' height='450'></td>";
    echo "<td>".$data['name']."</td>";
    echo "<td>".$data['stok']."</td>";
    echo "<td><a href='form_ubah.php?id=".$data['id']."'>tambah</a></td>";
    echo "<td><a href='proses_hapus.php?id=".$data['id']."'>kurang</a></td>";
    echo "</tr>";
    echo "<td>".$data['deskripsi']."</td>";
    echo "<td><a href='form_ubah.php?id=".$data['id']."'>Ubah</a></td>";
    echo "<td><a href='proses_hapus.php?id=".$data['id']."'>Hapus</a></td>";
    echo "</tr>";




<h2>MISTERY</h2>
  <a href="form_simpan.php">Tambah Data</a><br><br>
  <table border="1" width="100%">
  <tr>
    <th>Foto</th> 
    <th>Buku</th>
    <th>stok</th>
    <th>colspan="2">tambah/kurang stok </th>
    <th>keterangan</th>  
    <th colspan="2">Aksi</th>
  </tr>
  <?php
  // Load file koneksi.php
  include "koneksi.php";
  // Buat query untuk menampilkan semua data
  $sql = $pdo->prepare("SELECT image,name,stok,deskripsi FROM books WHERE cateory_id = 2");
  $sql->execute(); // Eksekusi querynya
  while($data = $sql->fetch()){ // Ambil semua data dari hasil eksekusi $sql
    echo "<tr>";
    echo "<td><img src='images/".$data['foto']."' width='300' height='450'></td>";
    echo "<td>".$data['name']."</td>";
    echo "<td>".$data['stok']."</td>";
    echo "<td><a href='form_ubah.php?id=".$data['id']."'>tambah</a></td>";
    echo "<td><a href='proses_hapus.php?id=".$data['id']."'>kurang</a></td>";
    echo "</tr>";
    echo "<td>".$data['deskripsi']."</td>";
    echo "<td><a href='form_ubah.php?id=".$data['id']."'>Ubah</a></td>";
    echo "<td><a href='proses_hapus.php?id=".$data['id']."'>Hapus</a></td>";
    echo "</tr>";




<h2>KUMPULAN CERITA</h2>
  <a href="form_simpan.php">Tambah Data</a><br><br>
  <table border="1" width="100%">
  <tr>
    <th>Foto</th> 
    <th>Buku</th>
    <th>stok</th>
    <th>colspan="2">tambah/kurang stok </th>
    <th>keterangan</th>  
    <th colspan="2">Aksi</th>
  </tr>
  <?php
  // Load file koneksi.php
  include "koneksi.php";
  // Buat query untuk menampilkan semua data
  $sql = $pdo->prepare("SELECT image,name,stok,deskripsi FROM books WHERE cateory_id = 3");
  $sql->execute(); // Eksekusi querynya
  while($data = $sql->fetch()){ // Ambil semua data dari hasil eksekusi $sql
    echo "<tr>";
    echo "<td><img src='images/".$data['foto']."' width='300' height='450'></td>";
    echo "<td>".$data['name']."</td>";
    echo "<td>".$data['stok']."</td>";
    echo "<td><a href='form_ubah.php?id=".$data['id']."'>tambah</a></td>";
    echo "<td><a href='proses_hapus.php?id=".$data['id']."'>kurang</a></td>";
    echo "</tr>";
    echo "<td>".$data['deskripsi']."</td>";
    echo "<td><a href='form_ubah.php?id=".$data['id']."'>Ubah</a></td>";
    echo "<td><a href='proses_hapus.php?id=".$data['id']."'>Hapus</a></td>";
    echo "</tr>";





<h2>CODING</h2>
  <a href="form_simpan.php">Tambah Data</a><br><br>
  <table border="1" width="100%">
  <tr>
    <th>Foto</th> 
    <th>Buku</th>
    <th>stok</th>
    <th>colspan="2">tambah/kurang stok </th>
    <th>keterangan</th>  
    <th colspan="2">Aksi</th>
  </tr>
  <?php
  // Load file koneksi.php
  include "koneksi.php";
  // Buat query untuk menampilkan semua data
  $sql = $pdo->prepare("SELECT image,name,stok,deskripsi FROM books WHERE cateory_id = 4");
  $sql->execute(); // Eksekusi querynya
  while($data = $sql->fetch()){ // Ambil semua data dari hasil eksekusi $sql
    echo "<tr>";
    echo "<td><img src='images/".$data['foto']."' width='300' height='450'></td>";
    echo "<td>".$data['name']."</td>";
    echo "<td>".$data['stok']."</td>";
    echo "<td><a href='form_ubah.php?id=".$data['id']."'>tambah</a></td>";
    echo "<td><a href='proses_hapus.php?id=".$data['id']."'>kurang</a></td>";
    echo "</tr>";
    echo "<td>".$data['deskripsi']."</td>";
    echo "<td><a href='form_ubah.php?id=".$data['id']."'>Ubah</a></td>";
    echo "<td><a href='proses_hapus.php?id=".$data['id']."'>Hapus</a></td>";
    echo "</tr>";





<h2>COMEDY</h2>
  <a href="form_simpan.php">Tambah Data</a><br><br>
  <table border="1" width="100%">
  <tr>
    <th>Foto</th> 
    <th>Buku</th>
    <th>stok</th>
    <th>colspan="2">tambah/kurang stok </th>
    <th>keterangan</th>  
    <th colspan="2">Aksi</th>
  </tr>
  <?php
  // Load file koneksi.php
  include "koneksi.php";
  // Buat query untuk menampilkan semua data
  $sql = $pdo->prepare("SELECT image,name,stok,deskripsi FROM books WHERE cateory_id = 5");
  $sql->execute(); // Eksekusi querynya
  while($data = $sql->fetch()){ // Ambil semua data dari hasil eksekusi $sql
    echo "<tr>";
    echo "<td><img src='images/".$data['foto']."' width='300' height='450'></td>";
    echo "<td>".$data['name']."</td>";
    echo "<td>".$data['stok']."</td>";
    echo "<td><a href='form_ubah.php?id=".$data['id']."'>tambah</a></td>";
    echo "<td><a href='proses_hapus.php?id=".$data['id']."'>kurang</a></td>";
    echo "</tr>";
    echo "<td>".$data['deskripsi']."</td>";
    echo "<td><a href='form_ubah.php?id=".$data['id']."'>Ubah</a></td>";
    echo "<td><a href='proses_hapus.php?id=".$data['id']."'>Hapus</a></td>";
    echo "</tr>";

  }
  ?>
  </table>
</body>
</html>