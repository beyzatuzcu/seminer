

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
.container1 {
		
        flex-wrap: wrap;
              display: flex;
              justify-content: space-between;
      }
      .container2 {
            
        flex-wrap: wrap;
              display: flex;
              justify-content: space-between;
      }
      .container3 {
            
        flex-wrap: wrap;
              display: flex;
              justify-content: space-between;
      }
      .container4 {
            
        flex-wrap: wrap;
              display: flex;
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
    <a href="iller.php"><div id="iller">İller</div></a>

        <a href="home.php"><div id="talepler3">Sayfam</div></a>
        <a href="riskanalizi.php"><div id="talepler2">İtiraz Sonuç Ekranı</div></a>
        <a href="taleplerYonetici.php"><div id="talepler">Hasar Tespiti </div></a>
        <a href="giris.php"><div id="boosted-reality">Çıkış Yap</div></a>
        
        <a href="index.php"><div id="top-title">DEPREM - <span id="top-title-color">SİZİZ</span></div></a>
    </div>
</div>
<body>
<br><br><br><br><br><br>
<div class="container1">
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

// Verileri çekme
$query = "SELECT durum, COUNT(*) AS durum_sayisi FROM hasar_tespiti WHERE il = 'Adana' GROUP BY durum";
$result = $conn->query($query);

$data = array();
while ($row = $result->fetch_assoc()) {
    $data[] = $row;
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Adana İlinde Hasar Tespiti Pasta Grafiği</title>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', { 'packages': ['corechart'] });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = new google.visualization.DataTable();
            data.addColumn('string', 'Durum');
            data.addColumn('number', 'Durum Sayısı');

            <?php
            foreach ($data as $row) {
                echo "data.addRow(['" . $row['durum'] . "', " . $row['durum_sayisi'] . "]);";
            }
            ?>

            var options = {
                title: 'Adana İlinde Hasar Tespiti Durumu',
                is3D: true,
            };

            var chart = new google.visualization.PieChart(document.getElementById('adana'));
            chart.draw(data, options);
        }
    </script>
</head>
<body>
    <div id="adana" style="width: 100%; height: 500px;"></div>
</body>
</html>


</div>

<div class="container1">
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

// Verileri çekme
$query = "SELECT durum, COUNT(*) AS durum_sayisi FROM hasar_tespiti WHERE il = 'Adıyaman' GROUP BY durum";
$result = $conn->query($query);

$data = array();
while ($row = $result->fetch_assoc()) {
    $data[] = $row;
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Adıyaman İlinde Hasar Tespiti Pasta Grafiği</title>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', { 'packages': ['corechart'] });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = new google.visualization.DataTable();
            data.addColumn('string', 'Durum');
            data.addColumn('number', 'Durum Sayısı');

            <?php
            foreach ($data as $row) {
                echo "data.addRow(['" . $row['durum'] . "', " . $row['durum_sayisi'] . "]);";
            }
            ?>

            var options = {
                title: 'Adıyaman İlinde Hasar Tespiti Durumu',
                is3D: true,
            };

            var chart = new google.visualization.PieChart(document.getElementById('adymn'));
            chart.draw(data, options);
        }
    </script>
</head>
<body>
    <div id="adymn" style="width: 100%; height: 500px;"></div>
</body>
</html>
    </div>
    <div class="container1">
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

// Verileri çekme
$query = "SELECT durum, COUNT(*) AS durum_sayisi FROM hasar_tespiti WHERE il = 'Diyarbakır' GROUP BY durum";
$result = $conn->query($query);

$data = array();
while ($row = $result->fetch_assoc()) {
    $data[] = $row;
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Diyarbakır İlinde Hasar Tespiti Pasta Grafiği</title>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', { 'packages': ['corechart'] });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = new google.visualization.DataTable();
            data.addColumn('string', 'Durum');
            data.addColumn('number', 'Durum Sayısı');

            <?php
            foreach ($data as $row) {
                echo "data.addRow(['" . $row['durum'] . "', " . $row['durum_sayisi'] . "]);";
            }
            ?>

            var options = {
                title: 'Diyarbakır İlinde Hasar Tespiti Durumu',
                is3D: true,
            };

            var chart = new google.visualization.PieChart(document.getElementById('dyr'));
            chart.draw(data, options);
        }
    </script>
</head>
<body>
    <div id="dyr" style="width: 100%; height: 500px;"></div>
</body>
</html>
</div>
<div class="container1">
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

// Verileri çekme
$query = "SELECT durum, COUNT(*) AS durum_sayisi FROM hasar_tespiti WHERE il = 'Elazığ' GROUP BY durum";
$result = $conn->query($query);

$data = array();
while ($row = $result->fetch_assoc()) {
    $data[] = $row;
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Elazığ İlinde Hasar Tespiti Pasta Grafiği</title>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', { 'packages': ['corechart'] });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = new google.visualization.DataTable();
            data.addColumn('string', 'Durum');
            data.addColumn('number', 'Durum Sayısı');

            <?php
            foreach ($data as $row) {
                echo "data.addRow(['" . $row['durum'] . "', " . $row['durum_sayisi'] . "]);";
            }
            ?>

            var options = {
                title: 'Elazığ İlinde Hasar Tespiti Durumu',
                is3D: true,
            };

            var chart = new google.visualization.PieChart(document.getElementById('elz'));
            chart.draw(data, options);
        }
    </script>
</head>
<body>
    <div id="elz" style="width: 100%; height: 500px;"></div>
</body>
</html>
</div>
<div class="container1">
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

// Verileri çekme
$query = "SELECT durum, COUNT(*) AS durum_sayisi FROM hasar_tespiti WHERE il = 'Malatya' GROUP BY durum";
$result = $conn->query($query);

$data = array();
while ($row = $result->fetch_assoc()) {
    $data[] = $row;
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Malatya İlinde Hasar Tespiti Pasta Grafiği</title>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', { 'packages': ['corechart'] });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = new google.visualization.DataTable();
            data.addColumn('string', 'Durum');
            data.addColumn('number', 'Durum Sayısı');

            <?php
            foreach ($data as $row) {
                echo "data.addRow(['" . $row['durum'] . "', " . $row['durum_sayisi'] . "]);";
            }
            ?>

            var options = {
                title: 'Malatya İlinde Hasar Tespiti Durumu',
                is3D: true,
            };

            var chart = new google.visualization.PieChart(document.getElementById('mal'));
            chart.draw(data, options);
        }
    </script>
</head>
<body>
    <div id="mal" style="width: 100%; height: 500px;"></div>
</body>
</html>
</div>

<div class="container1">
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

// Verileri çekme
$query = "SELECT durum, COUNT(*) AS durum_sayisi FROM hasar_tespiti WHERE il = 'Gaziantep' GROUP BY durum";
$result = $conn->query($query);

$data = array();
while ($row = $result->fetch_assoc()) {
    $data[] = $row;
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Gaziantep İlinde Hasar Tespiti Pasta Grafiği</title>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', { 'packages': ['corechart'] });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = new google.visualization.DataTable();
            data.addColumn('string', 'Durum');
            data.addColumn('number', 'Durum Sayısı');

            <?php
            foreach ($data as $row) {
                echo "data.addRow(['" . $row['durum'] . "', " . $row['durum_sayisi'] . "]);";
            }
            ?>

            var options = {
                title: 'Gaziantep İlinde Hasar Tespiti Durumu',
                is3D: true,
            };

            var chart = new google.visualization.PieChart(document.getElementById('antp'));
            chart.draw(data, options);
        }
    </script>
</head>
<body>
    <div id="antp" style="width: 100%; height: 500px;"></div>
</body>
</html>
</div>
<div class="container1">
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

// Verileri çekme
$query = "SELECT durum, COUNT(*) AS durum_sayisi FROM hasar_tespiti WHERE il = 'Tunceli' GROUP BY durum";
$result = $conn->query($query);

$data = array();
while ($row = $result->fetch_assoc()) {
    $data[] = $row;
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tunceli İlinde Hasar Tespiti Pasta Grafiği</title>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', { 'packages': ['corechart'] });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = new google.visualization.DataTable();
            data.addColumn('string', 'Durum');
            data.addColumn('number', 'Durum Sayısı');

            <?php
            foreach ($data as $row) {
                echo "data.addRow(['" . $row['durum'] . "', " . $row['durum_sayisi'] . "]);";
            }
            ?>

            var options = {
                title: 'Tunceli İlinde Hasar Tespiti Durumu',
                is3D: true,
            };

            var chart = new google.visualization.PieChart(document.getElementById('kys'));
            chart.draw(data, options);
        }
    </script>
</head>
<body>
    <div id="kys" style="width: 100%; height: 500px;"></div>
</body>
</html>
</div>
<div class="container1">
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

// Verileri çekme
$query = "SELECT durum, COUNT(*) AS durum_sayisi FROM hasar_tespiti WHERE il = 'Kilis' GROUP BY durum";
$result = $conn->query($query);

$data = array();
while ($row = $result->fetch_assoc()) {
    $data[] = $row;
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Kilis İlinde Hasar Tespiti Pasta Grafiği</title>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', { 'packages': ['corechart'] });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = new google.visualization.DataTable();
            data.addColumn('string', 'Durum');
            data.addColumn('number', 'Durum Sayısı');

            <?php
            foreach ($data as $row) {
                echo "data.addRow(['" . $row['durum'] . "', " . $row['durum_sayisi'] . "]);";
            }
            ?>

            var options = {
                title: 'Kilis İlinde Hasar Tespiti Durumu',
                is3D: true,
            };

            var chart = new google.visualization.PieChart(document.getElementById('kil'));
            chart.draw(data, options);
        }
    </script>
</head>
<body>
    <div id="kil" style="width: 100%; height: 500px;"></div>
</body>
</html>
</div>
<div class="container1">
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

// Verileri çekme
$query = "SELECT durum, COUNT(*) AS durum_sayisi FROM hasar_tespiti WHERE il = 'Niğde' GROUP BY durum";
$result = $conn->query($query);

$data = array();
while ($row = $result->fetch_assoc()) {
    $data[] = $row;
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Niğde İlinde Hasar Tespiti Pasta Grafiği</title>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', { 'packages': ['corechart'] });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = new google.visualization.DataTable();
            data.addColumn('string', 'Durum');
            data.addColumn('number', 'Durum Sayısı');

            <?php
            foreach ($data as $row) {
                echo "data.addRow(['" . $row['durum'] . "', " . $row['durum_sayisi'] . "]);";
            }
            ?>

            var options = {
                title: 'Niğde İlinde Hasar Tespiti Durumu',
                is3D: true,
            };

            var chart = new google.visualization.PieChart(document.getElementById('n'));
            chart.draw(data, options);
        }
    </script>
</head>
<body>
    <div id="n" style="width: 100%; height: 500px;"></div>
</body>
</html>
</div>
<div class="container1">
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

// Verileri çekme
$query = "SELECT durum, COUNT(*) AS durum_sayisi FROM hasar_tespiti WHERE il = 'Osmaniye' GROUP BY durum";
$result = $conn->query($query);

$data = array();
while ($row = $result->fetch_assoc()) {
    $data[] = $row;
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Osmaniye İlinde Hasar Tespiti Pasta Grafiği</title>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', { 'packages': ['corechart'] });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = new google.visualization.DataTable();
            data.addColumn('string', 'Durum');
            data.addColumn('number', 'Durum Sayısı');

            <?php
            foreach ($data as $row) {
                echo "data.addRow(['" . $row['durum'] . "', " . $row['durum_sayisi'] . "]);";
            }
            ?>

            var options = {
                title: 'Osmaniye İlinde Hasar Tespiti Durumu',
                is3D: true,
            };

            var chart = new google.visualization.PieChart(document.getElementById('o'));
            chart.draw(data, options);
        }
    </script>
</head>
<body>
    <div id="o" style="width: 100%; height: 500px;"></div>
</body>
</html>
</div>
<div class="container1">
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

// Verileri çekme
$query = "SELECT durum, COUNT(*) AS durum_sayisi FROM hasar_tespiti WHERE il = 'Sivas' GROUP BY durum";
$result = $conn->query($query);

$data = array();
while ($row = $result->fetch_assoc()) {
    $data[] = $row;
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Sivas İlinde Hasar Tespiti Pasta Grafiği</title>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', { 'packages': ['corechart'] });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = new google.visualization.DataTable();
            data.addColumn('string', 'Durum');
            data.addColumn('number', 'Durum Sayısı');

            <?php
            foreach ($data as $row) {
                echo "data.addRow(['" . $row['durum'] . "', " . $row['durum_sayisi'] . "]);";
            }
            ?>

            var options = {
                title: 'Sivas İlinde Hasar Tespiti Durumu',
                is3D: true,
            };

            var chart = new google.visualization.PieChart(document.getElementById('s'));
            chart.draw(data, options);
        }
    </script>
</head>
<body>
    <div id="s" style="width: 100%; height: 500px;"></div>
</body>
</html>
</div>

<br><br><br><br>
</body>
</head>
</html>
