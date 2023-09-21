<?php 
        /*
           Attention ! le host => l'adresse de la base de données et non du site !!
        
           Pour ceux qui doivent spécifier le port ex : 
           $bdd = new PDO("mysql:host=CHANGER_HOST_ICI;dbname=CHANGER_DB_NAME;charset=utf8;port=3306", "CHANGER_LOGIN", "CHANGER_PASS");
           
         */

         $servername = 'localhost';
         $username = 'root';
         $password = '';
    try 
    {
        $bdd = new PDO("mysql:host=$servername;dbname=garage1",$username,$password);
    }
    catch(PDOException $e)
    {
        die('Erreur : '.$e->getMessage());
    }
