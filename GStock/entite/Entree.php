<?php









  class Entree  {
  
  	private  $idEntree;
  	private  $idFournisseur;
  	private  $dateEntree;
  	private  $numeroFacture;

  
  
  public  function __construct() {
      
      
  }
/**
 * @return mixed
 */
public function getIdEntree(){
return $this->idEntree;
}

/**
 * @return mixed
 */
public function getIdFournisseur(){
return $this->idFournisseur;
}

/**
 * @return mixed
 */
public function getDateEntree(){
return $this->dateEntree;
}

/**
 * @return mixed
 */
public function getNumeroFacture(){
return $this->numeroFacture;
}

/**
 * @param mixed $idEntree
 */
public function setIdEntree($idEntree){
$this->idEntree = $idEntree;
}

/**
 * @param mixed $idFournisseur
 */
public function setIdFournisseur($idFournisseur){
$this->idFournisseur = $idFournisseur;
}

/**
 * @param mixed $dateEntree
 */
public function setDateEntree($dateEntree){
$this->dateEntree = $dateEntree;
}

/**
 * @param mixed $numeroFacture
 */
public function setNumeroFacture($numeroFacture){
$this->numeroFacture = $numeroFacture;
}

  
}

