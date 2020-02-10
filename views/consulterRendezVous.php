<?php require_once('../classes/User.php');
require_once('../classes/RendezVous.php');
session_start(); //VUE ACCEUIL MEMBRE
ob_start();
?>

<div class="row">
    <div class="col-md-5" style="margin-left:100px; margin-top:100px">
        <!-- Cardre liste rdv-->
        <h3>Listes des prochains rendez-vous</h3>
        <?php
        foreach ($_SESSION['listeRdv'] as $rdv) { ?>
            <div class=rdv">
                <?php echo (htmlspecialchars($rdv->__getDate_rdv() . " " . $rdv->__getCommentaire())); ?>
                </br>
            </div>
        <?php }
        ?>
    </div>

    <?php if ($_SESSION['isDocteur'] == TRUE) { ?>
        <script>
            $("#addRdv").submit(function(e) {

                e.preventDefault(); // avoid to execute the actual submit of the form.

                var form = $(this);
                var url = form.attr('action');

                $.ajax({
                    type: "POST",
                    url: url,
                    data: form.serialize(), // serializes the form's elements.
                    success: function(data) {
                        alert(data); // show response from the php script.
                    }
                });


            });
        </script>
        <div class="col-md-5" style="margin-left:100px; margin-top:100px">
        <h3>Ajouter un rendez-vous</h3>
            <!-- Cardre prendre rdv avec patient -->
            <form id="addRdv" action="../index.php?action=addRdv" method="POST">
                <label><b>Patient : </b></label>
                <select name="idPatient" id="pet-select">
                    <?php
                    foreach ($_SESSION['listPatient'] as $patient) { ?>
                        <option value="<?php echo ($patient->__getId()) ?>">
                            <?php echo (htmlspecialchars($patient->__getNom() . " " . $patient->__getPrenom())); ?>
                        </option>
                    <?php }
                    ?>
                </select>
                </br></br>
                <label><b>Date</b></label>
                <input type="datetime-local" placeholder="Entrer la Date" name="date" required>
                </br></br>
                <label><b>Motif</b></label>
                <input type="text" placeholder="Tapez votre commentaire..." name="commentaire">
                </br></br>
                <input type="submit" id='submit' value='Valider'>
            </form>
        </div>
</div>
<?php } ?>
<?php $content_for_layout = ob_get_clean(); ?>

<?php require('layout.php'); ?>