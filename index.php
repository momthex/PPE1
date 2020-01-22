<?php //ROUTEUR
session_start();
require('controlers/Controller.php');
require_once('classes/User.php');

if(isset($_GET['action'])){
    if ($_GET['action'] == 'connect') {
        require('controlers/login.php');
        $connect = new Login;
        $connect->connexion($_POST['username'], $_POST['password']);
    } elseif ($_GET['action'] == 'consulterPrescription') {
        require('controlers/Document.php');
        $controlDocument = new cDocument;
    } elseif ($_GET['action'] == 'consulterCalendrier') {
        require('controlers/RendezVous.php');
        $controlRdv = new cRendezVous;
    } elseif ($_GET['action'] == 'disconect') {
        session_destroy();
        header('Location: ./views/acceuilConnexion.php');
        exit();
    } else{
        header('Location: ./views/actionImpossible.php');
        exit();
    }
} else {
    $_SESSION['err_connexion'] = 0;
    header('Location: ./views/acceuilConnexion.php');
    exit();
}