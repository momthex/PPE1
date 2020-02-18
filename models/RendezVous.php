<?php //MODEL CONNEXION
require_once(ROOT."models/model.php");

class M_RendezVous extends Model{

    public function isDocteur($id){
        $req = $this->db->prepare("SELECT * FROM docteur WHERE id_personne=?");
        $req->execute(array($id));
        while ($data = $req->fetch()){
            return true;
        }
        return false;
    }

    public function listPatient(){
        $req = $this->db->prepare("SELECT * FROM patient INNER JOIN personne ON personne.id=patient.id_personne");
        $req->execute();
        $listPatient = array();
        
        foreach($req as $data){
            $patient = new User($data['id'], $data['nom'], $data['prenom']);
            array_push($listPatient, $patient);
        }
        return $listPatient;
    }

    public function listRdvPatient($id){
        $req = $this->db->prepare("SELECT * FROM rendez_vous WHERE id_patient = ?");
        $req->execute(array($id));
        $listeRdv = array();
        
        while ($data = $req->fetch()){
            $rdv = new RendezVous($data['id'], $data['id_patient'], $data['id_docteur'], $data['date'], $data['commentaire']);
            array_push($listeRdv, $rdv);
        }
        return $listeRdv;
    }

    public function listRdvDocteur($id){
        $req = $this->db->prepare("SELECT * FROM rendez_vous WHERE id_docteur = ?");
        $req->execute(array($id));
        $listeRdv = array();

        while ($data = $req->fetch()){
            $rdv = new RendezVous($data['id'], $data['id_patient'], $data['id_docteur'], $data['date'], $data['commentaire']);
            array_push($listeRdv, $rdv);
        }
        return $listeRdv;
    }

    public function addRdv($id_patient, $date, $commentaire){
        $req = $this->db->prepare("INSERT INTO rendez_vous (id_patient, id_docteur, date, commentaire) VALUES (?, ?, ?, ?)");

        $rs = $req->execute(array($id_patient, $_SESSION['user']->__getId(), $date, $commentaire));
        
        return $rs;
    }

    public function delRdv($id){
        $req = $this->db->prepare("DELETE FROM rendez_vous WHERE id= ?");
        $rs = $req->execute(array($id));
        
        return $rs;
    }
}