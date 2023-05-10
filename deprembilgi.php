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
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Afet Bilgi Sistemi</title>
    <link rel="stylesheet" href="style.css">
</head>
<style>
	body {
    font-family: sans-serif;
    margin: 0;
    padding: 0;
}

header {
    background-color: #eee;
    padding: 20px;
}

h1 {
    margin: 0;
}

main {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
}

.button-group {
    display: flex;
    justify-content: center;
    margin-bottom: 20px;
}

.button {
    display: inline-block;
    background-color: #4CAF50;
    color: white;
    text-align: center;
    text-decoration: none;
    padding: 14px 20px;
    border: none;
    border-radius: 10px;
    transition: background-color 0.3s;
    margin-right: 10px;
    cursor: pointer;
}

.button:hover {
    background-color: #3e8e41;
}

form {
  display: flex;
  flex-direction: column;
  align-items: center;
  margin: 50px auto;
  width: 50%;
}

label {
  font-size: 18px;
  margin-bottom: 10px;
}

select {
  padding: 10px;
  font-size: 16px;
  border: none;
  border-radius: 5px;
  margin-bottom: 20px;
}





</style>
<body>

  <center><br><br><br><br><br><br> <h1>Afet Bilgi Sistemi</h1><br><br><br> </center>

  <main>
    <div class="button-group">
      <a href="https://www.google.com/maps/" target="_blank" class="button">Haritalar</a>
      <a href="https://cdn.afetbilgi.com/md-pdf/tr/afetbilgi.pdf" class="button">PDF'ler</a>
    </div>
    <form action="" method="get">
      <select name="il" id="il">
        <option value="">--Şehir Seçiniz--</option>
        <option value="Adana">Adana</option>
        <option value="Adıyaman">Adıyaman</option>
        <option value="Diyarbakır">Diyarbakır</option>
        <option value="Gaziantep">Gaziantep</option>
        <option value="Hatay">Hatay</option>
        <option value="Kahramanmaraş">Kahramanmaraş</option>
        <option value="Kilis">Kilis</option>
        <option value="Malatya">Malatya</option>
        
        <option value="Osmaniye">Osmaniye</option>
        <option value="Şanlıurfa">Şanlıurfa</option>
      </select>
      <button type="submit" class="button">Göster</button>
    </form>
  </main>

  <?php
  if (isset($_GET['il'])) {
    $il = $_GET['il'];
    switch ($il) {
      case 'Adana':
        header("Location: https://cdn.afetbilgi.com/md-pdf/tr/Adana.pdf");
        break;
      case 'Adıyaman':
        header("Location: https://cdn.afetbilgi.com/md-pdf/tr/Ad%C4%B1yaman.pdf");
        break;
      case 'Diyarbakır':
        header("Location: https://cdn.afetbilgi.com/md-pdf/tr/Diyarbak%C4%B1r.pdf");
        break;
      case 'Gaziantep':
        header("Location: https://cdn.afetbilgi.com/md-pdf/tr/Gaziantep.pdf");
        break;
      case 'Hatay':
        header("Location: https://cdn.afetbilgi.com/md-pdf/tr/Hatay.pdf");
        break;
      case 'Kahramanmaraş':
        header("Location: https://cdn.afetbilgi.com/md-pdf/tr/Kahramanmara%C5%9F.pdf");
        break;
      case 'Kilis':
        header("Location: https://cdn.afetbilgi.com/md-pdf/tr/Kilis.pdf");
        break;
      case 'Malatya':
        header("Location: https://cdn.afetbilgi.com/md-pdf/tr/Malatya.pdf");
        break;
      //case 'Elazığ':
        //header("Location: elazig.php");
        //break;
      case 'Osmaniye':
        header("Location: https://cdn.afetbilgi.com/md-pdf/tr/Osmaniye.pdf");
        break;
      case 'Şanlıurfa':
        header("Location: https://cdn.afetbilgi.com/md-pdf/tr/%C5%9Eanl%C4%B1urfa.pdf");
        break;
    }
  }
  ?>

</body>
<center>
<div class="section">
  <div class="box">
    <h2>Genel İhtiyaçlar</h2><br>
    <p>Bu bölümde, afet sırasında temel ihtiyaçları karşılamak için gerekli olan bilgilere ulaşabilirsiniz.</p>
	<a href="tahliye.php" class="button">Tahliye Noktaları</a>
<br>
  </div>
  <div class="box">
    <h2>Önemli Kaynaklar</h2><br>
    <p>Bu bölümde, afet öncesinde ve sonrasında faydalı olabilecek kaynaklara ulaşabilirsiniz.</p>
	<a href="telefon.php" class="button">Önemli Telefonlar</a>
	<a href="siteler.php" class="button">Önemli Web Siteleri</a>
<br>
  </div>
  <div class="box">
    <h2>Sağlık Servisleri</h2><br>
    <p>Bu bölümde, afet sırasında sağlık hizmetleri ve acil durumlarla ilgili bilgilere ulaşabilirsiniz.</p>
	<a href="eczane.php" class="button">Konteyner Eczane</a><br>
  </div>
</div></center>







</html>