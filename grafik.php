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