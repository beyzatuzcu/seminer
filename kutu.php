<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<!-- ilk soru-->
<style>

 input[type="checkbox"] {
	 display: none;
}
 input[type="checkbox"]:checked ~ label {
	 background-color:orange;
}
 input[type="checkbox"]:checked ~ label:after {
	 content: 'Cevap';
}
 input[type="checkbox"]:checked ~ .icerik {
	 max-height: 500px;
}
 label {
	 background-color: #105749;
	 border: 0;
	 width: 50px;
	 color: white;
	 padding: 8px 16px;
	 border-radius: 3px;
	 font-size: 11px;
	 cursor: pointer;
	 display: block;
	 width: 60px;
	 text-align: center;
}
 label:after {
	 content: 'Soru';
}
 .icerik {
	 margin-top: 20px;
	 max-height: 0;
	 transition: all 500ms ease;
	 overflow: hidden;
	 background-color: white;
	 width: 600px;
	 box-shadow: 3px 3px 1px white;
}
 .icerik h2 {
	 margin: 20px 20px 0 20px;
}
 .icerik p {
	 margin: 10px 20px 20px 20px;
	 line-height: 1.3em;
}
 .icerik a {
	 color: white;
	 text-decoration: none;
	 display: block;
	 text-align: right;
	 margin-top: 20px;
}
    </style>
<!-- ikinci soru-->
<style>

    input[type="checkbox"] {
        display: none;
   }
    input[type="checkbox"]:checked ~ label {
        background-color:orange;
   }
    input[type="checkbox"]:checked ~ label:after {
        content: 'Cevap';
   }
    input[type="checkbox"]:checked ~ .icerik2 {
        max-height: 500px;
   }
    label {
        background-color: #105749;
        border: 0;
        width: 50px;
        color: white;
        padding: 8px 16px;
        border-radius: 3px;
        font-size: 11px;
        cursor: pointer;
        display: block;
        width: 60px;
        text-align: center;
   }
    label:after {
        content: 'Soru';
   }
    .icerik2 {
        margin-top: 20px;
        max-height: 0;
        transition: all 500ms ease;
        overflow: hidden;
        background-color: white;
        width: 600px;
        box-shadow: 3px 3px 1px white;
   }
    .icerik2 h2 {
        margin: 20px 20px 0 20px;
   }
    .icerik2 p {
        margin: 10px 20px 20px 20px;
        line-height: 1.3em;
   }
    .icerik2 a {
        color: white;
        text-decoration: none;
        display: block;
        text-align: right;
        margin-top: 20px;
   }
       </style>


</head>
<body>
    <input type="checkbox" name="gizleGoster" id="gizleGoster" />
<label for="gizleGoster"></label>
<div class="icerik">
  <h2>Evlerin deprem riski nedir? Riski oluşturan unsurlar Nelerdir?</h2>
  <p>Evlerin deprem riski, birçok faktörden etkilenir. Bunlar arasında:

    Coğrafi konum: Evler, yıkıcı depremlerin daha sık meydana geldiği fay hatları ve deprem kuşakları üzerinde inşa edilirse, daha yüksek bir deprem riski taşırlar.
    
    Zemin özellikleri: Evlerin inşa edildiği zeminin özellikleri de deprem riskini etkiler. Örneğin, sert kaya tabakaları üzerine inşa edilen evler, yumuşak topraklara inşa edilen evlere göre daha az hasar görme olasılığına sahiptir.
    
    Yapısal sağlamlık: Evlerin yapısal sağlamlığı, deprem riskini etkileyen en önemli faktörlerden biridir. Yapısal olarak sağlam ve güçlü bir ev, depremde daha az hasar görme olasılığına sahiptir.
    
    Yapı malzemeleri: Evlerin inşa edildiği malzemeler de deprem riskini etkiler. Örneğin, betonarme yapılar, ahşap yapılar ve tuğla evler arasında farklı risk seviyeleri vardır.
    
    Yapısal tasarım: Evlerin yapısal tasarımı da deprem riskini etkiler. Doğru tasarlanmış yapılar, deprem sırasında daha az hasar görme olasılığına sahiptir.
    
    Yaş: Eski evler, modern yapı malzemeleri ve yapısal tasarım tekniklerinin kullanılmadığı için daha yüksek bir deprem riski taşıyabilir.
    
    Bu nedenle, evlerin deprem riski, yukarıdaki faktörlerin bir kombinasyonundan kaynaklanır ve ev sahipleri, depreme hazırlıklı olmak için evlerinin bu faktörlere uygun olarak inşa edildiğinden ve periyodik olarak bakımlarının yapıldığından emin olmalıdır.</p>
</div>
</body>
<body>
<input type="checkbox" name="gizleGoster2" id="gizleGoster2" />
<label for="gizleGoster2"></label>
<div class="icerik2">
  <h2>En yakın toplanma alanı nerede?</h2>
  <p>Evlerin deprem riski, birçok faktörden etkilenir. Bunlar arasında:</p>
</div>
</body>
<body>
    <input type="checkbox" name="gizleGoster3" id="gizleGoster3" />
    <label for="gizleGoster3"></label>
    <div class="icerik3">
      <h2>En yakın toplanma alanı nerede?</h2>
      <p>E</p>
    </div>
    </body>
</html>