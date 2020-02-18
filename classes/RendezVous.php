<?php

class RendezVous{
    public function __construct($id, $id_patient, $id_docteur, $date_rdv, $commentaire) {
        $this->id = $id;
        $this->id_patient = $id_patient;
        $this->id_docteur = $id_docteur;
        $this->date_rdv = $date_rdv;
        $this->commentaire = $commentaire;
    }

    public function __setId($value){
        $this->id = $value;
    }
    public function __getId(){
        return $this->id;
    }

    public function __setId_patient($value){
        $this->id_patient = $value;
    }
    public function __getId_patient(){
        return $this->id_patient;
    }

    public function __setId_docteur($value){
        $this->id_docteur = $value;
    }
    public function __getId_docteur(){
        return $this->id_docteur;
    }

    public function __setDate_rdv($value){
        $this->date_rdv = $value;
    }
    public function __getDate_rdv(){
        return $this->date_rdv;
    }

    public function __setCommentaire($value){
        $this->commentaire = $value;
    }
    public function __getCommentaire(){
        return $this->commentaire;
    }
}