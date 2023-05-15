

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


#analiz{
    flex-basis: 300px;
    height: 1000px;
    width: 100%;
    background-color: #105749;
    z-index: 0;
    text-align: justify;
}
h1, h3, p{
    color: #fff;
    text-align: center;
}


#btn{
    color: rgb(250, 247, 247);
    background-color: orange;
    border-radius: 20px;
    border: 1px solid orange;
    margin-top: 100px;
    margin-left: 650px;
    padding:20px;
    position: absolute;
    width: 200px;
    text-align: center;
}
#btn:hover{
    background-color: #ffffff;
    border-radius: 200px;
    border: 1px solid #105749;
    color: #105749;
    transition-duration: .3s;
}
#btn2{
    color: rgb(250, 247, 247);
    background-color: orange;
    border-radius: 20px;
    border: 1px solid orange;
    margin-top: 170px;
    margin-left: 650px;
    padding:20px;
    position: absolute;
    width: 200px;
    text-align: center;
}
#btn2:hover{
    background-color: #ffffff;
    border-radius: 200px;
    border: 1px solid #105749;
    color: #105749;
    transition-duration: .3s;
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
    <br><br><br><br>    <br><br><br><br>    <center>
    <h1>İtiraz Sonuç Ekranı</h1><br>
    <h3>Bireysel Başvuru İtiraz Ekranı</h3><br>
    <p>Bu allanda anlık gelen talepler tablosuna yer verilmiştir. Altta yer alan kısımlar da hasar durumlarına göre ayrılarak detaylandırılmıştır</p>
        <a href="bireyselanaliz.php"><div id="btn">Bireysel İtirazlar</div></a>
        <a href="tuzelanaliz.php"><div id="btn2">Tüzel İtirazlar</div></a>
    </center>
</div>
</body>
</head>
</html>