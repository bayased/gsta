<?php
class ClasseBDDMysql {
	
	private $host='localhost'; // le chemin vers le serveur
	private $base='gstock'; // le nom de votre base de données
	private $login='root'; // nom d'utilisateur pour se connecter
	private $password=''; // mot de passe de l'utilisateur pour se connecter
	
	
	public  function __construct() {
		
		
	}
	
    public function SGBD($server, $user, $password, $base )
    {
     // Vérification des variables
                 if (empty ($login) || empty ($host) || empty ($base))
                    {
                        // Affichage du message d'erreur
                        echo "<b>Erreur :</b> Une ou plusieurs variable(s) n'ont pas été renseigné.";
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
        // Connection à MySQL
        $connect = mysql_pconnect ($this->host, $this->login, $this->password);

        // Vérification de la connection
        if (!$connect)
            {
                // Affichage du message d'erreur
                echo "<b>Erreur :</b> Connection à MySQL impossible.";
                exit;
            }

        // Connection à la base de données
        if (!mysql_select_db ($this->base, $connect))
            {
                // Affichage du message d'erreur
                echo "<b>Erreur :</b> Connection à la base de données impossible.";
                exit;
            }
        
        // Initialisation de l'attribut de connection
        $this->connect = $connect;
    }

	function executerSql ($query)
    {
        // Exécution de la requête
        $req=mysql_query($query);
        
        // Vérification de la requête
        if (!$req)
            {
                // Affichage du message d'erreur
                echo "<b>Erreur :</b> Impossible d'effectuer la requête au serveur.";
                exit;
            }
        else {
                // Initialisation de l'attribut de requête
                return $req;
            }
    }
    
	function deconnect ()
    {
        // Déconnection de la base de données
        mysql_close ($this->connect);
    }
}


?>
