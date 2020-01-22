<?php session_start();
ob_start(); //VUE POUR CE CONNECTER
?>
<form action="../index.php?action=connect" method="POST">
    <h1>Connexion</h1>
                
    <label><b>Nom d'utilisateur</b></label>
    <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>

    <label><b>Mot de passe</b></label>
    <input type="password" placeholder="Entrer le mot de passe" name="password" required>

    <input type="submit" id='submit' value='login' >
    <?php
        if (isset($_SESSION['err_connexion'])){
            if ($_SESSION['err_connexion']==1){
                echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
            }
        }
    ?>
</form>

<?php $content_for_layout = ob_get_clean(); ?>
<?php require('layout.php'); ?>