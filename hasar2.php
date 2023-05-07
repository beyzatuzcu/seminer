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
    width: 100%;
}
        </style>
    <style>
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
	</style>
	<script>
		function kapat() {
			var uyari = document.getElementById("uyari");
			uyari.style.display = "none";
		}
	</script>

    <!--tc için css js -->
    <style>
h1 {
			text-align: center;
			margin-bottom: 20px;
		}
		.tc {
			max-width: 1000px;
			margin: 100px auto;
			padding: 20px;
			background-color: #fff;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
			border-radius: 10px;
		}
        .yapi {
			max-width: 1000px;
			margin: 100px auto;
			padding: 20px;
			background-color: #fff;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
			border-radius: 10px;
		}
        .adres {
			max-width: 1000px;
			margin: 100px auto;
			padding: 20px;
			background-color: #fff;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
			border-radius: 10px;
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
/* 
padding: boşluk
margin-bottom:  her bir girdi kutusu arasına bir boşluk */

		input[type="text"], input[type="number"] {
			padding: 10px;
			margin-bottom: 10px;
			border: 1px solid #ccc;
			border-radius: 5px;
			width:600px ;
			max-width: 500px;
		}

		input[name="guvenlik-kodu"] {
			width: 300px;
			margin-right: 10px;
            max-width: 500px;

		}

		.guvenlik-kodu {
			display: flex;
			align-items: center;
			margin-bottom: 10px;
		}

		.guvenlik-kodu img {
			margin-right: 10px;
		}

		.guvenlik-kodu span {
			font-weight: bold;
			font-size: 16px;
			color: #fff;
		}
        input[name="yguvenlik-kodu"] {
			width: 300px;
			margin-right: 10px;
            max-width: 500px;

		}

		.yguvenlik-kodu {
			display: flex;
			align-items: center;
			margin-bottom: 10px;
		}

		.yguvenlik-kodu img {
			margin-right: 10px;
		}

		.yguvenlik-kodu span {
			font-weight: bold;
			font-size: 16px;
			color: #fff;
		}
        .aguvenlik-kodu {
			display: flex;
			align-items: center;
			margin-bottom: 10px;
		}

		.aguvenlik-kodu img {
			margin-right: 10px;
		}

		.aguvenlik-kodu span {
			font-weight: bold;
			font-size: 16px;
			color: #fff;
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

	</style>
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
        <a href="arttirilmisgerceklik.php"><div id="boosted-reality">Arttırılmış Gerçekçilik</div></a>
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
    <!--<div class="tc">
        <h1>T.C. Kimlik Numarası İle Sorgulama </h1>
        <form id="tc-sorgulama">
            <div><label for="tc-no">T.C. Kimlik No:</label>
            <input type="text" id="tc-no" name="tc-no"  size="11" required></div>
            <div class="guvenlik-kodu">
                <label for="guvenlik-kodu">Güvenlik Kodu:</label><input type="text" id="guvenlik-kodu" name="guvenlik-kodu" placeholder="" maxlength="4" required>
                <img src="" alt="Güvenlik Kodu" id="guvenlik-kodu-img"><span id="guvenlik-kodu-sayi"></span>
                <button id="refresh-btn" type="button"><a href="hasar.php">Yenile</a></button>
            </div>
            <button type="submit" class="btn" onclick="showAnnouncement()">Sorgula</button>
        </form>
        <div id="sonuc"></div>
    </div> 
    
	<div class="yapi">
    <h1>Yapı Bilgileri İle Sorgulama</h1>
    <form id="yapi-sorgulama" method="POST" action="hasar.php">
        <div>
            <label for="aski_kodu">Askı No:</label>
            <input type="text" id="aski_kodu" name="aski_kodu"  size="11" required>
        </div>
        <div class="yguvenlik-kodu">
            <label for="guvenlik_no">Güvenlik Kodu:</label>
            <input type="text" id="guvenlik_no" name="guvenlik_no" placeholder="" maxlength="4" required>
            <img src="" alt="Güvenlik Kodu" id="yguvenlik-kodu-img">
            <span id="yguvenlik-kodu-sayi"></span>
            <button id="refresh-btn" type="button"><a href="hasar.php">Yenile</a></button>
        </div>
        <button type="submit" class="btn">Sorgula</button>
    </form>
</div>-->

<!--   <div class="adres">
        <h1>Adres Bilgileri İle Sorgulama</h1>
        
        <form id="adres-sorgulama">
            <div>
            <label for="il">İl:</label>
<select id="il" name="il">
<option value="">Seçiniz</option>
<option value="Adana">Adana</option>
<option value="Adıyaman">Adıyaman</option>
<option value="Afyonkarahisar">Afyonkarahisar</option>
</select>
<label for="ilce">İlçe:</label>
<select id="ilce" name="ilce">
<option value="">Seçiniz</option>
</select>
<label for="mahalle">Mahalle:</label>
<select id="mahalle" name="mahalle">
<option value="">Seçiniz</option>
</select>
</form>


            </div>
			<div class="aguvenlik-kodu">
				<label for="aguvenlik-kodu">Güvenlik Kodu:</label><input type="text" id="aguvenlik-kodu" name="aguvenlik-kodu" placeholder="" maxlength="4" required>
                <img src="" alt="Güvenlik Kodu" id="aguvenlik-kodu-img"><span id="aguvenlik-kodu-sayi"></span>
                <button id="refresh-btn" type="button"><a href="hasar.php">Yenile</a></button>
            </div>
            <button type="submit" class="btn">Sorgula</button>
        </form>
        <div id="sonuc"></div>
    </div>

<table id="sorguSonucu">
  <thead>
    <tr>
      <th>Askı Kodu</th>
      <th>Yapı Kimlik No</th>
      <th>İl</th>
      <th>İlçe</th>
      <th>Mahalle</th>
      <th>Sokak</th>
      <th>Bina No</th>
      <th>Durum</th>
      <th>İtiraz Sonucu</th>
    </tr>
  </thead>
  <tbody>

  </tbody>
</table>
-->
</div>

</div>
<!--tc için 
<script>
	// Güvenlik kodu için rastgele sayılar oluşturuluyor
	var guvenlikKoduSayi = Math.floor(Math.random() * 10000);
	var guvenlikKoduImg = document.getElementById('guvenlik-kodu-img');
	var guvenlikKoduSayiDiv = document.getElementById('guvenlik-kodu-sayi');
	guvenlikKoduSayiDiv.innerHTML = guvenlikKoduSayi;

	// Güvenlik kodu resmi oluşturuluyor
	var guvenlikKoduCanvas = document.createElement('canvas');
	guvenlikKoduCanvas.width = 100;
	guvenlikKoduCanvas.height = 50;
	var guvenlikKoduContext = guvenlikKoduCanvas.getContext('2d');
	guvenlikKoduContext.font = 'bold 30px Arial';
	guvenlikKoduContext.fillStyle = '#333';
	guvenlikKoduContext.fillText(guvenlikKoduSayi, 10, 35);
	guvenlikKoduImg.src = guvenlikKoduCanvas.toDataURL();

	// Form submit olayı
	var tcSorgulamaForm = document.getElementById('tc-sorgulama');
	tcSorgulamaForm.addEventListener('submit', function(e) {
		e.preventDefault();
		var tcNoInput = document.getElementById('tc-no');
		var guvenlikKoduInput = document.getElementById('guvenlik-kodu');
		var sonucDiv = document.getElementById('sonuc');

		// Girilen veriler alınıyor
		var tcNo = tcNoInput.value;
		var guvenlikKodu = guvenlikKoduInput.value;

		// Girilen güvenlik kodu doğru değilse hata mesajı gösteriliyor
		if (guvenlikKodu != guvenlikKoduSayi) {
			sonucDiv.innerHTML = '<div class="error">Girilen güvenlik kodu hatalı!</div>';
			// Güvenlik kodu yenileniyor
			guvenlikKoduSayi = Math.floor(Math.random() * 10000);
			guvenlikKoduSayiDiv.innerHTML = guvenlikKoduSayi;
			guvenlikKoduContext.clearRect(0, 0, 100, 50);
			guvenlikKoduContext.fillText(guvenlikKoduSayi, 10, 35);
			guvenlikKoduImg.src = guvenlikKoduCanvas.toDataURL();
		} else {
			// Girilen veriler doğruysa TC sorgusu yapılıyor
			sonucDiv.innerHTML = '<div class="success">TC Kimlik No doğru!</div>';
			// TC Kimlik No ve Güvenlik Kodu kutuları temizleniyor
			tcNoInput.value = '';
			guvenlikKoduInput.value = '';
		}
	});
</script>
yapi için
<script>
	// Güvenlik kodu için rastgele sayılar oluşturuluyor
	var yguvenlikKoduSayi = Math.floor(Math.random() * 10000);
	var yguvenlikKoduImg = document.getElementById('yguvenlik-kodu-img');
	var yguvenlikKoduSayiDiv = document.getElementById('yguvenlik-kodu-sayi');
	yguvenlikKoduSayiDiv.innerHTML = yguvenlikKoduSayi;

	// Güvenlik kodu resmi oluşturuluyor
	var yguvenlikKoduCanvas = document.createElement('canvas');
	yguvenlikKoduCanvas.width = 100;
	yguvenlikKoduCanvas.height = 50;
	var yguvenlikKoduContext = yguvenlikKoduCanvas.getContext('2d');
	yguvenlikKoduContext.font = 'bold 30px Arial';
	yguvenlikKoduContext.fillStyle = '#333';
	yguvenlikKoduContext.fillText(yguvenlikKoduSayi, 10, 35);
	yguvenlikKoduImg.src = yguvenlikKoduCanvas.toDataURL();

	// Form submit olayı
	var yapiSorgulamaForm = document.getElementById('yapi-sorgulama');
	yapiSorgulamaForm.addEventListener('submit', function(e) {
		e.preventDefault();
		var yapiNoInput = document.getElementById('yapi-no');
		var yguvenlikKoduInput = document.getElementById('yguvenlik-kodu');
		var sonucDiv = document.getElementById('sonuc');

		// Girilen veriler alınıyor
		var yapiNo = yapiNoInput.value;
		var yguvenlikKodu = yguvenlikKoduInput.value;

		// Girilen güvenlik kodu doğru değilse hata mesajı gösteriliyor
		if (yguvenlikKodu != yguvenlikKoduSayi) {
			sonucDiv.innerHTML = '<div class="error">Girilen güvenlik kodu hatalı!</div>';
			// Güvenlik kodu yenileniyor
			yguvenlikKoduSayi = Math.floor(Math.random() * 10000);
			yguvenlikKoduSayiDiv.innerHTML = yguvenlikKoduSayi;
			yguvenlikKoduContext.clearRect(0, 0, 100, 50);
			yguvenlikKoduContext.fillText(yguvenlikKoduSayi, 10, 35);
			yguvenlikKoduImg.src = yguvenlikKoduCanvas.toDataURL();
		} else {
			// Girilen veriler doğruysa Askı sorgusu yapılıyor
			sonucDiv.innerHTML = '<div class="success">Askı No doğru!</div>';
			// Askı No ve Güvenlik Kodu kutuları temizleniyor
			yapiNoInput.value = '';
			yguvenlikKoduInput.value = '';
		}
	});
</script>
adres için 
<script>
	// Güvenlik kodu için rastgele sayılar oluşturuluyor
	var aguvenlikKoduSayi = Math.floor(Math.random() * 10000);
	var aguvenlikKoduImg = document.getElementById('aguvenlik-kodu-img');
	var aguvenlikKoduSayiDiv = document.getElementById('aguvenlik-kodu-sayi');
	aguvenlikKoduSayiDiv.innerHTML = aguvenlikKoduSayi;

	// Güvenlik kodu resmi oluşturuluyor
	var aguvenlikKoduCanvas = document.createElement('canvas');
	aguvenlikKoduCanvas.width = 100;
	aguvenlikKoduCanvas.height = 50;
	var aguvenlikKoduContext = aguvenlikKoduCanvas.getContext('2d');
	aguvenlikKoduContext.font = 'bold 30px Arial';
	aguvenlikKoduContext.fillStyle = '#333';
	aguvenlikKoduContext.fillText(aguvenlikKoduSayi, 10, 35);
	aguvenlikKoduImg.src = aguvenlikKoduCanvas.toDataURL();

	// Form submit olayı
	var adresSorgulamaForm = document.getElementById('adres-sorgulama');
	adresSorgulamaForm.addEventListener('submit', function(e) {
		e.preventDefault();
		var adresNoInput = document.getElementById('yapi-no');
		var aguvenlikKoduInput = document.getElementById('aguvenlik-kodu');
		var sonucDiv = document.getElementById('asonuc');

		// Girilen veriler alınıyor
		var adresNo = yapiNoInput.value;
		var aguvenlikKodu = aguvenlikKoduInput.value;

		// Girilen güvenlik kodu doğru değilse hata mesajı gösteriliyor
		if (aguvenlikKodu != aguvenlikKoduSayi) {
			sonucDiv.innerHTML = '<div class="error">Girilen güvenlik kodu hatalı!</div>';
			// Güvenlik kodu yenileniyor
			aguvenlikKoduSayi = Math.floor(Math.random() * 10000);
			aguvenlikKoduSayiDiv.innerHTML = aguvenlikKoduSayi;
			aguvenlikKoduContext.clearRect(0, 0, 100, 50);
			aguvenlikKoduContext.fillText(aguvenlikKoduSayi, 10, 35);
			aguvenlikKoduImg.src = aguvenlikKoduCanvas.toDataURL();
		} else {
			// Girilen veriler doğruysa Askı sorgusu yapılıyor
			sonucDiv.innerHTML = '<div class="success">Adres doğru!</div>';
			// Askı No ve Güvenlik Kodu kutuları temizleniyor
			adresNoInput.value = '';
			aguvenlikKoduInput.value = '';
		}
	});
</script>
<script>
// il, ilçe ve mahalle selectlerinin optionlarını dinamik olarak oluşturmak için gerekli veriler
const ilceler = {
"Adana": [
"Aladağ",
"Ceyhan",
"Çukurova",
"Feke",
"İmamoğlu",
"Karaisalı",
"Karataş",
"Kozan",
"Pozantı",
"Saimbeyli",
"Sarıçam",
"Seyhan",
"Tufanbeyli",
"Yumurtalık",
"Yüreğir"
],
"Adıyaman": [
"Besni",
"Çelikhan",
"Gerger",
"Gölbaşı",
"Kahta",
"Merkez",
"Samsat",
"Sincik",
"Tut"
],
"Afyonkarahisar": [
"Başmakçı",
"Bayat",
"Bolvadin",
"Çay",
"Çobanlar",
"Dazkırı",
"Dinar",
"Emirdağ",
"Evciler",
"Hocalar",
"İhsaniye",
"İscehisar",
"Kızılören",
"Merkez",
"Sandıklı",
"Sincanlı",
"Sultandağı",
"Şuhut"
],
// diğer illerin verileri buraya eklenebilir
};
// il selecti değiştiğinde ilçe selectinin optionlarını güncelle
document.getElementById("il").addEventListener("change", function() {
		const ilceSelect = document.getElementById("ilce");
		const mahalleSelect = document.getElementById("mahalle");
		
		// ilçe selectindeki mevcut optionları sil
		ilceSelect.innerHTML = "<option value=''>Seçiniz</option>";
		mahalleSelect.innerHTML = "<option value=''>Seçiniz</option>";
		
		// ilçe selectine yeni optionları ekle
		const il = this.value;
		const ilceArray = ilceler[il];
		for (let i = 0; i < ilceArray.length; i++) {
			const option = document.createElement("option");
			option.text = ilceArray[i];
			option.value = ilceArray[i];
			ilceSelect.add(option);
		}
	});
	
	// ilçe selecti değiştiğinde mahalle selectinin optionlarını güncelle
	document.getElementById("ilce").addEventListener("change", function() {
		const mahalleSelect = document.getElementById("mahalle");
		
		// mahalle selectindeki mevcut optionları sil
		mahalleSelect.innerHTML = "<option value=''>Seçiniz</option>";
		
		// mahalle selectine yeni optionları ekle
		const ilce = this.value;
		const mahalleArray = mahalleler[ilce];
		for (let i = 0; i < mahalleArray.length; i++) {
			const option = document.createElement("option");
			option.text = mahalleArray[i];
			option.value = mahalleArray[i];
			mahalleSelect.add(option);
		}
	});
	
	// form submit edildiğinde sorgu sonucunu oluştur
	document.getElementById("sorguFormu").addEventListener("submit", function(event) {
		event.preventDefault();
		
		// sorgu sonucunu oluşturmak için gerekli veriler
		const sorguSonucu = [
			{
				"askiKodu": "1234",
				"yapiKimlikNo": "5678",
				"il": "Adana",
				"ilce": "Seyhan",
				"mahalle": "Şakirpaşa",
				"sokak": "Atatürk",
				"binaNo": "1",
				"durum": "Hasarlı",
				"itirazSonucu": "Reddedildi"
			},
			{
				"askiKodu": "4321",
				"yapiKimlikNo": "8765",
				"il": "Adana",
				"ilce": "Çukurova",
				"mahalle": "Beyazevler",
				"sokak": "Gazi Mustafa Kemal Bulvarı",
				"binaNo": "12",
				"durum": "Hasarsız",
				"itirazSonucu": "Kabul Edildi"
			}
			// diğer sorgu sonucu verileri buraya eklenebilir
		];
		
		// sorgu sonucu tablosunu oluştur
		const sorguSonucuTablosu= document.getElementById("sorguSonucu");
        // tablodaki mevcut satırları sil
		while (sorguSonucuTablosu.rows.length > 1) {
			sorguSonucuTablosu.deleteRow(1);
		}
		
		// sorgu sonucu verilerine göre yeni satırlar ekle
		for (let i = 0; i < sorguSonucu.length; i++) {
			const sorguSonucuVerisi = sorguSonucu[i];
			
			const newRow = sorguSonucuTablosu.insertRow(i + 1);
			
			const askiKoduCell = newRow.insertCell(0);
			askiKoduCell.innerHTML = sorguSonucuVerisi.askiKodu;
			
			const yapiKimlikNoCell = newRow.insertCell(1);
			yapiKimlikNoCell.innerHTML = sorguSonucuVerisi.yapiKimlikNo;
			
			const ilCell = newRow.insertCell(2);
			ilCell.innerHTML = sorguSonucuVerisi.il;
			
			const ilceCell = newRow.insertCell(3);
			ilceCell.innerHTML = sorguSonucuVerisi.ilce;
			
			const mahalleCell = newRow.insertCell(4);
			mahalleCell.innerHTML = sorguSonucuVerisi.mahalle;
			
			const sokakCell = newRow.insertCell(5);
			sokakCell.innerHTML = sorguSonucuVerisi.sokak;
			
			const binaNoCell = newRow.insertCell(6);
			binaNoCell.innerHTML = sorguSonucuVerisi.binaNo;
			
			const durumCell = newRow.insertCell(7);
			durumCell.innerHTML = sorguSonucuVerisi.durum;
			
			const itirazSonucuCell = newRow.insertCell(8);
			itirazSonucuCell.innerHTML = sorguSonucuVerisi.itirazSonucu;
		}
	});
</script>
-->
</body>
</html>