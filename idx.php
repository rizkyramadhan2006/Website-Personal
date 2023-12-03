<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- custom css file link  -->
    <link rel="stylesheet" href="hero.css">

</head>
<body>
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
        

<div class="container">

    <form action="">

        <div class="row">

            <div class="col">

                <h3 class="title">billing address</h3>

                <div class="inputBox">
                    <span>full name :</span>
                    <input type="text" placeholder="john deo">
                </div>
                <div class="inputBox">
                    <span>email :</span>
                    <input type="email" placeholder="example@example.com">
                </div>
             <div class="inputBox">
             <span>no telepon:</span>
           <input type="tel" id="nomor_telepon" name="nomor_telepon" pattern="[0-9]{10,14}" placeholder="Masukkan nomor telepon" required><br>
                </div>
          
                  <div class="inputBox">
                    <span>tipe_kamar :</span>
                <select id="tipe_kamar" name="tipe_kamar">
    <option value="standard">Standard</option>
    <option value="deluxe">Deluxe</option>
    <option value="suite">Suite</option>
  </select><br><br>
  </div>
                <div class="inputBox">
                    <span>tanggal_checkin :</span>
                <input type="date" id="tanggal_checkin" name="tanggal_checkin"><br>
                </div>
                <div class="inputBox">
                    <span>tanggal_checkout :</span>
                    
  <input type="date" id="tanggal_checkout" name="tanggal_checkin"><br>
                </div>

                <div class="flex">
                    <div class="inputBox">
                        
                  
                    </div>
                </div>

            </div>

            <div class="col">

                <h3 class="title">payment</h3>

                <div class="inputBox">
                    <span>cards accepted :</span>
                    <img src="card_img.png" alt="">
                </div>
                <div class="inputBox">
                    <span>name on card :</span>
                    <input type="text" placeholder="mr. john deo">
                </div>
                <div class="inputBox">
                    <span>credit card number :</span>
                    <input type="number" placeholder="1111-2222-3333-4444">
                </div>
                <div class="inputBox">
                    <span>exp month :</span>
                    <input type="text" placeholder="january">
                </div>

                <div class="flex">
                    <div class="inputBox">
                        <span>exp year :</span>
                        <input type="number" placeholder="2022">
                    </div>
                    <div class="inputBox">
                        <span> Hari:</span>
                        <input type="text" placeholder="senin">
                    </div>
                </div>

            </div>
    
        </div>

        <input type="submit" value="proceed to checkout" class="submit-btn">

    </form>

</div>    
    
</body>
</html>