<?php
// Veritabanı bilgilerini değiştirin
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "seminer";

// Bağlantıyı oluştur
$conn = new mysqli($servername, $username, $password, $dbname);

// Bağlantıyı kontrol et
if ($conn->connect_error) {
    die("Bağlantı hatası: " . $conn->connect_error);
}

// Veritabanına bağlanma işlemleri

$sql = "SELECT * FROM kisiler";
$result = mysqli_query($conn, $sql);

// Varsayılan ad_soyad değeri
$ad_soyad = "";

if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_assoc($result)) {
    // Ad Soyad, İl Müdürlüğü ve Dilekçe Metni verileri gösteriliyor
    //echo "Ad Soyad: " . $row["ad_soyad"] . "<br>";
    //echo "İl Müdürlüğü: " . $row["il_mudurlugu"] . "<br>";
    //echo "Dilekçe Metni: " . $row["dilekce_metni"] . "<br>";

    // Varsayılan ad_soyad değeri atanıyor
    $ad_soyad = $row["ad_soyad"];
    $il_mudurlugu=$row["il_mudurlugu"];
    $dilekce_metni=$row["dilekce_metni"];
  }
} else {
  echo "Kayıt bulunamadı";
}

// Veritabanı bağlantısını kapama işlemi
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
	<title>Kurumsal / Bireysel Başvuru</title>
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
<style>

.kb{
    margin-top: 110px;
    margin-left: 650px;
    margin-right: 650px;

    position: absolute;
    font-size: 18px;
    font-weight: bold;
    font-family: 'Inter', sans-serif;
    color: #105749;
    text-align: center;
}

#btn3{
    color: rgb(250, 247, 247);
    background-color: orange;
    border-radius: 10px;
    border: 1px solid orange;
    margin-top: 520px;
    margin-left: 1200px;
    padding:10px;
    position: absolute;
    width: 30px;
    text-align: center;
}

#btn3:hover{
    background-color: #ffffff;
    border-radius: 200px;
    border: 1px solid #105749;
    color: #105749;
    transition-duration: .3s;
}
#btn4{
    color: rgb(250, 247, 247);
    background-color: orange;
    border-radius: 10px;
    border: 1px solid orange;
    margin-top: 520px;
    margin-left: 300px;
    padding:10px;
    position: absolute;
    width: 30px;
    text-align: center;
}
#btn4:hover{
    background-color: #ffffff;
    border-radius: 200px;
    border: 1px solid #105749;
    color: #105749;
    transition-duration: .3s;
}

.modal-header {
    padding: 1em 0.5em;
    background: #fff;
    border: 1px solid #eee;
    text-align: center; 
}
.modal-header span {
    width: 900px;
    background: #eee;
    border-radius: 0.5em;
    margin: 10px 8px;
    display: inline-block;
    height:90px; 
}
.modal-header span.is-active {
background: #105749; 
}
.modal-bodies {
    position: relative;
    perspective: 100px;
    margin-top: 130px;
    margin-left: 500px; 
    margin-right: 500px; 
}
.modal-body {
    background: #fff;
    display: none;
    box-shadow: 0px 35px 30px -30px;
    transform-origin: top left;
    position: absolute;
    top: 0;
    right: 0;
    left: 0;
    height: auto;
    padding: 20px 20px; 
}
.modal-body p {
    font-size: 0.85em;
    padding: 0px 0px 8px 0px;
    color: orange;
    text-align: center; 
}
.modal-body label span {
    font-size: 0.8em;
    font-weight: 800;
    color: orange;
    text-transform: uppercase;
    display: block;
    margin: 0px 10px 8px 0px; 
    
}
.modal-body input, .modal-body select {
    display: center;
    width: 90%;
    border: 1px solid #eee;
    padding: 0.8em;
    margin-bottom: 2em;
    transition: all 300ms ease-in-out; 
}
.modal-body input:focus, .modal-body select:focus {
    outline: none;
    border: 1px solid orange; 
}
.is-showing {
    display: block; 
    }
    h4 {
        color:#105759;
    }

</style>
<title>Önizleme</title>
</head>
<body>
  <div class="modal-header"><p id="yazi" class="kb">Bireysel Başvuru</p></div>
    <!--<span class="is-active"> </span>-->
<div>
    <div class="modal-bodies">
        <div class="modal-body is-showing">
            <h4><b>ÖNİZLEME</b> </h4>
            <form action="" method="post">
            <br><br>    
            <label for=""><span> Ad Soyad</span> <input type="text" id="ad_soyad" name="ad_soyad" value="<?php echo $ad_soyad; ?>"></label>
            <label for=""><span> İl Müdürlüğü</span> <input type="text" id="il_mudurlugu" name="il_mudurlugu" value="<?php echo $il_mudurlugu; ?>"></label>
            <label for=""><span> Dilekce Metni</span> <input type="text" id="dilekce_metni" name="dilekce_metni" value="<?php echo $dilekce_metni; ?>"></label>

            </form>
        </div>
    </div>
    <a href="risk.php"><div id="btn3">bitir</div></a>
</div>         
</body>
</html>
