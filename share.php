<html>
<head>
  <link rel="stylesheet" type="text/css" href="style4.css"/>
</head>

<body>
  <div id="S_C1">
    <img id="Enredadera" src="src/PASO7/GRAFICO.png" alt="Icono">
  </div>

  <div id="S_C2">
    <div id="S_C4">
      <img id="Frase1" src="src/PASO7/FRASE_1.png" alt="Icono">
    </div>
    <div id="S_C5">
      <img id="Frase2" src="src/PASO7/FRASE_2.png" alt="Icono">
    </div>
    <div id="S_C6">
      <img id="Frase3" src="src/PASO7/FRASE_3.png" alt="Icono">
    </div>
  </div>

  <div id="S_C3">
    <div id="S_C7">
      <img id="Icono" src="src/PASO7/ICON.png" alt="Icono">
    </div>
    <div id="S_C8">
      <img id="Btn" src="src/PASO7/BNT.png" alt="Icono">
      <img id="BtnH" src="src/PASO7/BNT_HOVER.png" alt="Icono">
    </div>
    <div id="S_C9">
      <div id="S_C10">
        <img id="Logo1" src="src/PASO7/LOGO_AI.png" alt="Icono">
      </div>
      <div id="S_C11">
        <img id="Logo2" src="src/PASO7/LOGO_VM.png" alt="Icono">
      </div>
    </div>
  </div>

  <div id="shareBtn" class="btn btn-success clearfix">Share</div>

  <script>
  document.getElementById('BtnH').onclick = function() {
    console.log("entro");
    FB.ui({
      method: 'share',
      display: 'popup',
      href: 'https://developers.facebook.com/docs/',
    }, function(response){});
  }
  </script>


</body>
</html>
