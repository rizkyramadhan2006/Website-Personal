
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
// Proses autentikasi login
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Periksa login, Anda dapat menggunakan validasi sesuai kebutuhan Anda
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Contoh validasi sederhana, seharusnya menggunakan mekanisme keamanan yang lebih kuat
    if ($email === 'contoh@email.com' && $username === 'username' && $password === 'password') {
        // Login berhasil, contoh redirect atau tindakan lain setelah login
        header("Location: welcome.php");
        exit();
    } else {
        // Login gagal
        echo "Informasi login salah!";
    }
}
?>
                  
        </body>
        </html>
        </div>
        
    </section>
</body>
</html>