<?php require_once('../classes/User.php');
session_start(); //VUE ACCEUIL MEMBRE
ob_start(); 
?>

<div class="cadreAddDocument col-md-4"><!-- Cardre liste document-->
    <?php
    
    ?>
    a
</div>

<div class="cadreListeDocument col-md-4"><!-- Cardre liste document, les cocteur on un bouton qui permet de supprimer un document-->
    <?php
    
    ?>
    b
</div>

<div class="cadreDocument col-md-4"><!-- Cardre affiche le document selectionné -->
    c
</div>

<?php $content_for_layout = ob_get_clean(); ?>

<?php require('layout.php'); ?>