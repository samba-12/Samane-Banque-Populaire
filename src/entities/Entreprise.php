<?php

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity 
 * @Table(name="Entreprise")
**/

Class Entreprise
{
    //  Les propriétes de la class
    /** 
    * @Id
    * @Column(type="integer")
    * @GeneratedValue
    **/
    private $id;
    /**
     * @Column(type="string") 
     */
    private $nom_entreprise;
    /**
     * @Column(type="string")
     */
    private $adresse;
    /**
     *  @Column(type="string") 
     */
    private $email;
    /** 
     * @Column(type="string") 
     */
    private $telephone;
    /**
     * @Column(type="integer") 
     */
    private $ninea;
    /**
     * @Column(type="string") 
     */
    private $compte;
    /**
     * @Column(type="integer") 
     */
    private $numero;

  //Constructeur Methode a appeler des qu'on instancie l'objet
  //pour creer un objet j'ai besoin de nom adress email....
    public function __construct()
    {
    }

   
    public function getNom_entreprise()
    {
        return $this->nom_entreprise;
    }
    public function setNom_entreprise($nom_entreprise)
    {
        $this->nom_entreprise = $nom_entreprise;
    }

    //GET ET SET
    public function getAdresse(){
        return $this->adresse;
    }
    public function setAdresse($adresse){
        $this->adresse=$adresse;
    }


    public function getEmail(){
        return $this->email;
    }
    public function setEmail($email){
        $this->email=$email;
    }
    //GET ET SET



    public function getTelephone(){
        return $this->telephone;
    }
    public function setTelephone($telephone){
        $this->telephone=$telephone;
    }
  
    
    public function getNinea()
    {
        return $this->ninea;
    }
    public function setNinea($ninea)
    {
        $this->ninea = $ninea;
    }

  
    //GET ET SET

    public function getCompte(){
        return $this->compte;
    }
    public function setCompte($compte){
        $this->compte=$compte;
    }
    


    
    public function getNumero()
    {
        return $this->numero;
    }
    public function setNumero($numero)
    {
        $this->numero = $numero;
    }

    
    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
}

