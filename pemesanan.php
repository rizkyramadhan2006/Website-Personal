<!DOCTYPE html>
<html lang="en">
<style>
    /* Style untuk gambar */
    .slideshow-container {
      max-width: 500px;
      position: relative;
      margin: auto;
      background-color: color: rgb(11, 11, 11);;
      border-radius: 20px;
      
    
    }

    /* Animasi untuk fade gambar */
    .fade {
      -webkit-animation-name: fade;
      -webkit-animation-duration: 1.5s;
      animation-name: fade;
      animation-duration: 1.5s;
    }

    @keyframes fade {
      from {opacity: .4}
      to {opacity: 1}
    }

    /* Mengatur dimensi gambar */
    img {
      width: 100%;
      height: auto;
      display: block;
      margin-left: auto;
      margin-right: auto;
      border-style: solid;
    border-color: blue;
      border-radius: 10%;

    }

    /* Tombol navigasi manual */
    .prev, .next {
      cursor: pointer;
      position: absolute;
      top: 50%;
      width: auto;
      padding: 16px;
      margin-top: -22px;
      color: salmon;
      font-weight: bold;
      font-size: 20px;
      transition: 0.6s ease;
      border-radius: 0 3px 3px 0;
      user-select: none;
    }

    .next {
      right: 0;
      border-radius: 3px 0 0 3px;
    }

    .prev:hover, .next:hover {
      background-color: red;
    }
  </style>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="pms.css">
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
            <a href="contak.php">CONTACT</a>
            <a href="about.php">ABOUT</a>
            
        </nav>
    </header>

    <section id="home" class="home">
        <div class="content">
        <form action="proses_pemesanan.php" method="post">
  <label for="nama">Nama:</label><br>
  <input type="text" id="nama" name="nama"><br>
  <label for="email">Email:</label><br>
  <input type="text" id="email" name="email"><br>
  <label for="checkin">Tanggal Check-in:</label><br>
  <input type="date" id="checkin" name="checkin"><br>
  <label for="checkout">Tanggal Check-out:</label><br>
  <input type="date" id="checkout" name="checkout"><br>
  <label for="kamar">Bagian Kamar:</label><br>
  <input type="text" id="kamar" name="kamar"><br>
  <label for="telpon">Nomor Telepon:</label><br>
  <input type="text" id="telpon" name="telpon"><br>
  <input type="submit" value="Pesan">
</form>
        </div>
        
        <div class="slideshow-container">
        <p style ="text-align: center; color: white;">PILIH KAMAR SESUAI YANG ANDA BUTUHKAN</p><BR><BR>
  <div class="mySlides fade">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQexwXc-TP6M3IiFW3SbAKDpEkR4V8gsWuvAA&usqp=CAU" alt="Gambar 1"><br>
    <p style ="text-align: center; color: white;">kamar 1</p>
</div>

  <div class="mySlides fade">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT0pwBGjimwCpkIJai5mxhmDLsu686MSIx0ZQ&usqp=CAU" alt="Gambar 2"><br>
    <p style ="text-align: center; color: white;">kamar 2</p>
</div>

  <div class="mySlides fade">
    <img src="https://th.bing.com/th/id/OIP.Vm0FvFTrqsRCiwuVffDRjQHaEo?rs=1&pid=ImgDetMain" alt="Gambar 3"><br>
    <p style ="text-align: center; color: white;">kamar 3</p>
           
</div>
<!-- Tombol navigasi manual -->
<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>

<script>
  // JavaScript untuk mengatur logika slide
  var slideIndex = 1;
  showSlides(slideIndex);

  function plusSlides(n) {
    showSlides(slideIndex += n);
  }

  function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    if (n > slides.length) {slideIndex = 1}
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }
    slides[slideIndex-1].style.display = "block";
  }
</script>
</section>
    </section>
</body>
</html>