<?php $title = "JF | Voyage en Alaska"; ?>

<?php ob_start(); ?>

<h2>Liste des Clients</h2>




<?php
  $db = new PDO('mysql:host=localhost;dbname=veloca;charset=utf8','root','');
  $showCst =  $db->query('SELECT id_customer,pseudo,email,telephone,date_subscribe From customer' );
while ($Cstdata =  $showCst->fetch()) {
?>



<table>

<tr>
<td><strong>id_user :</strong><br><?= $Cstdata['id_customer']; ?> </td>
<td><strong>pseudo :</strong><br><?= $Cstdata['pseudo']; ?> </td>
<td><strong>email :</strong><br><?= $Cstdata['email']; ?> </td>
<td><strong>telephone :</strong><br><?= $Cstdata['telephone']; ?> </td>
<td><strong>date d'inscription :</strong><br><?= $Cstdata['date_subscribe']; ?></td>
</tr>

</table>


<?php
}
?>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
    