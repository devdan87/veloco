<?php $title = "VELOCO | Marseille"; ?>

<?php ob_start(); ?>




    <p class="text"> Veloco est une nouvelle application web permettant de louer des vélos à Marseille ! <br>
    En plus de géolocaliser les stands à vélos, elle vous donne en temps réel les stocks disponibles.<br>
    Afin de réserver un vélo, vous devez au préalable vous inscrire puis vous connecter.<br>
    Toute l'équipe Véloco vous souhaite une excellente balade à Marseille 🚴‍♂️ 🏖️ 🏬 ⚽
    </p>
<form method="post" action="index.php?action=validSub" enctype="multipart/form-data">

	<label>Votre pseudo</label><br>
    <input type="text" name="nom" id="nom"><br><br>

    <label>Mot de passe</label><br>
    <input type="password" name="mdp" id="mdp"><br><br>


    <label>Télephone</label><br>
    <input type="tel" name="tel" id="tel"><br><br>


    <label>Adresse mail</label><br>
    <input type="mail" name="mail" id="mail"><br><br>





    <input type="submit" value="Valider" id="send">

</form>

<p class="text">⚠️ Déjà inscrit ? <a href="index.php?action=connect" class="text-warning">Aller à la page de connexion</a></p>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>