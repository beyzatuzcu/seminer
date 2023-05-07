

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
    <style>


#talepler{
    margin-top: 20px;
    margin-left: 1150px;
    position: absolute;
    border: 1px solid #105749;
    border-radius: 15px;
    padding:10px;
    position: absolute;
    width: 100px;
    text-align: center;
}
#talepler2{
    margin-top: 20px;
    margin-left: 960px;
    position: absolute;
    border: 1px solid #105749;
    border-radius: 15px;
    padding:10px;
    position: absolute;
    width: 150px;
    text-align: center;
}
#talepler3{
    margin-top: 20px;
    margin-left: 770px;
    position: absolute;
    border: 1px solid #105749;
    border-radius: 15px;
    padding:10px;
    position: absolute;
    width: 150px;
    text-align: center;
}
#talepler2:hover, #talepler3:hover, #talepler:hover{
    color: white;
    background-color: #105749;
    transition-duration: .3s;
    border: 1px solid #105749;
}

table {
  font-size: 14px;
  background-color: #f9f9f9;
  border-collapse: collapse;
}

th, td {
  padding: 8px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}

th {
  background-color: #4CAF50;
  color: white;
}
#analiz{
    flex-basis: 300px;
    height: auto;
    width: 100%;
    background-color: #105749;
    z-index: 0;
    text-align: justify;
}
h1, h3, p{
    color: #fff;
    text-align: center;
}

        </style>
    <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
	<title>Yetkili Girişi</title>
    <div id="top">
    <div id="bar-title">
        <a href="home.php"><div id="talepler3">Sayfam</div></a>
        <a href="riskanalizi.php"><div id="talepler2">İtiraz Sonuç Ekranı</div></a>
        <a href="taleplerYonetici.php"><div id="talepler">Hasar Tespiti </div></a>
        <a href="giris.php"><div id="boosted-reality">Çıkış Yap</div></a>
        
        <a href="index.php"><div id="top-title">DEPREM - <span id="top-title-color">SİZİZ</span></div></a>
    </div>
</div>
<body>
<div id="analiz">
    <br><br><br><br>    <br><br><br><br>
    <h1>İtiraz Sonuç Ekranı</h1><br>
    <h3>Bireysel Başvuru İtiraz Ekranı</h3><br>
    <p>Bu allanda anlık gelen talepler tablosuna yer verilmiştir. Altta yer alan kısımlar da hasar durumlarına göre ayrılarak detaylandırılmıştır</p>
<center>
<?php
// Veritabanı bağlantısı
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "seminer";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Verileri çek
$sql = "SELECT aski_kodu, il, ilce, mahalle, sokak, bina_no, durum, itiraz_sonucu FROM hasar_tespiti";
$result = mysqli_query($conn, $sql);

// Tabloyu yazdır
echo "<table>";
echo "<tr><th>Aşkı Kodu</th><th>İl</th><th>İlçe</th><th>Mahalle</th><th>Sokak</th><th>Bina No</th><th>Durum</th><th>İtiraz Sonucu</th></tr>";
while($row = mysqli_fetch_assoc($result)) {
    echo "<tr><td>".$row["aski_kodu"]."</td><td>".$row["il"]."</td><td>".$row["ilce"]."</td><td>".$row["mahalle"]."</td><td>".$row["sokak"]."</td><td>".$row["bina_no"]."</td><td>".$row["durum"]."</td><td>".$row["itiraz_sonucu"]."</td></tr>";
}
echo "</table>";


// Hasar Tespit Edildi olan kayıtların sorgusu
$sql_hte = "SELECT * FROM hasar_tespiti WHERE durum='Hasar Tespit Edildi'";

// Hasar Tespit Edildi olan kayıtların tabloya eklenmesi
$result_hte = mysqli_query($conn, $sql_hte);
if (mysqli_num_rows($result_hte) > 0) {
    echo "<h3><br><br>Hasar Tespit Edildi<br></h3>";
    echo "<table>";
    echo "<tr><th>Aşki Kodu</th><th>İl</th><th>İlçe</th><th>Mahalle</th><th>Sokak</th><th>Bina No</th><th>Durum</th><th>İtiraz Sonucu</th></tr>";
    while($row = mysqli_fetch_assoc($result_hte)) {
        echo "<tr><td>".$row["aski_kodu"]."</td><td>".$row["il"]."</td><td>".$row["ilce"]."</td><td>".$row["mahalle"]."</td><td>".$row["sokak"]."</td><td>".$row["bina_no"]."</td><td>".$row["durum"]."</td><td>".$row["itiraz_sonucu"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "Kayıt bulunamadı";
}



// Tamir Edildi olan kayıtların sorgusu
$sql_te = "SELECT * FROM hasar_tespiti WHERE durum='Tamir Edildi'";

// Tamir Edildi olan kayıtların tabloya eklenmesi
$result_te = mysqli_query($conn, $sql_te);
if (mysqli_num_rows($result_te) > 0) {
    echo "<h3><br><br>Tamir Edildi<br></h3>";
    echo "<table>";
    echo "<tr><th>Aşki Kodu</th><th>İl</th><th>İlçe</th><th>Mahalle</th><th>Sokak</th><th>Bina No</th><th>Durum</th><th>İtiraz Sonucu</th></tr>";
    while($row = mysqli_fetch_assoc($result_te)) {
        echo "<tr><td>".$row['aski_kodu']."</td><td>".$row['il']."</td><td>".$row['ilce']."</td><td>".$row['mahalle']."</td><td>".$row['sokak']."</td><td>".$row['bina_no']."</td><td>".$row['durum']."</td><td>".$row['itiraz_sonucu']."</td></tr>";
    }
    echo "</table>";
} else {
    echo "Kayıt bulunamadı.";
}


mysqli_close($conn);
?>
</center>
</div>


</body>
</html
