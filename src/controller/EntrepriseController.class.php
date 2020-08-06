<?php
use libs\system\Controller;
use \src\model\EntrepriseModel;
class EntrepriseController extends Controller
{
    public function __construct()
    {
        parent:: __construct();
    }
    public function Liste()
    {
       $entreprisedb= new EntrepriseModel(); 
        $data["listeEntreprise"]= $entreprisedb->getAll();
        return $this->view->load("Entreprise/Liste", $data);

    }
  public function AjoutEntreprise()
  {
   
      extract($_POST);
      if(!empty($_POST)){

      $Entreprise = new Entreprise();

      $Entreprise->SetNom_entreprise($_POST['nom_entreprise']);
      $Entreprise->SetAdresse($_POST['adresse']);
      $Entreprise->SetEmail($_POST['email']);
      $Entreprise->SetTelephone($_POST['telephone']);
      $Entreprise->SetNinea($_POST['ninea']);
      $Entreprise->SetCompte($_POST['compte']);
      $Entreprise->SetNumero($_POST['numero']);
       
    
      $Entreprisedb = new EntrepriseModel();
      $Entreprisedb ->AjoutEntreprise($Entreprise);
         

    }
    return $this->view->load("Entreprise/AjoutEntreprise");


  }
}


?>
