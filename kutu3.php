<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<style>
  .soru {
    margin-top: 20px;
    width: 600px;
    background-color: white;
    box-shadow: 3px 3px 1px white;
    display: flex;

  }
  
  input[type="checkbox"] {
    display: none;
    
  }
  
  input[type="checkbox"]:checked + label + div {
    max-height: 500px;
    transition: all 500ms ease;
  }
  
  input[type="checkbox"]:checked + label:after {
    content: 'Cevap';
  }
  
  input[type="checkbox"] + label:after {
    content: 'Soru';
  }
  
  input[type="checkbox"] + label {
    background-color: #105749;
    border: 0;
    width: 60px;
    color: white;
    padding: 8px 16px;
    border-radius: 3px;
    font-size: 11px;
    cursor: pointer;
    display: block;
    text-align: center;
    margin-bottom: 20px;
  }
  
  .icerik {
    max-height: 0;
    overflow: hidden;
    transition: all 500ms ease;
  }
  
  .icerik h2 {
    margin: 20px;
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
</head>
<body>
  <div class="soru">
    <input type="checkbox" id="soru1">
    <label for="soru1">Soru 1</label>
    <div class="icerik">
      <h2>İlk Soru</h2>
      <p>Bu ilk sorunun cevabı.</p>
    </div>

    <input type="checkbox" id="soru2">
    <label for="soru2">Soru 2</label>
    <div class="icerik">
      <h2>İkinci Soru</h2>
      <p>Bu ikinci sorunun cevabı.</p>
    </div>

    <input type="checkbox" id="soru3">
    <label for="soru3">Soru 3</label>
    <div class="icerik">
      <h2>Üçüncü Soru</h2>
      <p>Bu üçüncü sorunun cevabı.</p>
    </div>
    <input type="checkbox" id="soru4">
    <label for="soru4">Soru 4</label>
    <div class="icerik">
      <h2>dördüncü Soru</h2>
      <p>Bu dördüncü sorunun cevabı.</p>
    </div>
  </div>
</body>
</html>