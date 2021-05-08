<?php
require 'functions.php';
$siswa = query("SELECT * FROM siswa");

// Kondisi ketika Tombol search di klik
if (isset($_GET['cari'])) {
    $keyword = $_GET['keyword'];
    $siswa = cari($keyword);
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Siswa</title>
</head>

<body>
  <h1>Daftar Siswa</h1>
  <a href="insert.php">Tambah Data Siswa</a>
  <br><br>
  <form action="" method="get">
    <input type="text" name="keyword" size="40" placeholder="Masukkan Keyword pencarian..">
    <button type="submit" name="cari">Cari!</button>
  </form>
  <table border="1" cellpadding="10" cellspacing="3">
    <tr>
      <th>Id</th>
      <th>Aksi</th>
      <th>Nama</th>
      <th>Course</th>
      <th>Marks</th>
      <th>Ket</th>
    </tr>
    <?php $i = 1; ?>
    <?php foreach ($siswa as $sw) : ?>
      <tr>
        <td><?= $i++ ?></td>
        <td>
          <a href="edit.php?id=<?= $sw['id']; ?>">Ubah</a> ||
          <a href="delete.php?id=<?= $sw['id']; ?>">Hapus</a>
        </td>
        <td><?= $sw['nama'] ?></td>
        <td><?= $sw['course'] ?></td>
        <td><?= $sw['marks'] ?></td>
        <td><?= $sw['ket'] ?></td>
      </tr>
        <?php endforeach ?>
  </table>
</body>

</html> 