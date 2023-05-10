<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "seminer";

// Veritabanına bağlantı
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Bağlantı hatası: " . $conn->connect_error);
}

// POST isteği kontrolü
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // SQL sorgusu
    $sql = "SELECT * FROM `users` WHERE `username` = '$username' AND `password` = '$password'";

    // SQL sorgusunu çalıştır ve sonucu al
    $result = $conn->query($sql);

    // Sonucu kontrol et
    if ($result->num_rows > 0) {
        header('Location: home.php');
        exit;
    } else {
        echo '<script>alert("Kullanıcı adı veya şifre yanlış");</script>';
    }
}

// Veritabanı bağlantısını kapat
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300&display=swap" rel="stylesheet">    
    <title>DEPREM - SİZİZ</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="index.css">
    <style>
    html {scroll-behavior: smooth;}
    * {margin: 0;}
    </style>
    <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
</head>
<body>   
<div id="top">
<div id="bar-title">
        <a href="cbs.php"><div id="cbs">CBS</div></a>
        <a href="risk.php"><div id="risk-analys">Risk Analizi</div></a>
        <a href="hasar.php"><div id="damage-show">Hasar Tespiti</div></a>
        <a href="onlem.php"><div id="info">Önlemler</div></a>
        <a href="index.php#ended"><div id="sss">SSS</div></a>
        <a href="giris.php"><div id="open-ticket">GİRİŞ</div></a>
        <a href="deprembilgi.php"><div id="boosted-reality">DepremBilgi</div></a>
        <a href="index.php"><div id="top-title">DEPREM - <span id="top-title-color">SİZİZ</span></div></a>
    </div>
</div>
<div id="main">

<br><br><br>
<br><br><br>
<br><br><br>

    <div class="login-container">
        <h1>Giriş Yap</h1>
        <form action="giris.php" method="POST">
            <label for="username">Kullanıcı Adı:</label>
            <input type="text" id="username" name="username" >
            <label for="password">Şifre:</label>
            <input type="password" id="password" name="password" ><br>
            <button type="submit">Giriş Yap</button>
        </form>
    </div>
</div>
<style>
	.login-container {
		width: 500px;
		margin: 50px auto;
		padding: 20px;
		border: 10px solid #f7f7f7;
		background-color: #f7f7f7;
	}

	h1 {text-align: center; margin-bottom: 20px; color: orange; }

	label {
		display: block;
		margin-bottom: 10px;

	}

	input[type="text"],
    input[type="password"] {
    width: 100%;
    padding: 20px;
    border: 10px solid #f7f7f7;
    border-radius: 4px;
    margin-bottom: 20px;
    box-sizing: border-box;

}

button[type="submit"] {
    display: block;
    width: 100%;
    background-color: #4CAF50;
    color: #f7f7f7;
    padding: 10px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

</style>

<script>
        setTimeout(function() {
            document.querySelector('.alert').remove();
        }, 3000);
    </script>
    
</body>    
</html>