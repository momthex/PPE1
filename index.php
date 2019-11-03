<?php //ROUTEUR
require('controlers/Controler.php');

if(isset($_GET['action'])){
    if ($_GET['action'] == 'connect') {
        $test = new Controller;
        $test->connexion($_POST['username'], $_POST['password']);
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
    require('views/acceuilConnexion.php');
}