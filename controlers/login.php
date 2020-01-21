<?php

class Login extends Controller{
    
    function isAlphaNum($word):bool{
        if (!preg_match('`^[[:alnum:]]{1,15}$`',$word)) {
            return false;
        } else {
            return true;
        }
    }

    function connexion($login, $password){
        if(isset($login) && isset($password) && $this->isAlphaNum($login)){
            $this->loadModel("Connexion");
            
            $password = hash('sha512', $password);
            $req = $this->model->reqUserExist($login, $password);
            echo($req);

            if ($req == 0) { //Si l'utilisateur n'est pas trouvé
                $_SESSION['err_connexion'] = 1;
                header('Location: ./views/acceuilConnexion.php');
                exit();
            } else {
                $_SESSION['err_connexion'] = 0;
                $_SESSION['id'] = 1;
                header('Location: ./views/acceuilMembre.php');
                exit();
            }
        }
    }
}
