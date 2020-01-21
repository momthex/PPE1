 <?php //MODEL CONNEXION
require_once("models/model.php");

class Connexion extends Model{

    public function reqUserExist($login, $password){
        $req = $this->db->prepare("SELECT * FROM personne WHERE login= ? AND pass_word= ?");
        $req->execute(array($login, $password));
        
        $rs = null;
        while ($data = $req->fetch()){
            $rs = $data['id'];
        }
        return $rs;
    }
}