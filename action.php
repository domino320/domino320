<!DOCTYPE html>
  <html lang="sk">
  <head>
    <meta charset="utf-8" >
    <link rel="stylesheet" href="css.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Biliard Club Café</title>
  <style>
  </style>
</head>
<body>

<div class="header">
  <h1>Biliard Club-Café</h1>
</div>

<div class="menu">
  <a class="active" href="index.html">Úvod</a>
  <a href="turnaje.html">Turnaje</a>
  <a href="rezervacia.html">Rezervácia</a>
  <a href="galeria.html">Galéria</a>
  <a href="vysledky.html">Výsledky</a>
  <a href="cennik.html">Cenník</a>
  <a href="kontakt.html">Kontakt</a>
  <a href="login/registration.php" style="float:right">Zaregistrovať sa</a>
  <a href="login/login.php" style="float:right">Prihlásiť sa</a>
</div>

<div class="polia">
  <div class="lavastrana">
    <div class="card">
    Ahoj <?php echo htmlspecialchars($_POST['name']); ?>, 
    tvoja rezervácia na telefónne číslo :  <?php echo (int)$_POST['number']; ?> bola zaregistrovaná.
</div>
  </div>
  <div class="pravastrana">
    <div class="prava">
      <h2>O nás</h2>
      <div class="onas" >
        <img class="onass" src="onas.jpg">
      </div>
      <p>Biliardová herňa s piatimi stolmi a snookerom,jukebox, stolný futbal, elektronické šípky, wifi-free, príjemne posedenie, rôzne akcie. Mestská liga v biliarde každú nedeľu o 14:00 hod. a turnaje počas celého roka!</p>
    </div>
    <div class="prava">
      <img class="giff" src="gif.gif">
    </div>
    <div class="prava">
      <h3>Zdieľajte a sledujte nás aj na Facebooku</h3>
      <a href="https://www.facebook.com/BiliardClubCafe/" class="fa fa-facebook"></a>
    </div>
  </div>
</div>

<div class="footer">
  <p>© 2021, Webový dizajn 2, Dominik Smetana (Biliard Club Café)</p>
                <script src="aktualny cas.js"></script>
                <script src="aktualny datum.js"></script>
</div>
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>
