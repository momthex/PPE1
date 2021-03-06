<?php require_once('../classes/User.php');
require_once('../classes/RendezVous.php');
session_start(); //VUE ACCEUIL MEMBRE
ob_start();
?>

<div class="row">
    <div id="listRdv" class="col-md-5" style="margin-left:100px; margin-top:100px">
        <!-- Cardre liste rdv-->
        <h3>Listes des prochains rendez-vous</h3>
        <?php
        foreach ($_SESSION['listeRdv'] as $rdv) { ?>
            <div class="rdv">
                <?php echo (htmlspecialchars($rdv->__getDate_rdv() . " " . $rdv->__getCommentaire())); ?>
                <?php if ($_SESSION['isDocteur'] == TRUE) { ?>
                    <form action="../index.php?action=deleteRdv" method="POST">
                        <input name="idRdv" type="submit" id='<?php echo ($rdv->__getId()); ?>' value='Supprimer'>
                    </form>
                <?php }
                ?>
                </br>
            </div>
        <?php }
        ?>
    </div>

    <?php if ($_SESSION['isDocteur'] == TRUE) { ?>

        <div class="col-md-5" style="margin-left:100px; margin-top:100px; margin-bottom:100px">
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
        <script>
            $("#addRdv").submit(function(e) { //Ajouter rendez-vous
                e.preventDefault();

                var form = $(this);
                var url = form.attr('action');

                $.ajax({
                    type: "POST",
                    url: url,
                    data: form.serialize(), // serializes the form's elements.
                    success: function(data) {
                        alert(data); // show response from the php script.
                        $.ajax({
                            type: "POST",
                            url: "listePatient.php",
                            success: function(data) {
                                $('#listRdv').html(data);
                            }
                        });
                    }
                });
                return false;
            });


            $("").submit(function(e) { // Supprimer rendez-vous
                e.preventDefault();

                var form = $(this);
                var url = form.attr('action');

                $.ajax({
                    type: "POST",
                    url: url,
                    data: form.serialize(), // serializes the form's elements.
                    success: function(data) {
                        alert(data); // show response from the php script.
                        $.ajax({
                            type: "POST",
                            url: "listePatient.php",
                            success: function(data) {
                                $('#listRdv').html(data);
                            }
                        });
                    }
                });
                return false;
            });
        </script>
</div>
<?php } ?>
<?php $content_for_layout = ob_get_clean(); ?>

<?php require('layout.php'); ?>