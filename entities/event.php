<?php

class event
{
    private $nom;
    private $adr;
    private $id;
    private $date;
    private $quantite;
    private $lien;
    
    function __construct($nom,$adr,$id,$date,$quantite,$lien)
    {
        $this->nom=$nom;
        $this->adr=$adr;
        $this->id=$id;
        $this->date=$date;
        $this->quantite=$quantite;
        $this->lien=$lien;
    }

    function getnom() {return $this->nom ;}
    function getadr() {return $this->adr ;}
    function getid() {return $this->id ;}
    function getdate() {return $this->date ;}
    function getquantite() {return $this->quantite ;}
    function getlien() {return $this->lien ;}
    function setnom($nom){
        $this->nom=$nom;
    }
    function setadr($adr){
        $this->adr=$adr;
    }
    function setdate($date){
        $this->date=$date;
    }
    function setquantite($quantite){
        $this->quantite=$quantite;
    }
    function setlien($quantite){
        $this->lien=$lien;
    }
}

?>