<?php
require 'functions.php';
if (isset($_POST['submit'])) {
  if (tambah($_POST) > 0) {
    echo "
      <script>
        alert('Data berhasil ditambahkan');
        document.location.href = 'index.php';
      </script>
    ";
  } else {
    echo "
      <script>
        alert('Data gagal ditambahkan');
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
  <title>Tambah Data Siswa</title>
</head>

<body>
  <h1>Tambah Data Siswa</h1>
  <ul>
    <form action="" method="post">
      <li>
        <label for="nama">Nama : </label>
        <input type="text" id="nama" name="nama" required>
      </li>
      <li>
        <label for="course">Course : </label>
        <input type="text" id="course" name="course" required>
      </li>
      <li>
        <label for="marks">Marks : </label>
        <input type="text" id="marks" name="marks" required>
      </li>
      <li>
        <label for="ket">Ket : </label>
        <input type="text" id="ket" name="ket" required>
      </li>
      <li>
        <button type="submit" name="submit">Tambah Data</button>
      </li>
    </form>
  </ul>
</body>

</html> 