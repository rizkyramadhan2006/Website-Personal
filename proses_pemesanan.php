<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles.css">

    <title>My Hotel</title>
</head>
<body>
    <header class="header">
        <a href="index.php" class="mylogo">My <span> Hotel</span></a>
        <nav class="navbar">
            <a href="home.php">HOME</a>
            <a href="pemesanan.php">CHECKIN</a>
            <a href="login.php">LOGIN</a>
            <a href="creadit.php">CREADIT</a>
            <a href="#contact">CONTACT</a>
            <a href="about.php">ABOUT</a>
            
        </nav>
    </header>

    <section id="home" class="home">
        <div class="content">
        <h1>terima kasih</h1>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nama = $_POST['nama'];
  $email = $_POST['email'];
  $checkin = $_POST['checkin'];
  $checkout = $_POST['checkout'];
  $kamar = $_POST['kamar'];
  $telpon = $_POST['telpon'];

  // Lakukan sesuatu dengan data yang diterima, misalnya menyimpan ke database
  // ...

  // Menampilkan pesan konfirmasi
  echo "<p>Pemesanan oleh $nama dengan email $email untuk check-in pada tanggal $checkin dan check-out pada tanggal $checkout </p>";
  echo "<p>Bagian Kamar: $kamar</p>";
  echo "<p>Nomor Telepon: $telpon berhasil dilakukan.</p>";
}
?>
        </div>
        <div class="image-utama">
   
            <img style ="border-radius: 60px 140px 40px 140px; border-style: solid; border-color: blue;"src="https://th.bing.com/th/id/OIP.-2pG49QcmyFMrX8gRSAevgHaE7?rs=1&pid=ImgDetMain" alt="akolang"><br>
          </div>
    </section>
</body>
</html>