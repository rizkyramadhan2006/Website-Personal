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
    $namas = $_POST['namas'];

  echo "<p> halo $nama maaf atas ketidaknyamanannya,dengan ulasan $namas sedang di proses <br> </p>";
  echo "<p> $email alamat email anda (jika belum ada konfirmasi langsung saja hubungii bebas@gmail.com )</p>";
}
?>
       
    </section>
</body>
</html>