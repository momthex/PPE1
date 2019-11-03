<?php //MODEL POUR TOUT LES AUTRE MODELS
class Model{ 
    // public function __construct() {
    //     dbConnect();
    // }
    protected function dbConnect() {
        try{
            $db = new PDO('mysql:host=localhost;dbname=ppe_gsb;charset=utf8', 'root', '');
            return $db;
        }
        catch(Exception $e){
            die('Erreur : '.$e->getMessage());
        }
    }
}