<?php require_once('../classes/User.php');
session_start(); //VUE ACCEUIL MEMBRE
ob_start(); 
?>

<div class="cadreRdv"><!-- Cardre liste rdv-->
    <?php
    foreach ($_SESSION['listeRdv'] as $rdv) {?>
        <div class=rdv">
        <?php echo($rdv['nom']+" "+$rdv['prenom']+" le "+$rdv['date']+" à "+$rdv['heure']);?>
        </div>
    <?php }
    ?>
</div>

<?php if ($_SESSION['isDocteur']==TRUE) {?>
    <div class="cadreDocument"><!-- Cardre prendre rdv avec patient -->
    <form action="../index.php?action=addRdv" method="POST">
        <label><b>Patient : </b></label>
        <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>

        <label><b>Date</b></label>
        <input type="password" placeholder="Entrer le Date" name="password" required>

        <label><b>Heure</b></label>
        <input type="password" placeholder="Entrer le Date" name="password" required>

        <label><b>Commentaire</b></label>
        <input type="password" placeholder="Entrer le Date" name="password" required>

        <input type="submit" id='submit' value='Valider' >
        <?php
            if (isset($_SESSION['err_connexion'])){
                if ($_SESSION['err_connexion']==1){
                    echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
                }
            }
        ?>
    </form>
    </div>
<?php }?>
<?php $content_for_layout = ob_get_clean(); ?>

<?php require('layout.php'); ?>