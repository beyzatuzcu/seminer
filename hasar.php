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
    <!--uyarı mesajı -->
<script>
function showAnnouncement() {
    alert("Güncel İkamet Adresi: CUMHURİYET MAH. 2534 SK. NO: 18 İÇ KAPI NO: 2 MERKEZ / ADIYAMAN Hasar Tespite Konu MAKS Yapı Kimlik Numarası / Kaynak	:	241521277   BinaNo Güncel Adres Hasar Tespiti	:	Acil Yıktırılacak");
}
</script>
<style>
#hasar{
    position: absolute;
    background-color: #e4e4d7;
    height: auto;
    width: auto;
}

#uyari {
	position: fixed;
	top: 50%;
	left: 50%;
	transform: translate(-50%, -50%);
	background-color: orange;
	padding: 100px;
	border-radius: 100px;
	color: white;
	font-size: 20px;
	font-weight: bold;
	text-align: center;
	box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
}

#kapat {
	position: absolute;
	top: 5px;
	color: #105749;
	font-size: 60px;
	cursor: pointer;

}
.duyuru {
    border-radius: 5px;
    padding: 10px;
    margin-bottom: 20px;
    text-align: justify;
}

.duyuru p {
    font-size: 18px;
    line-height: 1.5;
    margin-top:100px;
    text-align: justify;
    margin-left: 50px;
    margin-right: 50px;
}
/**menu */
select {
	padding: 10px;
	margin-bottom: 10px;
	border: 1px solid #ccc;
	border-radius: 3px;
	width: 200px;
	max-width: 100%;
}
/**tablo */
table {
	width: 100%;
	border-collapse: collapse;
	margin-top: 20px;
	font-size: 14px;
}

table th {
	background-color: #105749;
	color: #fff;
	padding: 10px;
	text-align: left;
	font-weight: normal;
	border: 1px solid #ccc;
}

table td {
	padding: 10px;
	border: 1px solid #ccc;
}
input[type="text"], input[type="number"] {
	padding: 10px;
	margin-bottom: 10px;
	border: 1px solid #ccc;
	border-radius: 5px;
	width:600px ;
	max-width: 500px;
}

.btn {
	padding: 10px;
	width: 1000px;
	background-color: #105749;;
	color: #fff;
	border: none;
	border-radius: 10px;
	cursor: pointer;
	transition: all 0.3s ease;
}

.btn:hover {
	background-color: #105749;;
}

.error {
	color: #f44336;
	font-weight: bold;
	margin-top: 5px;
}

.success {
	color: #4CAF50;
	font-weight: bold;
	margin-top: 5px;
}
#refresh-btn {
margin-left: 10px;
padding: 5px 10px;
background-color: #4CAF50;
color: white;
border: none;
border-radius: 3px;
cursor: pointer;
}

#refresh-btn:hover {
background-color: #3e8e41;
}
h1 {
	text-align: center;
	margin-bottom: 20px;
}

.yapi {
	width: 500px;
		margin: 50px auto;
		padding: 20px;
		border: 10px solid #f7f7f7;
		background-color: #fff;
	
	box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
	border-radius: 10px;
}
.adres {
	width: 500px;
		margin: 50px auto;
		padding: 20px;
		border: 10px solid #f7f7f7;
		background-color: #fff;
			
		}


form {
	display: flex;
	flex-wrap: wrap;
	align-items: center;
	justify-content: center;
}

label {
	font-weight: bold;
	margin-right: 50px;
}
</style>
<script>
	function kapat() {
		var uyari = document.getElementById("uyari");
		uyari.style.display = "none";
	}
</script>

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
<div id="hasar">
	<div class="duyuru">
	<p><b>Hasarsız Binalar:</b> Deprem nedeniyle herhangi bir hasar meydana gelmeyen binadır. (Depremden önce oluşan binadaki hasarlar ve kusurlar değerlendirilmez.) Binanın kullanılmasında bir sakınca yoktur.
	<br><b>Az Hasarlı Binalar:</b> Deprem nedeniyle binanın boyasında, sıvalarında ve duvarlarında oluşan ince çatlaklar ile duvarlardan düşen sıvaların olduğu binalardır. (Depremden önce oluşan binadaki hasarlar ve kusurlar değerlendirilmez.) Binanın kullanılmasında bir sakınca yoktur.
	<br><b>Orta Hasarlı Binalar:</b> Deprem nedeniyle binanın duvarlarındaki yarıklar ile taşıyıcı elemanlardaki ince çatlakların olduğu binalardır. Depremden önce oluşan binadaki hasarlar ve kusurlar değerlendirilmez. "Orta" hasarlı yapıda taşıma gücündeki azalma giderilmeden (yapı onarılmadan) ya da güçlendirilmeden yapı kullanılmamalıdır. Eşyaların tahliyesi gerçekleştirilebilir.
	<br><b>Ağır Hasarlı Binalar:</b> Deprem nedeniyle binanın taşıyıcı elemanlarındaki geniş ve yaygın kesme kırılmalarının / ayrılmaların olduğu binalardır. "Ağır" hasarlı yapıların onarılmaz taşıma gücü kaybı ve geri (dayanım ve ekonomik açısından) alınamaz hasarları olan binalar olarak tanımlanır.
	<br><b>Acil Yıkılacak Binalar:</b> Deprem nedeniyle binanın taşıyıcı elamanlarının büyük oranda kalıcı yer değiştirerek kısmen veya tamamen yıkıldığı binalardır. Hiçbir şekilde kullanılması mümkün olmayan bu binaların içine girilemez ve eşyaların tahliyesi gerçekleştirilemez.</p>
