<HTML> 
	<HEAD>
		<TITLE>GSB Suivi</TITLE>
		<script src="../asset/jquery/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
		<link href="../asset/bootstrap/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
		<link href="../asset/css/layout.css" rel="stylesheet" crossorigin="anonymous">
		<script src="../asset/bootstrap/js/bootstrap.min.js" crossorigin="anonymous"></script>
	</HEAD> 
	<BODY>
			<div class="row entete">
				<div class="col-md-4">
					<img src="../asset/image/logogsb.png">
				</div>
				<div class="col-md-4 text-center"><h1>
					<?php
						if (isset($_SESSION['user'])){
							echo($_SESSION['user']->__getNom());
							echo(" ");
							echo($_SESSION['user']->__getPrenom());
						}
					?>
					</h1>
				</div>
				<div class="col-md-4" style="display: flex; justify-content: flex-end;">
					<?php
						if (isset($_SESSION['user'])){?>
							<form action="../index.php?action=disconect" method="POST">
								<input type="submit" id='submit' value='Deconnexion' >
							</form>
						<?php } ?>
				</div>
		</div>



		<?php
		echo $content_for_layout;
		?>



		<div class="text-center piedpage row">
			<h1>GSB entreprise</h1> Copyright © tous droits réservés 
		</div>
	<BODY> 
</HTML>