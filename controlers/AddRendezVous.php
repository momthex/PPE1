<?php

class cAddRendezVous extends Controller
{
    public function __construct()
    {
        if ($_SESSION['isDocteur'] == TRUE) {
            require_once('./models/RendezVous.php');
            $this->model = new M_RendezVous;
            $req = $this->model->addRdv($_POST['idPatient'], $_POST['date'], $_POST['commentaire']);
            if ($req) {
                echo ("Rendez-vous ajouté!");
            } else {
                echo ("Une erreur c'est produite.");
            }
        }
    }
}
