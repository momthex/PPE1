<?php //VUE ACCEUIL MEMBRE
ob_start(); 
?>
<div><!-- Cardre messagerie-->

</div>

<div><!-- Cardre planning et rdv-->

</div>

<div><!-- Cardre document-->

</div>

<?php $content_for_layout = ob_get_clean(); ?>

<?php require('layout.php'); ?>