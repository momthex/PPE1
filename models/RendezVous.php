<?php //MODEL CONNEXION
require_once("models/model.php");

class M_RendezVous extends Model{

    public function listRdvPatient($id){
        
        //return tableau de RendezVous
    }
    public function listRdvDocteur($id){
        
        //return tableau de RendezVous
    }
    public function addRdv($id_patient, $date, $heure, $commentaire){
        $req = $this->db->prepare("INSERT INTO rendez_vous (id_patient, id_docteur, date, heure, commentaire) VALUES (?, ?, ?, ?, ?)");
        $rs = $req->execute(array($ _SESSION['user']->getId(), $id_patient, $date, $heure, $commentaire));
        
        return $rs;
    }
    public function delRdv($id){
        $req = $this->db->prepare("DELETE FROM rendez_vous WHERE id= ?");
        $rs = $req->execute(array($id));
        
        return $rs;
    }
}