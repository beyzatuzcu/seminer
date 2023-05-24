


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "seminer";

// Veritabanına bağlantı oluşturma
$conn = new mysqli($servername, $username, $password, $dbname);

// Bağlantı kontrolü
if ($conn->connect_error) {
    die("Bağlantı hatası: " . $conn->connect_error);
}
echo '<script>alert("Bağlantı başarılı!");</script>';
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
#iller{
    margin-top: 20px;
    margin-left: 570px;
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

body {
	margin: 0;
	padding: 0;
	font-family: Arial, sans-serif;
}

header {
	background-color: #fff;
	color: #fff;
	padding: 20px;
}

nav ul {
	list-style: none;
	margin: 0;
	padding: 0;
	display: flex;
	justify-content: space-around;
	background-color: #f2f2f2;
}

nav ul li {
	margin: 0;
}

nav ul li a {
	display: block;
	padding: 10px;
	color: #105749;
	text-decoration: none;
}

nav ul li a:hover {
	background-color: #105749;
	color: orange;
}

main {
	padding: 20px;
}

section {
	margin-bottom:
}
h2{
    color: orange;
}
#hak{
    color: orange;
    margin-top: 150px;

}

#deprem-bileseni {
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
  margin-top: 5px;
}

#deprem-bileseni h3 {
  margin-top: 0;
}

#deprem-listesi {
  padding: 0;
  margin: 0;
  list-style: none;
}

#deprem-listesi li {
  margin-bottom: 10px;
  font-size: 14px;
  line-height: 1.4;
}

ul {
  list-style: none;
  padding: 0;
  margin: 0;
}

li {
  margin-bottom: 10px;
}

li:before {
  content: "\2022"; /* bullet point */
  color: #ff8800; /* bullet point color */
  font-weight: bold;
  display: inline-block;
  width: 1em;
  margin-left: -1em;
}

#counter {
  display: flex;
  justify-content: center;
  align-items: center;
  font-size: 20px;
  font-weight: bold;
  color: #333;

  border-radius: 10px;
  padding: 20px;

}
#counter2 {
  display: flex;
  justify-content: center;
  align-items: center;
  font-size: 20px;
  font-weight: bold;
  color: #333;
  border-radius: 10px;
  padding: 20px;

}

.digit {
  display: inline-block;
  width: 1em;
  text-align: center;
  margin: 0 5px;
  animation-name: count;
  animation-duration: 1.5s;
  animation-fill-mode: both;
}

.digit:first-child {
  margin-left: 0;
}

@keyframes count {
  from {
    transform: translateY(-50%);
    opacity: 0;
  }
  to {
    transform: translateY(0);
    opacity: 1;
  }
}

</style>
<script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
	<title>Yetkili Girişi</title>
    <div id="top">
    <div id="bar-title">
        <a href="iller.php"><div id="iller">İller</div></a>
        <a href="home.php"><div id="talepler3">Sayfam</div></a>
        <a href="riskanalizi.php"><div id="talepler2">İtiraz Sonuç Ekranı</div></a>
        <a href="taleplerYonetici.php"><div id="talepler">Hasar Tespiti </div></a>
        <a href="giris.php"><div id="boosted-reality">Çıkış Yap</div></a>
        
        <a href="index.php"><div id="top-title">DEPREM - <span id="top-title-color">SİZİZ</span></div></a>
    </div>
</div>
<div>
<!DOCTYPE html>
<html>
<head>
	<title>Deprem Sitesi - Yönetici Paneli</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<header>
		<h1>Deprem Sitesi Yönetici Paneli</h1>
	</header>

	<nav>
		<ul>
			<li><a href="#depremler">Anlık Depremler</a></li>
      <li><a href="#veriler">Deprem Verileri ve İstatistikleri</a></li>
			<li><a href="#mevzuat">Mevzuat </a></li>
			<li><a href="#araclar">Risk Analizi ve Planlama Araçları</a></li>
			<li><a href="#iletisim">İletişim Kanalları</a></li>
		</ul>
	</nav>
    <main>
      <br><br>
        <section id="depremler">
          <iframe src="https://deprem.afad.gov.tr/last-earthquakes.html" width="100%" height="200"></iframe>
        </section>
