 <?php //MODEL CONNEXION
require_once("models/model.php");

class Connexion extends Model{

    public function reqUserExist($login, $password){
        $req = $this->db->prepare("SELECT * FROM personne WHERE login= ? AND password= ?");
        $req->execute(array($login, $password));
        //$user = new User;
        while ($data = $req->fetch()){
            $user = new User($data['id'], $data['nom'], $data['prenom']);
            //$this->user.setId($data['id']);
            //$this->user.setId($data['nom']);
            //$this->user.setId($data['prenom']);
        }
        return $user;
    }
}