<?php









  class Sortie  {
  
  
  	private  $idSortie;
  	private  $idClient;
  	private  $dateSortie;
  	private  $numeroFacture;
  
  
  public  function __construct() {
      
      
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
public function getDateSortie(){
return $this->dateSortie;
}

/**
 * @return mixed
 */
public function getNumeroFacture(){
return $this->numeroFacture;
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
 * @param mixed $dateSortie
 */
public function setDateSortie($dateSortie){
$this->dateSortie = $dateSortie;
}

/**
 * @param mixed $numeroFacture
 */
public function setNumeroFacture($numeroFacture){
$this->numeroFacture = $numeroFacture;
}

  
}

