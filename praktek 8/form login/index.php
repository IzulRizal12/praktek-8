<?php
session_start();

// Proses login ketika form login disubmit
if($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Ambil nilai username dan password dari form login
  $username = $_POST['username'];
  $password = $_POST['password'];

  // Lakukan validasi login
  if(login($username, $password)) {
    // Jika login berhasil, simpan username dalam session
    $_SESSION['username'] = $username;

    // Alihkan pengguna ke halaman cetak.php
    header("Location: cetak.php");
    exit();
  } else {
    // Jika login gagal, tampilkan pesan error
    $error = "Username atau password salah";
  }
}

// Fungsi untuk melakukan validasi login
function login($username, $password) {
  // Koneksi ke database
  $koneksi = mysqli_connect("localhost", "root", "", "latihan");

  // Lindungi dari serangan SQL Injection
  $username = mysqli_real_escape_string($koneksi, $username);
  $password = mysqli_real_escape_string($koneksi, $password);

  // Query SQL untuk memeriksa username dan password
  $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
  $result = mysqli_query($koneksi, $query);

  if(mysqli_num_rows($result) === 1) {
    // Jika data pengguna ditemukan, login berhasil
    return true;
  }

  // Jika tidak cocok atau data pengguna tidak ditemukan, login gagal
  return false;
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Halaman Login</title>
  <style>
    body {
      font-family: Arial, sans-serif;
    }

    h2 {
      text-align: center;
    }

    form {
      width: 300px;
      margin: 0 auto;
    }

    label {
      display: block;
      margin-bottom: 5px;
    }

    input[type="text"],
    input[type="password"] {
      width: 100%;
      padding: 8px;
      margin-bottom: 10px;
      border: 1px solid #ccc;
    }

    button[type="submit"] {
      padding: 10px 20px;
      background-color: #4CAF50;
      color: white;
      border: none;
      cursor: pointer;
    }

    button[type="submit"]:hover {
      background-color: #45a049;
    }

    .error {
      color: red;
    }
  </style>
</head>
<body>
  <h2>Halaman Login</h2>
  <?php if(isset($error)): ?>
    <p class="error"><?php echo $error; ?></p>
  <?php endif; ?>
  <form method="post" action="">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required><br>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required><br>

    <button type="submit">Login</button>
  </form>
</body>
</html>