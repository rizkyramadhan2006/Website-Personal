<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="home.css">
    <title>My Hotel</title>
</head>
<body>
<section id="home" class="home">
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

          
<div class="slideshow-container">
  <div class="mySlides fade">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQexwXc-TP6M3IiFW3SbAKDpEkR4V8gsWuvAA&usqp=CAU" alt="Gambar 1"><br>
    <p style ="text-align: center; color: white;">ini adalah bagian tempat makan popular.<br> cepat order sekarang!!!</p><br><br>  
</div>

  <div class="mySlides fade">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT0pwBGjimwCpkIJai5mxhmDLsu686MSIx0ZQ&usqp=CAU" alt="Gambar 2"><br>
    <p style ="text-align: center; color: white;">ini adalah kolam utama dan gratis lho.<br> cepat order sekarang!!!</p><br><br>
</div>

  <div class="mySlides fade">
    <img src="https://th.bing.com/th/id/OIP.Vm0FvFTrqsRCiwuVffDRjQHaEo?rs=1&pid=ImgDetMain" alt="Gambar 3"><br>
    <p style ="text-align: center; color: white;">ini adalah bagian khusus dengan harga murah lho.<br> cepat order sekarang!!!</p><br><br>
           
</div>
<p style ="text-align: center; color: white;">Cari hotel dengan harga 100 ribuan di bandung?<br> Kamu bisa kunjungi<br> fame hotel kiboy dan dapatkan penawaran lengkap lainnya.<br> Dapat sarapan gratis juga, lho.</p><br><br>
    
           
  <!-- Tombol navigasi manual -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<div class="image-utama">
   
            <img src="https://th.bing.com/th/id/OIP.-2pG49QcmyFMrX8gRSAevgHaE7?rs=1&pid=ImgDetMain" alt="akolang"><br>
            <p style ="text-align: center; color: white;">Cari hotel dengan harga 100 ribuan di bandung?<br> Kamu bisa kunjungi<br> fame hotel kiboy dan dapatkan penawaran lengkap lainnya.<br> Dapat sarapan gratis juga, lho.</p><br><br>
    
        
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



    
</body>
</html>