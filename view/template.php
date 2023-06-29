

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" />
   
   
    <title><?= $title ?></title>
</head>

<body>

<header>
<img src="image/logoVeloca.png" alt="" id="logo">
<ul>
     <a href="index.php?action=welcome"><li>Bienvenu</li></a>
       <a href="index.php?action=connect"> <li>Connexion</li></a>
   <a href="index.php?action=disconnect"> <li>Deconnexion</li> </a>

  



</ul>



<div id="adminLink">

<a href="index.php?action=member" id="memb"> <li> Liste des membres 👨‍👩‍👧‍👦</li> </a>
<a href="index.php?action=booking" id="com"> <li> Liste des réservations 📒</li> </a>



</div>

</header>



<?= $content ?>


<script src="https://unpkg.com/leaflet@1.9.2/dist/leaflet.js"></script>


<footer>

 
</footer>

<script src="js/main.js"></script>
</body>
</html>