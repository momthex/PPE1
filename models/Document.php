<?php //MODEL CONNEXION
require_once("models/model.php");

class M_Document extends Model{

    public function listDocumentPatient($id){
        $req = $this->db->prepare("SELECT * FROM document WHERE id_patient = ?");
        $req->execute(array($id));
        $listeDocument = array();

        while ($data = $req->fetch()){
            $doc = new Document();//Remplir les donées!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
            array_push($listeDocument, $doc);
        }
        return $listeDocument;
    }
    public function listDocumentDocteur($id){
        $req = $this->db->prepare("SELECT * FROM document WHERE id_docteur = ?");
        $req->execute(array($id));
        $listeDocument = array();

        while ($data = $req->fetch()){
            $doc = new Document();//Remplir les donées!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
            array_push($listeDocument, $doc);
        }
        return $listeDocument;
    }
    public function addDocument($file){
        
    }
    public function delDocument($id){
        $req = $this->db->prepare("DELETE FROM document WHERE id= ?");
        $rs = $req->execute(array($id));
        
        return $rs;
    }
}