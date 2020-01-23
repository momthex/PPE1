<?php

class cRendezVous extends Controller{
    public function __construct() {
        //Requete patient ou medecin $_SESSION['isDocteur']
        //$this->loadModel("RendezVous");
        require_once('./models/RendezVous.php');
		$this->model = new $name();
        $req = $this->model->isDocteur($_SESSION['user']->__getId());

            if ($req) { //Si medecin on charge la liste des patients, et la liste des ses rdv $_SESSION['listPatient'] $_SESSION['listeRdv']
                $_SESSION['isDocteur'] = TRUE;
                $_SESSION['listPatient'] = $this->model->listPatient();
                $_SESSION['listeRdv'] = $this->model->listRdvDocteur($_SESSION['user']->__getId());
                exit();
            } else { //Si medecin on charge la liste des ses rdv $_SESSION['listeRdv']
                $_SESSION['isDocteur'] = FALSE;
                $_SESSION['err_connexion'] = 0;
                header('Location: ./views/acceuilMembre.php');
                exit();
            }
        
        header('Location: ./views/consulterRendezVous.php');
        exit();
    }
}