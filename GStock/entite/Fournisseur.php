<?php









  class Fournisseur  {
  
  private  $idfFournisseur;
  private  $raisonSocial;
  private  $adresse;
  private  $ville;
  private  $codePostal;
  private  $pays;
  private  $telephone;
  private  $fax;
  private  $mail;
  

  
  
  public  function __construct() {
      
      
  }
/**
 * @return mixed
 */
public function getIdfFournisseur(){
return $this->idfFournisseur;
}

/**
 * @return mixed
 */
public function getRaisonSocial(){
return $this->raisonSocial;
}

/**
 * @return mixed
 */
public function getAdresse(){
return $this->adresse;
}

/**
 * @return mixed
 */
public function getVille(){
return $this->ville;
}

/**
 * @return mixed
 */
public function getCodePostal(){
return $this->codePostal;
}

/**
 * @return mixed
 */
public function getPays(){
return $this->pays;
}

/**
 * @return mixed
 */
public function getTelephone(){
return $this->telephone;
}

/**
 * @return mixed
 */
public function getFax(){
return $this->fax;
}

/**
 * @return mixed
 */
public function getMail(){
return $this->mail;
}

/**
 * @param mixed $idfFournisseur
 */
public function setIdfFournisseur($idfFournisseur){
$this->idfFournisseur = $idfFournisseur;
}

/**
 * @param mixed $raisonSocial
 */
public function setRaisonSocial($raisonSocial){
$this->raisonSocial = $raisonSocial;
}

/**
 * @param mixed $adresse
 */
public function setAdresse($adresse){
$this->adresse = $adresse;
}

/**
 * @param mixed $ville
 */
public function setVille($ville){
$this->ville = $ville;
}

/**
 * @param mixed $codePostal
 */
public function setCodePostal($codePostal){
$this->codePostal = $codePostal;
}

/**
 * @param mixed $pays
 */
public function setPays($pays){
$this->pays = $pays;
}

/**
 * @param mixed $telephone
 */
public function setTelephone($telephone){
$this->telephone = $telephone;
}

/**
 * @param mixed $fax
 */
public function setFax($fax){
$this->fax = $fax;
}

/**
 * @param mixed $mail
 */
public function setMail($mail){
$this->mail = $mail;
}

  
}

