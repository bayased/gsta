<?php
class ClasseBDDMysql {
	
	private $host='localhost'; // le chemin vers le serveur
	private $base='gstock'; // le nom de votre base de donn�es
	private $login='root'; // nom d'utilisateur pour se connecter
	private $password=''; // mot de passe de l'utilisateur pour se connecter
	
	
	public  function __construct() {
		
		
	}
	
    public function SGBD($server, $user, $password, $base )
    {
     // V�rification des variables
                 if (empty ($login) || empty ($host) || empty ($base))
                    {
                        // Affichage du message d'erreur
                        echo "<b>Erreur :</b> Une ou plusieurs variable(s) n'ont pas �t� renseign�.";
                        exit;
                    }

                else {
                        // Initialisation des attributs
                        $this->login = $login;
                        $this->password = $password;
                        $this->host = $host;
                        $this->base = $base;
                    }
            }
	
   function connect()
    {
        // Connection � MySQL
        $connect = mysql_pconnect ($this->host, $this->login, $this->password);

        // V�rification de la connection
        if (!$connect)
            {
                // Affichage du message d'erreur
                echo "<b>Erreur :</b> Connection � MySQL impossible.";
                exit;
            }

        // Connection � la base de donn�es
        if (!mysql_select_db ($this->base, $connect))
            {
                // Affichage du message d'erreur
                echo "<b>Erreur :</b> Connection � la base de donn�es impossible.";
                exit;
            }
        
        // Initialisation de l'attribut de connection
        $this->connect = $connect;
    }

	function executerSql ($query)
    {
        // Ex�cution de la requ�te
        $req=mysql_query($query);
        
        // V�rification de la requ�te
        if (!$req)
            {
                // Affichage du message d'erreur
                echo "<b>Erreur :</b> Impossible d'effectuer la requ�te au serveur.";
                exit;
            }
        else {
                // Initialisation de l'attribut de requ�te
                return $req;
            }
    }
    
	function deconnect ()
    {
        // D�connection de la base de donn�es
        mysql_close ($this->connect);
    }
}


?>
