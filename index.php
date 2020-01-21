<?php //ROUTEUR
session_start();
require('controlers/Controler.php');

if(isset($_GET['action'])){
    if ($_GET['action'] == 'connect') {
        require('controlers/login.php');
        $connect = new Login;
        $connect->connexion($_POST['username'], $_POST['password']);
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