<?php
define("ROOT", "../");
require_once('../classes/User.php');
require_once('../classes/RendezVous.php');
require_once('../models/RendezVous.php');
session_start(); //VUE ACCEUIL MEMBRE
$model = new M_RendezVous;
$req = $model->isDocteur($_SESSION['user']->__getId());

if ($req) { //Si medecin on charge la liste des patients, et la liste des ses rdv $_SESSION['listPatient'] $_SESSION['listeRdv']
    $_SESSION['isDocteur'] = TRUE;
    $_SESSION['listPatient'] = $model->listPatient();
    $_SESSION['listeRdv'] = $model->listRdvDocteur($_SESSION['user']->__getId());
}
ob_start();
?>

<h3>Listes des prochains rendez-vous</h3>
        <?php
        foreach ($_SESSION['listeRdv'] as $rdv) { ?>
            <div class="rdv">
                <?php echo (htmlspecialchars($rdv->__getDate_rdv() . " " . $rdv->__getCommentaire())); ?>
                <?php if ($_SESSION['isDocteur'] == TRUE) {?>
                    <form action="../index.php?action=deleteRdv" method="POST">
                        <input name="idRdv" type="submit" id='<?php echo($rdv->__getId());?>' value='Supprimer'>
                    </form>
                <?php }
                ?>
                </br>
            </div>
        <?php }
        ?>

<?php $ret = ob_get_clean();
echo($ret);
?>