</div>
<div id="uyari">
    <span id="kapat" onclick="kapat()">×</span>
    <h1>Önemli Duyuru</h1> 
    <p>Vatandaşlarımız e-devlet <a href="https://www.turkiye.gov.tr/" target="_blank">  (turkiye.gov.tr) </a>veya <a href="https://hasartespit.csb.gov.tr/" target="_blank"> hasartespit.csb.gov.tr</a> adresi üzerinden bilgileri ile sorgulama yaparak hasar durumlarını öğrenebilirler. Hasar tespit sonuçlarının mahalle muhtarlıklarında ilan edilmesinin ardından 1 aylık itiraz süresi bulunmaktadır. Bu süre içerisinde vatandaşlarımız, e-Devlet ve iletişim ofislerinden itiraz başvurularını yapabilecek olup yapılan itiraz başvuruları doğrultusunda yeniden hasar tespiti yapılarak sonuçlar kesinleşecektir.
    Adresle ilgili sorun yaşayan vatandaşlarımız, Valilik ve Kaymakamlıkların önünde bulunan afet koordinasyon müracaat merkezlerine müracaat edeceklerdir.</p>
</div>

<!--
<div class="tc">
	<h1>T.C. Kimlik Numarası İle Sorgulama </h1>
	<form id="tc-sorgulama">
		<div><label for="tc-no">T.C. Kimlik No:</label>
		<input type="text" id="tc-no" name="tc-no"  size="11" required></div>
		<button type="submit" class="btn">Sorgula</button>
	</form>
</div>  
-->

<div class="yapi">
	<h1>Yapı Bilgileri İle Sorgulama</h1>
	<form id="yapi-sorgulama" method="POST" action="<?php echo $_SERVER["PHP_SELF"];?>">
		<div>
			<label for="aski_kodu">Askı No:</label>
			<input type="text" id="aski_kodu" name="aski_kodu"  size="11" required>
		</div>
		<button type="submit" class="btn">Sorgula</button>
	</form>
</div>

<div class="adres">
    <h1>Adres Bilgileri İle Sorgulama</h1>    
    <form id="adres-sorgulama" method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
        <div>
            <label for="il">İl:</label>
            <input type="text" id="il" name="il" required ><br>
            <label for="ilce">İlçe:</label>
            <input type="text" id="ilce" name="ilce" required><br>
            <label for="mahalle">Mahalle:</label>
            <input type="text" id="mahalle" name="mahalle" required><br>
        </div>
        <button type="submit" class="btn">Sorgula</button>
    </form>
</div>

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

// Form verilerini al
if(isset($_POST["aski_kodu"])) {
    $aski_kodu = $_POST["aski_kodu"];

    // Verileri çek
    $sql = "SELECT aski_kodu, il, ilce, mahalle, sokak, bina_no, durum, itiraz_sonucu FROM hasar_tespiti WHERE aski_kodu='$aski_kodu'";
    $result = mysqli_query($conn, $sql);

   // Sorgu sonuçlarını göster
if (mysqli_num_rows($result) > 0) {
    echo "<table>";
    echo "<tr><th>Askı Kodu</th><th>İl</th><th>İlçe</th><th>Mahalle</th><th>Sokak</th><th>Bina No</th><th>Durum</th><th>İtiraz Sonucu</th></tr>";
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row["aski_kodu"] . "</td>";
        echo "<td>" . $row["il"] . "</td>";
        echo "<td>" . $row["ilce"] . "</td>";
        echo "<td>" . $row["mahalle"] . "</td>";
        echo "<td>" . $row["sokak"] . "</td>";
        echo "<td>" . $row["bina_no"] . "</td>";
        echo "<td>" . $row["durum"] . "</td>";
        echo "<td>" . $row["itiraz_sonucu"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "Kayıt bulunamadı.";
}
    // Veritabanı bağlantısını kapat
    mysqli_close($conn);
}
?>
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

// Form verilerini al
if(isset($_POST["il"]) && isset($_POST["ilce"]) && isset($_POST["mahalle"])) {
$il = $_POST["il"];
$ilce = $_POST["ilce"];
$mahalle = $_POST["mahalle"];

// Verileri çek
$sql = "SELECT aski_kodu,  il, ilce, mahalle, sokak, bina_no, durum, itiraz_sonucu FROM hasar_tespiti WHERE il='$il' AND ilce='$ilce' AND mahalle='$mahalle'" ;
$result = mysqli_query($conn, $sql);
// Sorgu sonuçlarını göster
if (mysqli_num_rows($result) > 0) {
	echo "<table>";
	echo "<tr><th>Askı Kodu</th><th>İl</th><th>İlçe</th><th>Mahalle</th><th>Sokak</th><th>Bina No</th><th>Durum</th><th>İtiraz Sonucu</th></tr>";
	while($row = mysqli_fetch_assoc($result)) {
	echo "<tr>";
	echo "<td>" . $row["aski_kodu"] . "</td>";
	echo "<td>" . $row["il"] . "</td>";
	echo "<td>" . $row["ilce"] . "</td>";
	echo "<td>" . $row["mahalle"] . "</td>";
	echo "<td>" . $row["sokak"] . "</td>";
	echo "<td>" . $row["bina_no"] . "</td>";
	echo "<td>" . $row["durum"] . "</td>";
	echo "<td>" . $row["itiraz_sonucu"] . "</td>";
	echo "</tr>";
	}
	echo "</table>";
	} else {
	echo "Kayıt bulunamadı.";
	}
	// Veritabanı bağlantısını kapat
	mysqli_close($conn);
	}
?>
</center>
</div>
</body>
</html>