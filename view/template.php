

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"/>
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.js"></script>
    <link rel="apple-touch-icon" sizes="57x57" href="image/logoVeloca.png">
<link rel="apple-touch-icon" sizes="60x60" href="image/logoVeloca.png">
<link rel="apple-touch-icon" sizes="72x72" href="image/logoVeloca.png">
<link rel="apple-touch-icon" sizes="76x76" href="image/logoVeloca.png">
<link rel="apple-touch-icon" sizes="114x114" href="image/logoVeloca.png">
<link rel="apple-touch-icon" sizes="120x120" href="image/logoVeloca.png">
<link rel="apple-touch-icon" sizes="144x144" href="image/logoVeloca.png">
<link rel="apple-touch-icon" sizes="152x152" href="image/logoVeloca.png">
<link rel="apple-touch-icon" sizes="180x180" href="image/logoVeloca.png">
<link rel="icon" type="image/logoVeloca.png" sizes="192x192"  href="image/logoVeloca.png">
<link rel="icon" type="image/logoVeloca.png" sizes="32x32" href="image/logoVeloca.png">
<link rel="icon" type="image/logoVeloca.png" sizes="96x96" href="image/logoVeloca.png">
<link rel="icon" type="image/logoVeloca.png" sizes="16x16" href="image/logoVeloca.png">
<link rel="manifest" href="/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
   
   
    <title><?= $title ?></title>
</head>

<body>

<audio src="image/marseille.mp3" id="sound"></audio>

<header>
<img src="image/logoVeloca.png" alt="" id="logo">
<ul>
     <a href="index.php?action=welcome"><li>Bienvenu</li></a>
       <a href="index.php?action=connect"> <li>Connexion</li></a>
   <a href="index.php?action=disconnect"> <li>Deconnexion</li> </a>

  
   <button id="btnAdmin"> 🔑 Admin</button>


</ul>





<div id="adminLink">
     
<a href="index.php?action=customer" id="cst"> <li> Liste des clients 👨‍👩‍👧‍👦</li> </a>
<a href="index.php?action=book" id="bk"> <li> Liste des réservations 📒</li> </a>



</div>

</header>



<?= $content ?>





<footer>

 
</footer>

<script src="js/main.js"></script>
</body>
</html>