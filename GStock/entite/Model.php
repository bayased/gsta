<?php









  class modele  {
  
  	private  $idModele;
  	private  $libelle;
  	
  	

  
  
  public  function __construct() {
      
      
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
public function getLibelle(){
return $this->libelle;
}

/**
 * @param mixed $idModele
 */
public function setIdModele($idModele){
$this->idModele = $idModele;
}

/**
 * @param mixed $libelle
 */
public function setLibelle($libelle){
$this->libelle = $libelle;
}

  
  
  
}

