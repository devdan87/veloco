<?php $title = "VELOCO | Marseille"; ?>

<?php ob_start(); ?>





<?php 



session_destroy();

?> 
<br> <br> <br> <br>

<p class="textEnd">Merci de votre visite et à très bientot !</p> <br> <br>
<p class="textEnd">⚠️ continuer la lecture ? <a href="index.php?action=connect">Aller à la page de connexion</a></p>




<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
