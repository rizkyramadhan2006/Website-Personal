<!DOCTYPE html>
<html lang="en">
    <style>
*,
*::before,
*::after {
    box-sizing: border-box;
}

html {
    font-size: 62.5%;
}

body {
    color: rgb(255,255,255);
    background-color: rgba(0,0,0,0.15);
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    margin: 0;
    line-height: 1.5;
    display: flex;
    height: 100vh;
    flex-direction: column;
    align-items: center;
    justify-content: center;
}

.wrapper {
    background: #fff;
    width: 90%;
    padding: 2rem;
    box-shadow: 0 0px 2.2px rgba(0, 0, 0, 0.028), 0 0px 5.3px rgba(0, 0, 0, 0.04), 0 0px 10px rgba(0, 0, 0, 0.05);
}

h2 {
    background: #1dbcfd;
    color: white;
    letter-spacing: 0.1rem;
    padding: 1rem;
    cursor: default;
}

form,
input,
textarea,
button {
    font-family: inherit;
   font-size: initial;
}

.form-group label {
    display: block;
    margin: 2rem 0 0.5rem 0;
}

.form-group input[type="text"],
.form-group input[type="email"],
.form-group textarea {
    width: 100%;
    padding: 1rem 0.8rem;
    border: 1px solid rgba(0, 0, 0, 0.2);
    outline: 0;
    transition: border 0.15s;
}

.form-group input[type="text"],
.form-group input[type="email"] {
    height: 4.6rem;
}

.form-group textarea {
    resize: vertical;
}

.submit {
    background: #1dbcfd;
    color: white;
    font-weight: bold;
    margin-top: 1rem;
    padding: 1rem 1.5rem;
    border: none;
    cursor: pointer;
    transition: background 0.15s;
}

.submit:hover {
    background: rgba(173, 216, 230, 1);
    color: black;
}


.form-group input[type="text"]:focus,
.form-group input[type="email"]:focus,
.form-group textarea:focus {
    border: 1px solid #1dbcfd;
}

/* responsive */

@media screen and (min-width: 576px) {
    .wrapper {
        width: 70%;
    }
}

@media screen and (min-width: 768px) {
    .wrapper {
        width: 55%;
    }
}

@media screen and (min-width: 992px) {
    .wrapper {
        width: 45%;
    }
}

@media screen and (min-width: 1200px) {
    .wrapper {
        width: 35%;
    }
}
</style>
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
            <a href="contak.php">CONTACT</a>
            <a href="about.php">ABOUT</a>
            
        </nav>
    </header>

    <section id="home" class="home">
    
        <body>
    <div class="wrapper">
        <h2>CONTACT US</h2>

        <form action="cps.php" method="post">
            <div class="form-group">
            <label for="nama">Nama:</label><br>
  <input type="text" id="nama" name="nama"><br>
            </div>
            <div class="form-group">
            <label for="email">Email:</label><br>
  <input type="text" id="email" name="email"><br>
            </div>
            <div class="form-group">
            <label for="namas">ulasan:</label><br>
  <input type="text" id="namas" name="namas"><br>       
        </div>

            <div class="form-group">
                <button type="submit" class="submit">Send Message</button>
            </div>
        </form>


    </div>
</body>
        </div>
    </section>
</body>
</html>