<?php //VUE ACCEUIL MEMBRE
ob_start(); 
?>

<div class="cadreRdv"><!-- Cardre planning et rdv-->
    <h3>Calendrier</h3>
    <img src="../asset/image/calendrier.png">
    <p>Consulter les rendez-vous.</p>
    <form action="../index.php?action=consulterCalendrier" method="POST">
        <input type="submit" id='submit' value='Consulter...' >
    </form>
</div>

<div class="cadreDocument"><!-- Cardre document-->
    <h3>Document</h3>
    <img src="../asset/image/document.png">
    <p>Consulter les documents.</p>
    <form action="../index.php?action=consulterPrescription" method="POST">
        <input type="submit" id='submit' value='Consulter...' >
    </form>
</div>

<?php $content_for_layout = ob_get_clean(); ?>

<?php require('layout.php'); ?>