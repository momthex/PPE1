 <?php //MODEL CONNEXION
require_once("models/model.php");

class Connexion extends Model{

    public function reqUserExist($login, $password){
        $req = $this->db->prepare("SELECT * FROM personne WHERE login= ? AND pass_word= ?");
        $req->execute(array($login, $password));
        $user = new User;
        while ($data = $req->fetch()){
            $this->user.setId($data['id']);
            $this->user.setId($data['nom']);
            $this->user.setId($data['prenom']);
        }
        return $user;
    }
}