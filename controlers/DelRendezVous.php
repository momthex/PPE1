<?php

class cDelRendezVous extends Controller
{
    public function __construct()
    {
        if ($_SESSION['isDocteur'] == TRUE) {
            require_once('./models/RendezVous.php');
            $this->model = new M_RendezVous;
            $req = $this->model->delRdv($_POST['idRdv']);
            if ($req) {
                echo ("Rendez-vous supprimé!");
            } else {
                echo ("Une erreur c'est produite.");
            }
        }
    }
}
