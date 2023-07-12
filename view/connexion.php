<?php $title = "VELOCO | Marseille"; ?>
<?php ob_start(); ?>

<br> <br> <br> <br>

<form method="post" action="index.php?action=validConnexion" enctype="multipart/form-data">

	<label>Votre pseudo</label><br>
    <input type="text" name="psdCo" id="pseudo"><br><br>
    
    <label>Mot de passe</label><br>
    <input type="password" name="pswCo" id="password"><br><br>


   
    <input type="submit" value="Valider" id="sendConnect">

</form>


<p class="text">⚠️ Pas encore inscrit ? <a href="index.php?action=subscribe" >Aller à la page d'inscription</a></p>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
