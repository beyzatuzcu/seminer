

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
  font-size: 36px;
  background-color: #f9f9f9;
  width: 1000px;
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
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: #4CAF50;
  color: white;
}

tbody{
  height: 200px;
  overflow-y: scroll;
  display: block;
}

thead, tbody tr {
  display: table;
  width: 100%;
  table-layout: fixed;
}

thead {
  width: calc( 100% - 1em )
}

table {
  width: 100%;
  margin: 0;
  border-collapse: collapse;
  border-spacing: 0;
  font-size: 1em;
  font-family: sans-serif;
  display: block;
  overflow-x: auto;
  white-space: nowrap;
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
form {
  display: inline-block;
  background-color: #f2f2f2;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
}

input[type="text"] {
  padding: 5px;
  border: none;
  border-radius: 3px;
  outline: none;
}

input[type="submit"] {
  background-color: #4CAF50;
  color: #fff;
  border: none;
  border-radius: 3px;
  padding: 5px 15px;
  cursor: pointer;
}


/* Arama sonuçları stilleri */
#searchResults {
  list-style: none;
  margin: 0;
  padding: 0;
}

#searchResults li {
  margin: 10px 0;
  padding: 10px;
  background: #f8f8f8;
  border-radius: 5px;
  font-size: 14px;
  line-height: 1.5;
  box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
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
<body>
<div id="analiz">
    <br><br><br><br>    <br><br><br><br>
    <h1>İtiraz Sonuç Ekranı</h1><br>
    <h3>Bireysel Başvuru İtiraz Ekranı</h3><br>
    <p>Bu allanda anlık gelen talepler tablosuna yer verilmiştir. Altta yer alan kısımlar da hasar durumlarına göre ayrılarak detaylandırılmıştır</p>

    <center>
        <br><br>
        <form method="get">
  <div class="search-box">
    <input type="text" name="query" placeholder="İl Müdürlüğü Arama">
    <button type="submit"><i class="fa fa-search"></i></button>
  </div>
</form>

    <br><br>
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
	if (isset($_GET["query"])) {
		$query = $_GET["query"];

// Veritabanında arama yap
$sql = "SELECT * FROM kisiler WHERE il_mudurlugu LIKE '%$query%'";
$result = mysqli_query($conn, $sql);

// Tabloyu yazdır
echo "<table>";
echo "<table width='800'><tr><th>İl</th><th>İlçe</th><th>Adres</th><th>İl Müdürlüğü</th><th>Dilekçe Metni</th></tr>";

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
      echo "<tr><td>".$row["il"]."</td><td>".$row["ilce"]."</td><td>".$row["adres"]."</td><td>".$row["il_mudurlugu"]."</td><td>".$row["dilekce_metni"]."</td></tr>";
    }
} else {
    echo "<tr><td colspan='9'>Arama sonucu bulunamadı</td></tr>";
}

echo "</table>";

		} else {
		    //echo "Arama sonucu bulunamadı";
		}
	

	mysqli_close($conn);
	?>


<ul id="searchResults"></ul>
<br>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "seminer";

// Veritabanı bağlantısını oluştur
$conn = new mysqli($servername, $username, $password, $dbname);

// Bağlantıyı kontrol et
if ($conn->connect_error) {
  die("Bağlantı hatası: " . $conn->connect_error);
}

// Verileri seç
$sql = "SELECT * FROM kisiler";
$result = $conn->query($sql);

// Tablo oluştur
if ($result->num_rows > 0) {
  echo "<table width='1000'><tr><th>İl</th><th>İlçe</th><th>Adres</th><th>İl Müdürlüğü</th><th>Dilekçe Metni</th></tr>";
  // Her satır için verileri ekrana yazdır
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>".$row["il"]."</td><td>".$row["ilce"]."</td><td>".$row["adres"]."</td><td>".$row["il_mudurlugu"]."</td><td>".$row["dilekce_metni"]."</td></tr>";
  }
  echo "</table>";
} else {
  echo "Kayıt bulunamadı";
}
$conn->close();

?>
<style>
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: #4CAF50;
  color: white;
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
tbody{
  height: 200px;
  overflow-y: scroll;
  display: block;
}

thead, tbody tr {
  display: table;
  width: 100%;
  table-layout: fixed;
}

thead {
  width: calc( 100% - 1em )
}

table {
  width: 100%;
  margin: 0;
  border-collapse: collapse;
  border-spacing: 0;
  font-size: 1em;
  font-family: sans-serif;
  display: block;
  overflow-x: auto;
  white-space: nowrap;
}

</style>
<style>
table {
  width: 100%; /* Tablonun yüzde olarak genişliği */
  max-width: 1000px; /* Tablonun en fazla alabileceği genişlik */
  margin: 0 auto; /* Tabloyu ortalamak için */
}


th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: #4CAF50;
  color: white;
}

tbody{
  height: 900px;
  overflow-y: scroll;
  display: block;
}

thead, tbody tr {
  display: table;
  width: 100%;
  table-layout: fixed;
}

thead {
  width: calc( 100% - 1em )
}

table {
  width: 100%;
  margin: 0;
  border-collapse: collapse;
  border-spacing: 0;
  font-size: 1em;
  font-family: sans-serif;
  display: block;
  overflow-x: auto;
  white-space: nowrap;
}

</style>

</center>
</div>


</body>
</html>
<script>
    // Arama kutusunu seçin
const search = document.getElementById('search');

// Arama sonuçlarının görüntüleneceği liste öğesini seçin
const searchResults = document.getElementById('searchResults');

// Tüm sayfadaki metni seçin
const pageText = document.body.innerText;

// Arama kutusunda herhangi bir değişiklik olduğunda çalışacak fonksiyon
search.addEventListener('input', () => {
  // Arama kutusundaki metni alın
  const searchTerm = search.value.toLowerCase();

  // Arama sonuçlarını temizleyin
  searchResults.innerHTML = '';

  // Eğer arama kutusu boş ise sonuçları göstermeyin
  if (searchTerm === '') {
    return;
  }

  // Sayfadaki metinde arama yapın
  const matches = pageText.match(new RegExp(searchTerm, 'gi'));

  // Her eşleşen sonucu gösterin
  matches.forEach(match => {
    const li = document.createElement('li');
    li.innerText = match;
    searchResults.appendChild(li);
  });
});

</script>