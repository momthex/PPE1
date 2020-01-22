<?php

class cRendezVous extends Controller{
    public function __construct() {
        //Requete patient ou medecin
        //Si medecin on charge la liste des patients, et la liste des ses rdv
        //Si medecin on charge la liste des ses rdv
        header('Location: ./views/consulterRendezVous.php');
        exit();
    }
}