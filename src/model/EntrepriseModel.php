<?php

namespace src\model; 
use libs\system\Model; 

class EntrepriseModel extends Model{

    public function __construct(){
		parent::__construct();
    }
    

    public function getAll()
    {
        return $this->db->getRepository("Entreprise")->findAll(); 
    }

    
    public function AjoutEntreprise($Entreprise)
    {
        $this->db->persist($Entreprise);
        $this->db->flush();
    }
}











/* 
   static function enregistrer($ClassEntreprise)
    {
        
        try{
        $connexion = new Dbaccess();

        $bd = $connexion->getConnexion();
        $bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $requete = $bd->prepare(
            "INSERT INTO `client_entreprise`(`id_entreprise`, `nom_entreprise`, `adresse`,`email`, `telephone`, `ninea`, `compte`,`numero`) 
           VALUES (null,'".$ClassEntreprise->getNomentreprise()."','".$ClassEntreprise->getAdresse()."', '".$ClassEntreprise->getEmail()."',
           '".$ClassEntreprise->getTelephone()."', '".$ClassEntreprise->getNinea()."','".$ClassEntreprise->getCompte()."','".$ClassEntreprise->getNumero()."')");
           
         $resultat = $requete->execute();   
        
        return $resultat;
        }
        catch(PDOException $ex){
            echo 'Echec de la connexion: '.$ex->getMessage();
        }
        
    }

} */





