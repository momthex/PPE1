<?php require_once('../classes/User.php');
session_start(); //VUE ACCEUIL MEMBRE
ob_start(); 
?>

<div class="cadreRdv"><!-- Cardre liste rdv-->
    <?php
    
    ?>
</div>

<div class="cadreDocument"><!-- Cardre prendre rdv avec patient -->
    
</div>

<?php $content_for_layout = ob_get_clean(); ?>

<?php require('layout.php'); ?>