<?php
session_start();
require('./Controller.php');

class Login extends Controller{
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
        
        function isAlphaNum($word):bool{
            if (!preg_match('`^[[:alnum:]]{1,15}$`',$word)) {
                return false;
            } else {
                return true;
            }
        }
    }
}

echo("test");