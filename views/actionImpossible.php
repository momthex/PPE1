<?php //VUE PARAMETRE 'ACTION' INEXISTANT
ob_start();
?>
    <h1>Action impossible</h1>
    <p>Cette action est inexistante ou vous ne possédez pas les droits nécessaires pour consommer ce contenue</p>
<?php $content_for_layout = ob_get_clean(); ?>

<?php require('layout.php'); ?>