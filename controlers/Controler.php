<?php  //CONTROLER

class Controller{
	function connexion($login, $password){
		 if(isset($login) && isset($password) && isAlphaNum($login)){
		 	require'models\connexion.php';

			$password = hash('sha512', $password);
			$connexion = new Conexion;
			$req = $connexion->reqUserExist($login, $password);
			$req = $req->fetch(PDO::FETCH_ASSOC);

		 	if ($req == 0) { //Si l'utilisateur n'est pas trouvé
				$errConnexion = 1;
				render('acceuilConnexion');
		 	} else {
		 		echo'Vous voilà connecter [SEXE] [Nom] [Prenom]';
		 	}
		}
	}
}
function isAlphaNum($word):bool{
	if (!preg_match('`^[[:alnum:]]{1,15}$`',$word)) {
		return false;
	}else {
		return true;
	}
}
function render($filename){  
	ob_start();
	require'views/'.$filename.'.php';
	$content_for_layout = ob_get_clean();

	require'views/layout.php';
}
function loadModel($name){
	require_once('models/'.$name.'.php');        
	$this->$name = new $name();
}