<br><br>
		<section id="veriler">
			<h2>Deprem Verileri ve İstatistikleri</h2>
      <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "seminer";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$query = "SELECT * FROM deprem_istatistikleri";
$result = mysqli_query($conn, $query);

$data = array();
while($row = mysqli_fetch_assoc($result)){
    $data[] = $row;
}

mysqli_close($conn);
?>
<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {packages: ['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Yıl', 'Toplam Deprem Sayısı'],
          <?php
            foreach($data as $row){
              echo "['".$row['yil']."', ".$row['toplam_deprem_sayisi']."],";
            }
          ?>
        ]);

        var options = {
          title: 'Türkiye\'de Deprem Sayısı',
          hAxis: {title: 'Yıl'},
          vAxis: {title: 'Toplam Deprem Sayısı'}
        };

        var chart = new google.visualization.ColumnChart(document.getElementById('chart_div777'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="chart_div777" style="width: 1400px; height: 500px; color: orange;"></div>
  </body>
</html>

<section id="mevzuat">
			<h2>Mevzuat </h2>
<p style="text-align: justify;">
  Türkiye Deprem Veri Merkezi Sistemi (TDVMS), Afet ve Acil Durum Yönetimi Başkanlığı (AFAD) Deprem Dairesi Başkanlığı tarafından 7/24 çalışma 
  esasına göre işletilen, ülkemizde ve yakın çevresinde meydana gelen deprem aktivitesinin izlenmesi, değerlendirilmesi ve raporlanması amacıyla 
  kurulan Türkiye deprem gözlem istasyonlarından elde edilen veriler ile benzer çalışmaları yürüten diğer üniversite ve araştırma kurumlarının 
  elde ettiği verilerin tek bir merkezde toplanarak paylaşımının sağlandığı bir sistemdir. Bu sayede gerek ülkemizdeki gerekse diğer ülkelerdeki 
  araştırmacıların deprem verilerine hızlı ve güvenilir şekilde erişmesi sağlanmaktadır. TDVMS, Ülkemizde çeşitli kurum, kuruluş, üniversiteler 
  ve araştırma merkezleri tarafından, depremleri izlemek ve sismik aktiviteyi gözlemek amacıyla kurulan deprem gözlem istasyonlarından elden 
  edilen gerçek zamanlı ve çevrimdışı verileri uluslararası standartlarda tek bir merkezde birleştirilip, düzenlenip, depolanarak kullanıcıların 
  paylaşımına sunulmaktadır.
</p>	<br>
    <h3>AFAD-TDVMS, Veri Sağlayan Merkezler:</h3>
    <ul>
      <li><a href="http://www.deprem.gov.tr/">Deprem Dairesi Başkanlığı</a></li>
      <li><a href="https://www.etu.edu.tr/">Eskişehir Teknik Üniversitesi</a></li>
      <li><a href="http://www.antalya.gov.tr/">Antalya Valiliği</a></li>
      <li><a href="http://www.dsi.gov.tr/">Devlet Su İşleri Genel Müdürlüğü</a></li>
      <li><a href="http://www.deprem.atauni.edu.tr/">Atatürk Üniversitesi, Deprem Araştırma Merkezi</a></li>
      <li><a href="http://www.cumhuriyet.edu.tr/">Cumhuriyet Üniversitesi, Deprem Araştırma Merkezi</a></li>
      <li><a href="http://www.dohad.org.tr/">DOHAD - Doğa Hareketleri Araştırma Derneği</a></li>
      <li><a href="https://deprem.cu.edu.tr/">Dokuz Eylül Üniversitesi, Deprem Araştırma Merkezi</a></li>
      <li><a href="http://www.duzce.bel.tr/">Düzce Belediyesi</a></li>
      <li><a href="http://www.iskenderun.bel.tr/">İskenderun Belediyesi</a></li>
      <li><a href="http://www.kocaeli.bel.tr/">Kocaeli Belediyesi</a></li>
      <li><a href="http://www.kocaeli.edu.tr/">Kocaeli Üniversitesi</a></li>
      <li><a href="http://www.osmangazi.bel.tr/">Osmangazi Belediyesi</a></li>
      <li><a href="http://www.sakarya.bel.tr/">Sakarya Belediyesi</a></li>
      <li><a href="https://www.sdu.edu.tr/">Süleyman Demirel Üniversitesi</a></li>
      <li><a href="https://www.mam.tubitak.gov.tr/tr">TÜBİTAK – MAM, Yer ve Deniz Bilimleri Araştırma Merkezi</a></li>
      <li><a href="https://www.gazi.edu.tr/">Gazi Üniversitesi</a></li>
      <li><a href="http://www.koeri.boun.edu.tr/">Kandilli Rasathanesi ve Deprem Araştırma Enstitüsü</a></li>
    </ul>
  
	</section>
		<section id="araclar">
			<h2>Risk Analizi ve Planlama Araçları</h2>
    
      <div id="counter">
      <p style="color: darkgreen;">RİSKLİ YAPI TESPİTİ SONRASINDA YIKILAN BAĞIMSIZ BİRİM SAYISI </p> 
  <span class="digit">8</span>
  <span class="digit">2</span>
  <span class="digit">4</span>
  <span class="digit">.</span>
  <span class="digit">0</span>
  <span class="digit">7</span>
  <span class="digit">9</span>
</div>
<div id="counter2">
      <p style="color: darkgreen;">RİSKLİ YAPI TESPİTİ YAPILAN BAĞIMSIZ BİRİM SAYISI</p>
  <span class="digit">9</span>
  <span class="digit">4</span>
  <span class="digit">4</span>
  <span class="digit">.</span>
  <span class="digit">4</span>
  <span class="digit">4</span>
  <span class="digit">7</span>
</div>

<?php
// Veritabanı bağlantısı
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "seminer";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Veritabanı bağlantısı başarısız: " . $conn->connect_error);
}

// Durumları sayma
$query = "SELECT durum, COUNT(*) AS durum_sayisi FROM hasar_tespiti GROUP BY durum";
$result = $conn->query($query);

// Sonuçları tabloda yazdırma
if ($result->num_rows > 0) {
    echo "<table style='border-collapse: collapse; width: 100%;'>
            <tr>
                <th style='border: 1px solid #000; padding: 8px;'>Durum</th>
                <th style='border: 1px solid #000; padding: 8px;'>Sayı</th>
            </tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td style='border: 1px solid #000; padding: 8px;'>" . $row['durum'] . "</td>
                <td style='border: 1px solid #000; padding: 8px;'>" . $row['durum_sayisi'] . "</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "Tabloda veri bulunamadı.";
}

$conn->close();
?>

</section><br><br>

		<section id="iletisim">
			<h2>İletişim Kanalları</h2>
      <!DOCTYPE html>

	<style>
		/* Harita öğesi için CSS kodları */
		#harita {
			float: right;
			margin-right: 80px;
		}
	</style>
  <br>
	<h1>AFAD İletişim Bilgileri</h1>

	<div id="harita">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3051.581085553732!2d32.86738295120186!3d39.92351487942372!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14d337af14c2c1a9%3A0x56d5d72e5e8a0396!2sAFAD!5e0!3m2!1str!2str!4v1650376588407!5m2!1str!2str" 
			width="700px" 
			height="250px" 
      margin-top="500px"
			style="border:5px;" 
			allowfullscreen="" 
			loading="lazy">
		</iframe>
	</div>
<br>
	<p>Telefon: 0 (312) 258 23 23</p>
  <br>
	<p>E-posta: basin.halklailiskiler@afad.gov.tr</p>
  <br>
	<p>Adres: Üniversiteler Mah. Dumlupınar Bulvarı No: 159 06800 Çankaya/Ankara</p><br>

		</section>
	</main>

	<footer>
		<p id="hak">Deprem &copy; 2023 | Siziz</p>
	</footer>

	<script src="script.js"></script>
</body>
</html>
</div>


<body>
<script>
        setTimeout(function() {
            document.querySelector('.alert').remove();
        }, 3000);



    </script>

    


</body>
</html
