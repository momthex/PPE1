<?php //MODEL CONNEXION
require_once("models/model.php");

class Conexion extends Model{
    public function reqUserExist($login, $password)
    {
        $req = $this->db->prepare("SELECT * FROM personne WHERE login= ? AND mdp= ?");
        $req->execute(array($login, $password));

        return $req;
    }
}