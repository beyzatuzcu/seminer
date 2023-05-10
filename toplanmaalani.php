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
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
		integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
		crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="index.css">
	<link rel="stylesheet" href="">
	<style>
		html {
			scroll-behavior: smooth;
		}

		* {
			margin: 0;
		}
	</style>
	<script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
	<!--uyarı mesajı -->
	<script>
		function showAnnouncement() {
			alert(
				"Güncel İkamet Adresi: CUMHURİYET MAH. 2534 SK. NO: 18 İÇ KAPI NO: 2 MERKEZ / ADIYAMAN Hasar Tespite Konu MAKS Yapı Kimlik Numarası / Kaynak	:	241521277   BinaNo Güncel Adres Hasar Tespiti	:	Acil Yıktırılacak"
				);
		}
	</script>
	<style>
		#hasar {
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
			margin-top: 100px;
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

		input[type="text"],
		input[type="number"] {
			padding: 10px;
			margin-bottom: 10px;
			border: 1px solid #ccc;
			border-radius: 5px;
			width: 600px;
			max-width: 500px;
		}

		.btn {
			padding: 10px;
			width: 1000px;
			background-color: #105749;
			;
			color: #fff;
			border: none;
			border-radius: 10px;
			cursor: pointer;
			transition: all 0.3s ease;
		}

		.btn:hover {
			background-color: #105749;
			;
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
			<a href="cbs.php">
				<div id="cbs">CBS</div>
			</a>
			<a href="risk.php">
				<div id="risk-analys">Risk Analizi</div>
			</a>
			<a href="hasar.php">
				<div id="damage-show">Hasar Tespiti</div>
			</a>
			<a href="onlem.php">
				<div id="info">Önlemler</div>
			</a>
			<a href="index.php#ended">
				<div id="sss">SSS</div>
			</a>
			<a href="giris.php">
				<div id="open-ticket">GİRİŞ</div>
			</a>
			<a href="deprembilgi.php"><div id="boosted-reality">DepremBilgi</div></a>

			<a href="index.php">
				<div id="top-title">DEPREM - <span id="top-title-color">SİZİZ</span></div>
			</a>
		</div>
	</div>
	<div>
		<!DOCTYPE html>
		<html>

		<head>
			<meta charset="utf-8">
			<title>Afet ve Acil Durum Toplanma Alanı Sorgulama</title>
			<style>
				body {
					font-family: Arial, sans-serif;
					background-color: #f2f2f2;
				}

				h1 {
					text-align: center;
					margin-top: 50px;
					color: #333;
				}

				/*form {
					margin: 50px auto;
					width: 80%;
					max-width: 600px;
					background-color: #fff;
					padding: 30px;
					border-radius: 10px;
					box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.3);
				}*/

				label {
					display: block;
					margin-bottom: 10px;
					color: #666;
				}

				input[type="text"],
				select {
					width: 100%;
					padding: 10px;
					border-radius: 5px;
					border: 1px solid #ccc;
					margin-bottom: 20px;
				}

				input[type="submit"] {
					background-color: #333;
					color: #fff;
					border: none;
					padding: 10px 20px;
					border-radius: 5px;
					cursor: pointer;
				}

				input[type="submit"]:hover {
					background-color: #555;
				}
			</style>

		</head>

		<body>
			<center>
				<br><br><br><br> <br><br>


				<h2>Toplanma Alanı Sorgulama</h2>
				<br><br><br><br>

				<form  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
				<div class="card">

				<div class="card-group">
					<div class="form-group row">
						<label for="il" class="col-sm-2 col-form-label">İl:</label>
						<div class="col-sm-10">
							<input type="text" id="il" name="il" class="form-control"><br>
						</div>
					</div>
					<div class="form-group row">

						<label for="ilce" class="col-sm-2 col-form-label">İlçe:</label>
						<div class="col-sm-10">
							<input type="text" id="ilce" name="ilce"  class="form-control"><br>
						</div>
					</div>
					<div class="form-group row">
						<label for="mahalle" class="col-sm-2 col-form-label">Mahalle:</label>
						<div class="col-sm-10">
							<input type="text" id="mahalle" name="mahalle"  class="form-control"><br>
						</div>
					</div>
					<!--<div class="form-group row">
						<label for="sokak" class="col-sm-2 col-form-label">Cadde/Sokak:</label>
						<div class="col-sm-10">
							<input type="text" id="sokak" name="sokak"  class="form-control"><br>
						</div>
					</div>-->

					<input type="submit" value="Sorgula">
			</div>
			</div>


			
				</form>

				

				<?php
    // Form submit edildiyse
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "seminer";

        // Veritabanına bağlanma
        $conn = mysqli_connect($servername, $username, $password, $dbname);

        // Bağlantı hatası kontrolü
        if (!$conn) {
            die("Veritabanına bağlanırken bir hata oluştu: " . mysqli_connect_error());
        }

        // Sorgu oluşturma
        $il = $_POST['il'];
        $ilce = $_POST['ilce'];
        $mahalle = $_POST['mahalle'];
        //$sokak = $_POST['sokak'];

        $sql = "SELECT ad, adres FROM toplanma_alani 
                WHERE il = '$il' AND ilce = '$ilce' AND mahalle = '$mahalle'";


        // Sorguyu çalıştırma
        $result = mysqli_query($conn, $sql);

        // Sonuçları işleme
        if (mysqli_num_rows($result) > 0) {
            echo "<br><br><h2>Sonuçlar:</h2> <br>";
            // Sonuçlar varsa, verileri döngü ile al
            while($row = mysqli_fetch_assoc($result)) {
				echo "<p>Adı: " . $row["ad"]. "</p> <br>";
				echo "<p>Adresi: " . $row["adres"]. "</p>";
            }
        } else {
            echo "<p>Kayıt bulunamadı</p>";
        }

        mysqli_close($conn);
    }
?>


			</center>

	</div>
</body>

</html>