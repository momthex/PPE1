<?php //MODEL POUR TOUT LES AUTRE MODELS
class Model{ 
    protected $db;
    public function __construct() {
        try{
            $this->db = new PDO('mysql:host=localhost;dbname=ppe_gsb;charset=utf8', 'root', '');
        }
        catch(Exception $e){
            die('Erreur : '.$e->getMessage());
        }
    }
}