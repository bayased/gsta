<?php









  class Produit  {
  
  	private  $idProduit;
  	private  $idCategorie;
  	private  $idModele;
  	private  $idMarque;

  
  
  public  function __construct() {
      
      
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
public function getIdCategorie(){
return $this->idCategorie;
}

/**
 * @return mixed
 */
public function getIdModele(){
return $this->idModele;
}

/**
 * @return mixed
 */
public function getIdMarque(){
return $this->idMarque;
}

/**
 * @param mixed $idProduit
 */
public function setIdProduit($idProduit){
$this->idProduit = $idProduit;
}

/**
 * @param mixed $idCategorie
 */
public function setIdCategorie($idCategorie){
$this->idCategorie = $idCategorie;
}

/**
 * @param mixed $idModele
 */
public function setIdModele($idModele){
$this->idModele = $idModele;
}

/**
 * @param mixed $idMarque
 */
public function setIdMarque($idMarque){
$this->idMarque = $idMarque;
}

  
}

