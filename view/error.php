<?php $title = "VELOCO | Marseille"; ?>

<?php ob_start(); ?>


<?php error_reporting(0); ?>


<p id="psdExist">⚠️Désolé ! ce pseudo éxiste déja ! veuillez en choisir un autre !</p>

<p id="errorCo">⚠️Désolé ! votre identifiant ou votre mot de passe est incorrect !</p>

<p id="enough">⚠️ Oups !! Caractères insuffisants !  Veuillez insérer plus d'un caractère pour l'identifiant et plus de 3 caractères pour le mot de passe !</p>




<p class="text">⚠️ Déjà inscrit ? <a href="index.php?action=connect" class="text-warning">Aller à la page de connexion</a></p>




<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>


