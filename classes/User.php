<?php

class User {

    public function __construct($id, $nom, $prenom) {
        $this->id = $id;
        $this->nom = $nom;
        $this->prenom = $prenom;
    }

    public function __setId($value){
        $this->id = $value;
    }
    public function __getId(){
        return $this->id;
    }

    public function __setNom($value){
        $this->nom = $value;
    }
    public function __getNom(){
        return $this->nom;
    }

    public function __setPrenom($value){
        $this->prenom = $value;
    }
    public function __getPrenom(){
        return $this->prenom;
    }
}