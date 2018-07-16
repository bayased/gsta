<?php









  class DetailEntree  {
  
  
  	private  $idDetailEntree;
  	private  $idEntree;
  	private  $idProduit;
  	private  $quantite;
  	private  $prixUnitaire;
  	private  $remise;
  
  
  public  function __construct() {
      
      
  }
/**
 * @return mixed
 */
public function getIdDetailEntree(){
return $this->idDetailEntree;
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
public function getIdProduit(){
return $this->idProduit;
}

/**
 * @return mixed
 */
public function getQuantite(){
return $this->quantite;
}

/**
 * @return mixed
 */
public function getPrixUnitaire(){
return $this->prixUnitaire;
}

/**
 * @return mixed
 */
public function getRemise(){
return $this->remise;
}

/**
 * @param mixed $idDetailEntree
 */
public function setIdDetailEntree($idDetailEntree){
$this->idDetailEntree = $idDetailEntree;
}

/**
 * @param mixed $idEntree
 */
public function setIdEntree($idEntree){
$this->idEntree = $idEntree;
}

/**
 * @param mixed $idProduit
 */
public function setIdProduit($idProduit){
$this->idProduit = $idProduit;
}

/**
 * @param mixed $quantite
 */
public function setQuantite($quantite){
$this->quantite = $quantite;
}

/**
 * @param mixed $prixUnitaire
 */
public function setPrixUnitaire($prixUnitaire){
$this->prixUnitaire = $prixUnitaire;
}

/**
 * @param mixed $remise
 */
public function setRemise($remise){
$this->remise = $remise;
}

  
}

