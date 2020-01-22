<?php //MODEL CONNEXION
require_once("models/model.php");

class M_Document extends Model{

    public function listDocumentPatient($id){
        
        //return tableau de document
    }
    public function listDocumentDocteur($id){
        
        //return tableau de document
    }
    public function addDocument($file){
        
    }
    public function delDocument($id){
        $req = $this->db->prepare("DELETE FROM document WHERE id= ?");
        $rs = $req->execute(array($id));
        
        return $rs;
    }
}