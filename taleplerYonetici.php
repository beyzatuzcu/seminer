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
    height: 1500px;
    width: 100%;
    background-color: #105749;
    z-index: 0;
    text-align: justify;
}
h1, h3, p{
    color: #fff;
    text-align: center;
}

		.container2 {
		
			flex-wrap: wrap;
            display: flex;
            justify-content: space-between;
		}
        .container3 {
			display: flex;
			flex-wrap: wrap;
            justify-content: space-between;
		}
        .container4 {
			display: flex;
			flex-wrap: wrap;
            justify-content: space-between;
		}


        .box {
            width: calc(33.33% - 10px);
            height: 100px;
            border: 2px solid black;
            box-sizing: border-box;
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
    <br><br><br><br><br><br><br><br>
    <h1>Hasar Tespiti</h1><br>
    <h3>Bireysel Başvuru Hasar Tespiti Analizi</h3><br>
    <p>Bu allanda anlık gelen talepler tablosuna ve taleplerin toplandığı bölge, il, ilçe bazlı grafiklerine yer verilmiştir. </p>
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

// Hasar Tespit Edildi olan kayıtların sorgusu
$sql_hte = "SELECT * FROM hasar_tespiti WHERE durum='Hasar Tespit Edildi'";

// Hasar Tespit Edildi olan kayıtların tabloya eklenmesi
$result_hte = mysqli_query($conn, $sql_hte);
if (mysqli_num_rows($result_hte) > 0) {
    
    echo "<table>";
    echo "<tr><th>Aşki Kodu</th><th>İl</th><th>İlçe</th><th>Mahalle</th><th>Sokak</th><th>Bina No</th><th>Durum</th><th>İtiraz Sonucu</th></tr>";
    while($row = mysqli_fetch_assoc($result_hte)) {
        echo "<tr><td>".$row["aski_kodu"]."</td><td>".$row["il"]."</td><td>".$row["ilce"]."</td><td>".$row["mahalle"]."</td><td>".$row["sokak"]."</td><td>".$row["bina_no"]."</td><td>".$row["durum"]."</td><td>".$row["itiraz_sonucu"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "Kayıt bulunamadı";
}
echo "<h3><br><br>Detaylı Gösterim Alanı<br><br><br><br></h3>";

mysqli_close($conn);
?>

<div class="container2">
    <div id=box>
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

            // Hasar Tespit Edildi olan kayıtların sorgusu
            $sql_hte = "SELECT * FROM hasar_tespiti WHERE durum='Hasar Tespit Edildi'";

            // İl verilerinin alınması
            $sql_il = "SELECT il, COUNT(*) as count FROM hasar_tespiti WHERE durum='Hasar Tespit Edildi' GROUP BY il";
            $result_il = mysqli_query($conn, $sql_il);

            // Chart'ın oluşturulması
            echo '<html>
            <head><center>
                <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                <script type="text/javascript">
                google.charts.load("current", {"packages":["corechart"]});
                google.charts.setOnLoadCallback(drawChart);
                function drawChart() {
                    var data = google.visualization.arrayToDataTable([';
                    echo "['İl', 'İl Bazlı Hasar Tespit Sayısı'],";
                    while($row = mysqli_fetch_assoc($result_il)) {
                        echo "['".$row["il"]."', ".$row["count"]."],";
                    }
                    echo ']);
                    var options = {
                    title: "İl Bazlı Hasar Tespit Sayıları",
                    is3D: true,
                    };
                    var chart = new google.visualization.PieChart(document.getElementById("piechart_3d"));
                    chart.draw(data, options);
                }
                </script>
            </center></head>
            <body>
                <div id="piechart_3d" style="width: 450px; height: 250px;"></div>
            </body>
            </html>';
            mysqli_close($conn);
        ?>

    </div>
    <div id=box>
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

            // Hasar Tespit Edildi olan kayıtların sorgusu
            $sql_hte = "SELECT * FROM hasar_tespiti WHERE durum='Hasar Tespit Edildi'";

            // İlce verilerinin alınması
            $sql_ilce = "SELECT ilce, COUNT(*) as count FROM hasar_tespiti WHERE durum='Hasar Tespit Edildi' GROUP BY ilce";
            $result_ilce = mysqli_query($conn, $sql_ilce);

            // Chart'ın oluşturulması
            echo '<html>
            <head>
                <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                <script type="text/javascript">
                google.charts.load("current", {"packages":["corechart"]});
                google.charts.setOnLoadCallback(drawChart);
                function drawChart() {
                    var data = google.visualization.arrayToDataTable([';
                    echo "['İlce', 'İlçe Bazlı Hasar Tespit Sayısı'],";
                    while($row = mysqli_fetch_assoc($result_ilce)) {
                        echo "['".$row["ilce"]."', ".$row["count"]."],";
                    }
                    echo ']);
                    var options = {
                    title: "İlçe Bazlı Hasar Tespit Sayıları",
                    is3D: true,
                    };
                    var chart = new google.visualization.PieChart(document.getElementById("piechart_3d2"));
                    chart.draw(data, options);
                }
                </script>
            </head>
            <body>
                <div id="piechart_3d2" style="width: 450px; height: 250px;"></div>
            </body>
            </html>';
            mysqli_close($conn);
        ?>
    </div>
    <div id=box>
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

            // Hasar Tespit Edildi olan kayıtların sorgusu
            $sql_hte = "SELECT * FROM hasar_tespiti WHERE durum='Hasar Tespit Edildi'";

            // mahalle verilerinin alınması
            $sql_mahalle = "SELECT mahalle, COUNT(*) as count FROM hasar_tespiti WHERE durum='Hasar Tespit Edildi' GROUP BY mahalle";
            $result_mahalle = mysqli_query($conn, $sql_mahalle);

            // Chart'ın oluşturulması
            echo '<html>
            <head>
                <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                <script type="text/javascript">
                google.charts.load("current", {"packages":["corechart"]});
                google.charts.setOnLoadCallback(drawChart);
                function drawChart() {
                    var data = google.visualization.arrayToDataTable([';
                    echo "['Mahalle', 'Mahalle Bazlı Hasar Tespit Sayısı'],";
                    while($row = mysqli_fetch_assoc($result_mahalle)) {
                        echo "['".$row["mahalle"]."', ".$row["count"]."],";
                    }
                    echo ']);
                    var options = {
                    title: "Mahalle Bazlı Hasar Tespit Sayıları",
                    is3D: true,
                    };
                    var chart = new google.visualization.PieChart(document.getElementById("piechart_3d3"));
                    chart.draw(data, options);
                }
                </script>
            </head>
            <body>
                <div id="piechart_3d3" style="width: 450px; height: 250px;"></div>
            </body>
            </html>';
            mysqli_close($conn);
        ?>
    </div>
</div>
<br><br>
<div class="container3">
    <div class="box">
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "seminer";

        // Veritabanı bağlantısını oluştur
        $conn = mysqli_connect($servername, $username, $password, $dbname);

        // Bağlantıyı kontrol et
        if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
        }

        // Hasar Tespit Edildi olan kayıtların sorgusu
        $sql_hte = "SELECT * FROM hasar_tespiti WHERE durum='Hasar Tespit Edildi'";

        // Mahalle verilerinin alınması
        $sql_mahalle = "SELECT mahalle, COUNT(*) as count FROM hasar_tespiti WHERE durum='Hasar Tespit Edildi' GROUP BY mahalle";
        $result_mahalle = mysqli_query($conn, $sql_mahalle);

        // Mahalle adları ve hasar sayıları için boş dizi tanımlama
        $mahalleler = array();
        $hasar_sayilari = array();

        // Veritabanından alınan mahalle verilerini diziye aktar
        if (mysqli_num_rows($result_mahalle) > 0) {
        while($row = mysqli_fetch_assoc($result_mahalle)) {
        array_push($mahalleler, $row["mahalle"]);
        array_push($hasar_sayilari, $row["count"]);
        }
        }
        // Veritabanı bağlantısını kapat
        mysqli_close($conn);
        ?>

<!DOCTYPE html>
<html>
<head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);
        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Mahalle', 'Hasar Sayısı'],
                <?php 
                // Dizideki her bir eleman için veri satırı oluşturma
                for($i = 0; $i < count($mahalleler); $i++) {
                    echo "['" . $mahalleler[$i] . "', " . $hasar_sayilari[$i] . "],";
                }
                ?>
            ]);

            var options = {
                title: 'Hasar Tespit Edildi Durumuna Göre Mahallelerdeki Hasar Sayısı',
                hAxis: {
                    title: 'Mahalle'
                },
                vAxis: {
                    title: 'Hasar Sayısı'
                }
            };

            var chart = new google.visualization.ColumnChart(document.getElementById('chart_div'));
            chart.draw(data, options);
        }
    </script>
</head>
<body>
    <div id="chart_div" style="width: 900px; height: 500px;"></div>
</body>
</html>
</div>

<div class="box">
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "seminer";

// Veritabanı bağlantısını oluştur
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Bağlantıyı kontrol et
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Hasar Tespit Edildi olan kayıtların sorgusu
$sql_hte = "SELECT * FROM hasar_tespiti WHERE durum='Hasar Tespit Edildi'";

// Mahalle verilerinin alınması
$sql_mahalle = "SELECT mahalle, COUNT(*) as count FROM hasar_tespiti WHERE durum='Hasar Tespit Edildi' GROUP BY mahalle";
$result_mahalle = mysqli_query($conn, $sql_mahalle);

// Mahalle adları ve hasar sayıları için boş dizi tanımlama
$mahalleler = array();
$hasar_sayilari = array();

// Veritabanından alınan mahalle verilerini diziye aktar
if (mysqli_num_rows($result_mahalle) > 0) {
    while($row = mysqli_fetch_assoc($result_mahalle)) {
        array_push($mahalleler, $row["mahalle"]);
        array_push($hasar_sayilari, $row["count"]);
    }
}

// Veritabanı bağlantısını kapat
mysqli_close($conn);
?>

<html>
<head>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ['Mahalle', 'Hasar Sayısı'],
        <?php
        for($i = 0; $i < count($mahalleler); $i++) {
          echo "['" . $mahalleler[$i] . "', " . $hasar_sayilari[$i] . "],";
        }
        ?>
      ]);

      var options = {
        title: 'Hasar Tespit Edildi olan kayıtların mahalle bazlı dağılımı',
        width: 900,
        height: 500
      };

      var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
      chart.draw(data, options);
    }
  </script>
</head>
<body>
  <div id="chart_div"></div>
</body>
</html>



</div>
</div>
    
</body></center>
</html>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js">

    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawCharts);
    function drawCharts() {
  // İl
    $sql_il = "SELECT il, COUNT(*) AS count FROM hasar_tespiti GROUP BY il";
    $result_il = mysqli_query($GLOBALS['conn'], $sql_il);
    $data_il = array();
    while ($row = mysqli_fetch_assoc($result_il)) {
        array_push($data_il, array("label" => $row["il"], "y" => $row["count"]));
    }

    // İlçe
    $sql_ilce = "SELECT ilce, COUNT(*) AS count FROM hasar_tespiti GROUP BY ilce";
    $result_ilce = mysqli_query($GLOBALS['conn'], $sql_ilce);
    $data_ilce = array();
    while ($row = mysqli_fetch_assoc($result_ilce)) {
        array_push($data_ilce, array("label" => $row["ilce"], "y" => $row["count"]));
    }

    // Mahalle
    $sql_mahalle = "SELECT mahalle, COUNT(*) AS count FROM hasar_tespiti GROUP BY mahalle";
    $result_mahalle = mysqli_query($GLOBALS['conn'], $sql_mahalle);
    $data_mahalle = array();
    while ($row = mysqli_fetch_assoc($result_mahalle)) {
        array_push($data_mahalle, array("label" => $row["mahalle"], "y" => $row["count"]));
    }
</script>
