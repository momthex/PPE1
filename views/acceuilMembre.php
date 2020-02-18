<?php require_once('../classes/User.php');
session_start(); //VUE ACCEUIL MEMBRE
ob_start(); 
?>

<div class="row">
    <div class="cadreRdv col-md-3" style="margin-left: 500px;"><!-- Cardre planning et rdv-->
        <h3>Calendrier</h3>
        <img src="../asset/image/calendrier.png">
        <p>Consulter les rendez-vous.</p>
        <form action="../index.php?action=consulterCalendrier" method="POST">
            <input type="submit" id='submit' value='Consulter...' >
        </form>
    </div>

    <div class="cadreDocument col-md-3"><!-- Cardre document-->
        <h3>Document</h3>
        <img src="../asset/image/document.png">
        <p>Consulter les documents.</p>
        <form action="../index.php?action=consulterPrescription" method="POST">
            <input type="submit" id='submit' value='Consulter...' >
        </form>
    </div>
</div>

<?php $content_for_layout = ob_get_clean(); ?>

<?php require('layout.php'); ?>