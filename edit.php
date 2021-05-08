<?php
require 'functions.php';

// Ambil Data dari ID
$id = $_GET['id'];

// Query Data dari ID
$siswa = query("SELECT * FROM siswa WHERE id = $id")[0];

if (isset($_POST['submit'])) {
  if (ubah($_POST) > 0) {
    echo "
      <script>
        alert('Data berhasil diubah');
        document.location.href = 'index.php';
      </script>
    ";
  } else {
    echo "
      <script>
        alert('Data gagal diubah');
        document.location.href = 'index.php';
      </script>
    ";
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ubah Data Siswa</title>
</head>

<body>
  <h1>Ubah Data Siswa</h1>
  <ul>
    <form action="" method="post">
      <input type="hidden" name="id" value="<?= $siswa['id'] ?>">
      <li>
        <label for="nama">Nama : </label>
        <input type="text" id="nama" name="nama" required value="<?= $siswa['nama'] ?>">
      </li>
      <li>
        <label for="course">Course : </label>
        <input type="text" id="course" name="course" required value="<?= $siswa['course'] ?>">
      </li>
      <li>
        <label for="marks">Marks : </label>
        <input type="text" id="marks" name="marks" required value="<?= $siswa['marks'] ?>">
      </li>
      <li>
        <label for="ket">Ket : </label>
        <input type="text" id="ket" name="ket" required value="<?= $siswa['ket'] ?>">
      </li>
      <li>
        <button type="submit" name="submit">Ubah Data</button>
      </li>
    </form>
  </ul>
</body>

</html> 