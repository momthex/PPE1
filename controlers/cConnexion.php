<?php

class cConnexion extends Controller {
    private $errConnexion=0;

    public function __construct($login, $password) {
        if(isset($login) && isset($password) && $this->isAlphaNum($login)){
            require'models\connexion.php';

           $password = hash('sha512', $password);
           $connexion = new Conexion;
           $req = $connexion->reqUserExist($login, $password);
           $req = $req->fetch(PDO::FETCH_ASSOC);

            if ($req == 0) { //Si l'utilisateur n'est pas trouvé
                //$this->errConnexion= 1;
                $this->seterrConnexion(1);
                $this->render('acceuilConnexion');
            
            } else {
                echo'Vous voilà connecté [SEXE] [Nom] [Prenom]';
            }
       }
    }

    public function seterrConnexion($errConnexion) {
        $this->errConnexion = $errConnexion;
    }
      
    public function geterrConnexion() {
        return $this->errConnexion;
    }
}