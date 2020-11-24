<?php namespace App\Models;
use CodeIgniter\Model;




Class Billet extends Model {
  /**
  *Retourne une description de tous les billets
  *
  */
  public function getLesBillets()
  {
    $req="select BIL_ID as id, BIL_TITRE as titre, BIL_DATE as datecreation from t_billet";
    $rs = $this->db->query($req);
    $lesBillets = $rs->getResultArray();
    return $lesBillets;
  }


  /**
  *Retourne les informations pour un billets
  *
  *@param $idBillet
  *@return id, titre et contenu du billet sous la forme d'un tableau associatif
  */
  public function getLeBillet($idBillet){
    $req = "select BIL_ID as id, BIL_DATE as datecreation, BIL_TITRE as titre, BIL_CONTENU as contenu from t_billet where BIL_ID=?";
    $rs = $this->db->query($req, array ($idBillet));
    $billet = $rs->getRowArray();
    return $billet;
  }

}



?>
