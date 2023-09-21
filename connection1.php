<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Connexion</title>
</head>
<body>
<?php
   $servername ="localhost";
   $username = "root";
   $password = "";
  
   try{
     $conn = new PDO("mysql:host=$servername;dbname=garage1",$username,$password);
     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   }
   catch(PDOException $e){
     echo"Erreur : " . $e->getMessage();

   }
  // Connexion BDD ICI
 
if($_SERVER['REQUEST_METHOD'] == "POST" ){
 
 $email = $_POST['email'];
 $password = $_POST['password'];

 if($email != "" && $password != ""){
     /*$req = $conn->query("SELECT * FROM users WHERE email = '$email' AND password = '$password'");
     $rep = $req->fetch();*/
     $requete = $conn->prepare("SELECT * FROM users WHERE email = '$email' AND password = '$password'");
     $rep = $requete->fetchAll();
       
      
     if($rep['id'] != false ){
      var_dump($requete);die;
          header("Location: index1.php");
          exit();
     } else {
         $err_message = "Email ou mot de passe incorrecte !";
     }
 }
}
  ?>
<div class="login-form-container">
    <span id="close-login-form" class="fas fa-times"></span>
    <!-- <form method="POST" action="#">
        <h3>user login</h3>
        <input type="email" name="email" placeholder="email" class="box" required>
        <input type="password" name="password" placeholder="password" class="box" required>
        <p>forget yours password <a href="#">click here</a></p>
        <input type="submit" value="login now" class="btn">
      <p>or login with</p>
      <div class="button"> 
        <a href="#" class="btn">google</a>
        <a href="#" class="btn">facebook</a>
        <p>don't have a account <a href="#">create one</a></p>

      </div>
    </form> -->
   </div>
 
</body>
</html>