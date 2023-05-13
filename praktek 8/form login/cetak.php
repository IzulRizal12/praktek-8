<?php
session_start();

// Cek apakah pengguna sudah melakukan login
if(!isset($_SESSION['username'])) {
  // Jika tidak, alihkan pengguna kembali ke halaman login
  header("Location: index.php");
  exit();
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Halaman Cetak</title>
</head>
<body>
  <h2>Halaman Cetak</h2>
  <p>Selamat datang, <?php echo $_SESSION['username']; ?></p>
  <!-- Tambahkan kode program cetak Anda di sini -->
</body>
</html>







