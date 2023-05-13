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

// Arama sorgusunu al
$query = $_GET["query"];

// Veritabanında arama yap
$sql = "SELECT * FROM hasar_tespiti WHERE durum LIKE '%$query%'";
$result = mysqli_query($conn, $sql);

// Tabloyu yazdır
echo "<table>";
echo "<tr><th>Aşkı Kodu</th><th>Yapı Kimlik No</th><th>İl</th><th>İlçe</th><th>Mahalle</th><th>Sokak</th><th>Bina No</th><th>Durum</th><th>İtiraz Sonucu</th></tr>";
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>".$row["aski_kodu"]."</td><td>".$row["yapi_kimlik_no"]."</td><td>".$row["il"]."</td><td>".$row["ilce"]."</td><td>".$row["mahalle"]."</td><td>".$row["sokak"]."</td><td>".$row["bina_no"]."</td><td>".$row["durum"]."</td><td>".$row["itiraz_sonucu"]."</td></tr>";
    }
} else {
    echo "<tr><td colspan='9'>Arama sonucu bulunamadı</td></tr>";
}
echo "</table>";

mysqli_close($conn);
?>
