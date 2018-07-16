<?php









  class categorie  {
  
  
  	private  $idCategorie;
  	private  $libelle;
  
  
  public  function __construct() {
      
      
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
public function getLibelle(){
return $this->libelle;
}

/**
 * @param mixed $idCategorie
 */
public function setIdCategorie($idCategorie){
$this->idCategorie = $idCategorie;
}

/**
 * @param mixed $libelle
 */
public function setLibelle($libelle){
$this->libelle = $libelle;
}

  
  
  
}

