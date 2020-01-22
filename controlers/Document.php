<?php

class cDocument extends Controller{
    public function __construct() {
        //Requete patient ou medecin
        //Si medecin on charge la liste des patients (pour upload un document), et la liste des documents mis en ligne
        //Si medecin on charge la liste des ses documents
        header('Location: ./views/consulterDocument.php');
        exit();
    }
}