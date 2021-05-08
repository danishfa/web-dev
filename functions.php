<?php
// Koneksi Database
$db = mysqli_connect("localhost", "root", "", "web-dev");

function query($query)
{
  // Ambil variabel dari luar function
  global $db;

  // Ambil Data dari Tabel (Query)
  $result = mysqli_query($db, $query);
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}

function tambah($data)
{
  // Ambil variabel dari luar function
  global $db;

  // Ambil Data dari Form
  $nama = htmlspecialchars($data['nama']);
  $course = htmlspecialchars($data['course']);
  $marks = htmlspecialchars($data['marks']);
  $ket = htmlspecialchars($data['ket']);

  // Query buat masukkan data (Insert)
  $query = "INSERT INTO siswa
            VALUES
            ('', '$nama', '$course', '$marks', '$ket')
  ";
  mysqli_query($db, $query);
  return mysqli_affected_rows($db);
}

function hapus($id)
{
  // Ambil variabel dari luar function
  global $db;

  mysqli_query($db, "DELETE FROM siswa WHERE id = $id");
  return mysqli_affected_rows($db);
}

function ubah($data)
{
  // Ambil variabel dari luar function
  global $db;

  // Ambil Data dari Form
  $id = $data['id'];
  $nama = htmlspecialchars($data['nama']);
  $course = htmlspecialchars($data['course']);
  $marks = htmlspecialchars($data['marks']);
  $ket = htmlspecialchars($data['ket']);

  // Query buat masukkan data (Insert)
  $query = "UPDATE siswa SET
            nama = '$nama',
            course = '$course',
            marks = '$marks',
            ket = '$ket'
            WHERE id = $id
  ";
  mysqli_query($db, $query);
  return mysqli_affected_rows($db);
}

function cari($keyword)
{
  $query = "SELECT * FROM siswa 
        WHERE 
        nama LIKE '%$keyword%' OR
        course LIKE '%$keyword%' OR
        marks LIKE '%$keyword%' OR
        ket LIKE '%$keyword%'
  ";
  return query($query);
}