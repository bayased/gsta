<?php









  class Marque  {
  
  	private  $idMarque;
  	private  $libelle;
 	
  
 
public  function __construct() {
      
      
  }
/**
 * @return mixed
 */
public function getIdMarque(){
return $this->idMarque;
}

/**
 * @return mixed
 */
public function getLibelle(){
return $this->libelle;
}

/**
 * @param mixed $idMarque
 */
public function setIdMarque($idMarque){
$this->idMarque = $idMarque;
}

/**
 * @param mixed $libelle
 */
public function setLibelle($libelle){
$this->libelle = $libelle;
}

  
  
}

