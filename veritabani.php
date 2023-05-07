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
$sql = "SELECT aski_kodu, yapi_kimlik_no, il, ilce, mahalle, sokak, bina_no, durum, itiraz_sonucu FROM hasar_tespiti";
$result = mysqli_query($conn, $sql);

// Tabloyu yazdır
echo "<table>";
echo "<tr><th>Aşkı Kodu</th><th>Yapı Kimlik No</th><th>İl</th><th>İlçe</th><th>Mahalle</th><th>Sokak</th><th>Bina No</th><th>Durum</th><th>İtiraz Sonucu</th></tr>";
while($row = mysqli_fetch_assoc($result)) {
    echo "<tr><td>".$row["aski_kodu"]."</td><td>".$row["yapi_kimlik_no"]."</td><td>".$row["il"]."</td><td>".$row["ilce"]."</td><td>".$row["mahalle"]."</td><td>".$row["sokak"]."</td><td>".$row["bina_no"]."</td><td>".$row["durum"]."</td><td>".$row["itiraz_sonucu"]."</td></tr>";
}
echo "</table>";


// Hasar Tespit Edildi olan kayıtların sorgusu
$sql_hte = "SELECT * FROM hasar_tespiti WHERE durum='Hasar Tespit Edildi'";

// Hasar Tespit Edildi olan kayıtların tabloya eklenmesi
$result_hte = mysqli_query($conn, $sql_hte);
if (mysqli_num_rows($result_hte) > 0) {
    echo "<h3><br><br>Hasar Tespit Edildi<br></h3>";
    echo "<table>";
    echo "<tr><th>Aşki Kodu</th><th>Yapi Kimlik No</th><th>İl</th><th>İlçe</th><th>Mahalle</th><th>Sokak</th><th>Bina No</th><th>Durum</th><th>İtiraz Sonucu</th></tr>";
    while($row = mysqli_fetch_assoc($result_hte)) {
        echo "<tr><td>".$row["aski_kodu"]."</td><td>".$row["yapi_kimlik_no"]."</td><td>".$row["il"]."</td><td>".$row["ilce"]."</td><td>".$row["mahalle"]."</td><td>".$row["sokak"]."</td><td>".$row["bina_no"]."</td><td>".$row["durum"]."</td><td>".$row["itiraz_sonucu"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "Kayıt bulunamadı";
}
?>