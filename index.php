<?php //ROUTEUR
require('controlers/Controller.php');

if(isset($_GET['action'])){
    if ($_GET['action'] == 'connect') {
        require('controlers/cConnexion.php');
        $test = new cConnexion($_POST['username'], $_POST['password']);
    } elseif ($_GET['action'] == 'consulterMessage') {
        # code...
    } elseif ($_GET['action'] == 'consulterPrescription') {
        # code...
    } elseif ($_GET['action'] == 'consulterCalendrier') {
        # code...
    } elseif ($_GET['action'] == 'deconect') {
        # code...
    } else{
        require('views/actionImpossible.php');
    }
} else {
    require('controlers/cAcceuilConnexion.php');
    $test = new cAcceuilConnexion;
}