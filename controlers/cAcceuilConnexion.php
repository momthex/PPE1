<?php

class cAcceuilConnexion extends Controller {
    private $errConnexion=0;

    public function __construct() {
        $this->render('acceuilConnexion');
    }

    public function seterrConnexion($errConnexion) {
        $this->errConnexion = $errConnexion;
    }
      
    public function geterrConnexion() {
        return $this->errConnexion;
    }
}