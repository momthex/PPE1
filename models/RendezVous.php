<?php //MODEL CONNEXION
require_once("models/model.php");

class M_RendezVous extends Model{

    public function listRdvPatient($id){
        $req = $this->db->prepare("SELECT * FROM rendez_vous WHERE id_patient = ?");
        $req->execute(array($id));
        $listeRdv = array();

        while ($data = $req->fetch()){
            $rdv = new RendezVous($data['id'], $data['id_patient'], $data['id_docteur'], $data['date'], $data['heure'], $data['commentaire']);
            array_push($listeRdv, $rdv);
        }
        return $listeRdv;
    }

    public function listRdvDocteur($id){
        $req = $this->db->prepare("SELECT * FROM rendez_vous WHERE id_docteur = ?");
        $req->execute(array($id));
        $listeRdv = array();

        while ($data = $req->fetch()){
            $rdv = new RendezVous($data['id'], $data['id_patient'], $data['id_docteur'], $data['date'], $data['heure'], $data['commentaire']);
            array_push($listeRdv, $rdv);
        }
        return $listeRdv;
    }

    public function addRdv($id_patient, $date, $heure, $commentaire){
        $req = $this->db->prepare("INSERT INTO rendez_vous (id_patient, id_docteur, date, heure, commentaire) VALUES (?, ?, ?, ?, ?)");
        $rs = $req->execute(array($id_patient, $ _SESSION['user']->getId(), $date, $heure, $commentaire));
        
        return $rs;
    }

    public function delRdv($id){
        $req = $this->db->prepare("DELETE FROM rendez_vous WHERE id= ?");
        $rs = $req->execute(array($id));
        
        return $rs;
    }
}