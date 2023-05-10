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
<style>

h1 {
			color: #2f4f4f;
		}

		form, #sonuclar {
			max-width: 500px;
			margin: 0 auto;
		}

		input[type="text"], select, input[type="number"], input[type="button"] {
			padding: 8px;
			margin: 5px;
			border-radius: 5px;
			border: none;
			box-shadow: 1px 1px 1px #ccc;
			font-size: 16px;
			width: 100%;
		}

		input[type="button"] {
			background-color: #2f4f4f;
			color: #fff;
			cursor: pointer;
			transition: background-color 0.3s;
		}

		input[type="button"]:hover {
			background-color: #4d4d4d;
		}

		#sonuclar {
			display: none;
			text-align: center;
		}

		#sonuclar p span {
			font-weight: bold;
		}

		#sonuclar h2 {
			color: #2f4f4f;
			margin-top: 40px;
		}

		#sonuclar p {
			margin-bottom: 20px;
		}   
    #hesap{
    position: absolute;
    margin-left: 300px;
    margin-top: 100px;
    background-color: #fff;
    height: auto;
    width: auto;
    display: flex;

}
.adres {
	width: 600px;
		margin: 50px auto;
		padding: 20px;
		border: 0px solid #f7f7f7;
		background-color: #fff;
    display: flex;
		}
    

input[type=text], select, input[type=number] {
  width: 250px;
  padding: 10px;
  margin-bottom: 10px;
  border: 1px solid #ccc;
  border-radius: 4px;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 10px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}
</style>

  <div id="hesap">
    <div class="adres">
      <div id="adres-sorgulama">
        <h1>Deprem Riski Hesaplama Ekranı</h1><br>
        <label for="il">İl:</label><br>
        <input type="text" id="il" name="il"><br><br>
          
        <label for="ilce">İlçe:</label><br>
        <input type="text" id="ilce" name="ilce"><br><br>
          
        <label for="adres">Adres:</label><Br>
        <input type="text" id="adres" name="adres"><br><br>
          
        <label for="binayas">Binanızın Yaşı:</label><br>
        <input type="number" id="binayas" name="binayas" min="0"><br><br>
          
        <label for="zemintipi">Zemin Tipi:</label><br>
        <select id="zemintipi" name="zemintipi">
          <option value="0">Lütfen seçiniz</option><br>
          <option value="1">Kaya</option>
          <option value="2">Sert kaya</option>
          <option value="3">Kaya altı dolgu</option>
          <option value="4">Kumlu dolgu</option>
          <option value="5">Çamur ve gevşek toprak</option>
        </select><br><br>
          
        <label for="yapimalzemesi">Yapı Malzemesi:</label><br>
        <select id="yapimalzemesi" name="yapimalzemesi">
          <option value="">Lütfen seçiniz</option>
          <option value="Betonarme">Betonarme</option>
          <option value="Çelik">Çelik</option>
          <option value="Ahşap">Ahşap</option>
          <option value="Tuğla">Tuğla</option>
          <option value="Yığma Taş">Yığma Taş</option>
          <option value="Prefabrike">Prefabrike</option>
        </select>
        <br><br>
        <input type="button" value=" hesapla"  onclick="hesapla()">
      </div style="display:none;">
    
    </div> 
    <div id="sonuclar" style="display:none;">
    <br><br><br>    
    <br><br><br>
    <br><br><br>
        <h2>Sonuçlar</h2><bR>
        <p>Adres: <span id="adressonuc"></span></p><br>
        <p>Deprem Fayına Uzaklık: <span id="fayuzaklik"></span></p><br>
        <p>Deprem Risk Puanınız: <span id="riskpuan"></span></p><br>
        <p id="riskaciklama"></p>
        <br>
        <input type="button" value="Tekrar Hesapla" onclick="tekrarHesapla()">
      </div>
  </div>




<script>
    function hesapla() {
  // Form 
  var il = document.getElementById("il").value;
  var ilce = document.getElementById("ilce").value;
  var adres = document.getElementById("adres").value;
  var binayas = document.getElementById("binayas").value;
  var zemintipi = document.getElementById("zemintipi").value;
  var yapimalzemesi = document.getElementById("yapimalzemesi").value;
  
  // Deprem fayına uzaklık 
  var fayuzaklik = Math.random() * 20; 
  
  // Deprem risk puanı 
  var riskpuan = Math.random() * 10; 
  
  // Sonuç
  var sonuclarDiv = document.getElementById("sonuclar");
  var adresSpan = document.getElementById("adressonuc");
  var fayuzaklikSpan = document.getElementById("fayuzaklik");
  var riskpuanSpan = document.getElementById("riskpuan");
  var riskaciklamaP = document.getElementById("riskaciklama");
  
  adresSpan.innerHTML = adres;
  fayuzaklikSpan.innerHTML = fayuzaklik.toFixed(2) + " km";
  riskpuanSpan.innerHTML = riskpuan.toFixed(2);
  
  if (riskpuan < 3) {
    riskaciklamaP.innerHTML = "Düşük riskli bir bölgede yaşıyorsunuz.";
  } else if (riskpuan < 7) {
    riskaciklamaP.innerHTML = "Orta riskli bir bölgede yaşıyorsunuz.";
  } else {
    riskaciklamaP.innerHTML = "Yüksek riskli bir bölgede yaşıyorsunuz. Daha detaylı bilgi için yerel yönetimlerle iletişime geçebilirsiniz.";
  }
  
  sonuclarDiv.style.display = "block";
}

function tekrarHesapla() {
  location.reload();
}

</script>
</body>
</html>