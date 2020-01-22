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
					<!-- <?php
						echo $nom;
						echo $prenom
					?>
					-->fff
					</h1>
				</div>
				<div class="col-md-4">
					<form action="../index.php?action=disconect" method="POST">
						<input type="submit" id='submit' value='Deconnexion' >
					</form>
				</div>
		</div>



		<?php
		echo $content_for_layout;
		?>



		<div class="text-center piedpage">
			<h1>CONTENT BAS DE PAGE</h1>
		</div>
	<BODY> 
</HTML>