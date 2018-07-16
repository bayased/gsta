<?php









  class DetailSortie  {
  
  
  	private  $idDetailSortie;
  	private  $idSortie;
  	private  $idClient;
  	private  $idProduit;
  	private  $quantite;
  	private  $prixUnitaire;
  	private  $remise;
  
  
  public  function __construct() {
      
      
  }
/**
 * @return mixed
 */
public function getIdDetailSortie(){
return $this->idDetailSortie;
}

/**
 * @return mixed
 */
public function getIdSortie(){
return $this->idSortie;
}

/**
 * @return mixed
 */
public function getIdClient(){
return $this->idClient;
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
 * @param mixed $idDetailSortie
 */
public function setIdDetailSortie($idDetailSortie){
$this->idDetailSortie = $idDetailSortie;
}

/**
 * @param mixed $idSortie
 */
public function setIdSortie($idSortie){
$this->idSortie = $idSortie;
}

/**
 * @param mixed $idClient
 */
public function setIdClient($idClient){
$this->idClient = $idClient;
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

