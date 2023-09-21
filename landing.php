<?php 
    session_start();
    require_once 'config.php'; // ajout connexion bdd 
   // si la session existe pas soit si l'on est pas connecté on redirige
    if(!isset($_SESSION['users'])){
        header('Location:index2m.php');
        die();
    }

    // On récupere les données de l'utilisateur
    $req = $bdd->prepare('SELECT * FROM users WHERE token = ?');
    $req->execute(array($_SESSION['users']));
    $data = $req->fetch();
   
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Espace membre</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style2.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
  </head>
  <body>
        <div class="container">
            <div class="col-md-12">
                <?php 
                        if(isset($_GET['err'])){
                            $err = htmlspecialchars($_GET['err']);
                            switch($err){
                                case 'current_password':
                                    echo "<div class='alert alert-danger'>Le mot de passe actuel est incorrect</div>";
                                break;

                                case 'success_password':
                                    echo "<div class='alert alert-success'>Le mot de passe a bien été modifié ! </div>";
                                break; 
                            }
                        }
                    ?>


                <div class="text-center">
                <?php 
        include ("header.php");
        ?>

        <!--login forms-->
   
        
        
        

        <?php 
        include ("connection1.php");
        ?>
         <!--login forms-->
<!--debut section home-->
<section class="home" id="home">

<h1 class="home-parallax" data-speed="-2">find your car</h1>
<img  class="home-parallax" data-speed="5" src="image/acceuil.jpg" alt="voiture" width="96%" height="96%">
<a href="#" class="btn home-parallax" data-speed="7">Explore car</a>
<section class="presentation">
      <p>Depuis 2013, Garage V. Parrot location est specialiséé dans la reparation et la location de véhicules .<br>
      Nous veillons aux petits details pour vous permettre de rouler en toute sécurité et assurer le bon fonctionnement de votre voiture .<br>
     Louez une voitues doccation et rouleé en toute sérénité. <br>
       Appelez-nous au 06 73 89 23 49 pour obtenir davantage de renseignement sur nos préstation de mécanique auto et de location .
</p>
</section>
</section>
<!--fin section home-->

<!--debut section icones-->
<section class="icons-container">
    <div class="icons">
      <i class="fas fa-home"></i>
      <div class="content">
       <h3>150+</h3>
       <p>branches</p>
      </div>
    </div>

    <div class="icons">
        <i class="fas fa-car"></i>
        <div class="content">
         <h3>4770+</h3>
         <p>cars sold</p>
        </div>
      </div>

      <div class="icons">
        <i class="fas fa-car"></i>
        <div class="content">
         <h3>890+</h3>
         <p>new cars</p>
        </div>
      </div>

      <div class="icons">
        <i class="fas fa-users"></i>
        <div class="content">
         <h3>150+</h3>
         <p>branches</p>
        </div>
      </div>
</section>
<!--fin section icones-->

<!--debut section vehicules-->
  <section class="vehicules" id="vehicules">
<h1 class="heading">popular <span>vehicules</span></h1>
 <div class=" swiper vehicules-slider">
    <div class=" swiper-wrapper">
       <div class="swiper-slide box">
         <img src="image/ad.jpg" alt="voitures 1" >
         <div class="content">
             <h3>new model</h3>
             <div class="price"> <span>price:</span> 65000£/-</div>
             <p>
                new 
                <span class="fas fa-circle"></span>2021
                <span class="fas fa-circle"></span>automatic
               <span class="fas fa-circle"></span>petrol
               <span class="fas fa-circle"></span>183 K/H
               
             </p>
             <a href="voirplus.php" class="btn">ckek out</a>
         </div>

       </div>

       <div class="swiper-slide box">
        <img src="image/b.jpg" alt="voitures 2" >
        <div class="content">
            <h3>new model</h3>
            <div class="price"> <span>price:</span> $65000/-</div>
            <p>
               new 
               <span class="fas fa-circle"></span>2018
               <span class="fas fa-circle"></span>manuel
              <span class="fas fa-circle"></span>petrol
              <span class="fas fa-circle"></span>183 MPH
              
            </p>
            <a href="voirplus.php" class="btn">ckek out</a>
        </div>

      </div>
       
      <div class="swiper-slide box">
        <img src="image/c.jpg" alt="voitures 3" >
        <div class="content">
            <h3>new model</h3>
            <div class="price"> <span>price:</span> 73000£/-</div>
            <p>
               new 
               <span class="fas fa-circle"></span>2021
               <span class="fas fa-circle"></span>automatic
              <span class="fas fa-circle"></span>electrique
              <span class="fas fa-circle"></span>183 MPH
              
            </p>
            <a href="voirplus.php" class="btn">ckek out</a>
        </div>

      </div>


      <div class="swiper-slide box">
        <img src="image/d.jpg" alt="voitures 4" >
        <div class="content">
            <h3>new model</h3>
            <div class="price"> <span>price:</span> 20000£/-</div>
            <p>
               new 
               <span class="fas fa-circle"></span>2020
               <span class="fas fa-circle"></span>automatic
              <span class="fas fa-circle"></span>petrol
              <span class="fas fa-circle"></span>183 MPH
              
            </p>
            <a href="voirplus.php" class="btn">ckek out</a>
        </div>

      </div>  

      <div class="swiper-slide box">
        <img src="image/e.jpg" alt="voitures 5" >
        <div class="content">
            <h3>new model</h3>
            <div class="price"> <span>price:</span> 15000£/-</div>
            <p>
               new 
               <span class="fas fa-circle"></span>2013
               <span class="fas fa-circle"></span>automatic
              <span class="fas fa-circle"></span>petrol
              <span class="fas fa-circle"></span>183 MPH
              
            </p>
            <a href="voirplus.php" class="btn">ckek out</a>
        </div>

      </div>

      <div class="swiper-slide box">
        <img src="image/f.jpg" alt="voitures 6" >
        <div class="content">
            <h3>new model</h3>
            <div class="price"> <span>price:</span> $65000/-</div>
            <p>
               new 
               <span class="fas fa-circle"></span>2020
               <span class="fas fa-circle"></span>manuel
              <span class="fas fa-circle"></span>petrol
              <span class="fas fa-circle"></span>183 MPH
              
            </p>
            <a href="voirplus.php" class="btn">ckek out</a>
        </div>

      </div>
      
    </div>
    <div class="swiper-pagination"></div>

 </div>


  </section>

<!--fin section vehicules-->

<!--debut section services-->
<section class="services" id="services">
   <h1 class="heading">our <span>services</span></h1>
   <div class="box-container">
    <div class="box">
      <i class="fas fa-car"></i>
      <h3>car selling</h3>
      <p>Lorem ipsum dolor, sit amet consectetur adipisicing 
        elit. Asperiores debitis temporibus molestias sapiente voluptates odio maiores quasi sunt, consectetur accusantium magni laudantium animi ipsam. 
        Id dolorem nulla in ullam quisquam!</p>
        <a href="voirplus.html" class="btn"> read more</a>

    </div>

    <div class="box">
      <i class="fas fa-tools"></i>
      <h3>reparts parts</h3>
      <p>Les ateliers du Garage Bonhomme travaillent exclusivement au service de la voiture sans permis, nous vous proposons donc un service et une compétence maximum pour toutes les marques de voiture sans permis.</p>
        <a href="#" class="btn"> read more</a>

    </div>

    <div class="box">
      <i class="fas fa-car-crash"></i>
      <h3>car Assurance</h3>
      <p>il est assuré par nos agent ou par nous dans les plus bref delais .! <br>
    en cas de panne hors de nos horaires douvertures
    </p>
        <a href="#" class="btn"> read more</a>

    </div>

    <div class="box">
      <i class="fas fa-car-battery"></i>
      <h3>battery replacement</h3>
      <p>Re,placer vos baterie dans nos attelier! <br>
      les piéces ne sont pas incluses.
    </p>
        <a href="#" class="btn"> read more</a>

    </div>

    <div class="box">
      <i class="fas fa-gas-pump"></i>
      <h3>oil change</h3>
      <p>Lorem ipsum dolor, sit amet consectetur adipisicing 
        elit. Asperiores debitis temporibus molestias sapiente voluptates odio maiores quasi sunt, consectetur accusantium magni laudantium animi ipsam. 
        Id dolorem nulla in ullam quisquam!</p>
        <a href="#" class="btn"> read more</a>

    </div>

    <div class="box">
      <i class="fas fa-headset"></i>
      <h3>24/7 support</h3>
      <p>Nons sommes joignable chaque jours 24H sur 24H
        7jours/7 de 9h a 19h
      </p>
        <a href="#" class="btn"> read more</a>

    </div>

   </div>
</section>
<!--fin section services-->


<!--debut  section factured -->

<section class="feactured" id="feactured">
  <h1 class="heading"><span>feactured</span>cars</h1>
  <div class="swiper featured-slider">
      <div class="swiper-wrapper">
        <div class="swiper-slide box">
          <img src="image/h.jpg" alt="voiture" width="200px" height="200px">
          <h3>new model</h3>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
          </div>
         <div class="price"> 55000£/-</div>
         <a href="voirplus.php" class="btn"> chek out</a>
        </div>

        <div class="  swiper-slide box">
          <img src="image/i.jpg" alt="voiture" width="200px" height="200px">
          <h3>new model</h3>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
          </div>
         <div class="price"> 75000£/-</div>
         <a href="voirplus.php" class="btn"> chek out</a>
        </div>


        <div class=" swiper-slide box">
          <img src="image/k.jpg" alt="voiture" width="200px" height="200px">
          <h3>new model</h3>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
          </div>
         <div class="price"> 15000£/-</div>
         <a href="#" class="btn"> chek out</a>
        </div>

        <div class="swiper-slide box">
          <img src="image/l.jpg" alt="voiture" width="200px" height="200px">
          <h3>new model</h3>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
          </div>
         <div class="price"> 38000£/-</div>
         <a href="#" class="btn"> chek out</a>
        </div>

      </div>
  <div class="swiper-pagination"></div>

  </div>

  <div class="swiper featured-slider">
    <div class="swiper-wrapper">
      <div class="swiper-slide box">
        <img src="image/m.jpg" alt="voiture" width="200px" height="200px">
        <h3>new model</h3>
        <div class="stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star-half-alt"></i>
        </div>
       <div class="price"> 70000£/-</div>
       <a href="#" class="btn"> chek out</a>
      </div>

      <div class="swiper-slide box">
        <img src="image/o.jpg" alt="voiture" width="200px" height="200px">
        <h3>new model</h3>
        <div class="stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star-half-alt"></i>
        </div>
       <div class="price"> 40000£/-</div>
       <a href="#" class="btn"> chek out</a>
      </div>


      <div class=" swiper-slide box">
        <img src="image/ab.jpg" alt="voiture" width="200px" height="200px">
        <h3>autre model</h3>
        <div class="stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star-half-alt"></i>
        </div>
       <div class="price"> 25000£/-</div>
       <a href="#" class="btn"> chek out</a>
      </div>

      <div class=" swiper-slide box">
        <img src="image/ac.jpg" alt="voiture" width="200px" height="200px">
        <h3>new model</h3>
        <div class="stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star-half-alt"></i>
        </div>
       <div class="price"> 10000£/-</div>
       <a href="#" class="btn"> chek out</a>
      </div>

    </div>
<div class="swiper-pagination"></div>

</div>

</section>
<!--fin section factred-->

<!--debut section newletter-->
<section class="newsletter">
     <h3>Souscrire a notre New Letter</h3>
    <p>S'inscrire pour ne pas raté nos Nouveauté</p>
    <form action="">
      <input type="email" name="" placeholder="enter votre email" id="">
      <input type="submit" name="" class="subscribe" id="">
    </form>
</section>

<!--fin section newletter-->

<!--   debut section review-->
<section class="reviews" id="reviews">
<h1 class="heading">client's <span>review</span></h1>
<div class="swiper reviews-slider">
  <div class="swiper-wrapper">
    <div class="swipper-slider box">
      <img src="image/F1.jpg" alt="personne">
      <div class="content">
        <p>Une équipe professionnelle, accueillante et de bons conseils.Je recommande !</p>
          <h3>Christine</h3>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
          </div>
      </div>
    </div>


    <div class="swipper-slider box">
      <img src="image/h1.jpg" alt="personne">
      <div class="content">
        <p>
Une vraie mine de conseils ! Merci beaucoup <br> à Aymeric qui a su me guider et faire un excellent travail ! <br> Je recommande vivement !</p>
          <h3>Eric du boit</h3>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
          </div>
      </div>
    </div>

    <div class=" swipper-slider box">
      <img src="image/F2.jpg" alt="personne">
      <div class="content">
        <p>
très bon accueil de la part d'Éric, leurs voiturettes sont trop mimi rapide et efficace !</p>
          <h3>Mari Ange</h3>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
          </div>
      </div>
    </div>

    <div class="swipper-slider box">
      <img src="image/h2.jpg" alt="personne">
      <div class="content">
        <p>Merci a lequipe professionel et acceuillant <br>
      je recommande fortement</p>
          <h3>chris chaut</h3>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
          </div>
      </div>
    </div>

 


    <div class="swipper-slider box">
      <img src="image/photo4.jpg" alt="personne">
      <div class="content">
        <p>Tu est satisfait de nos prestations ? tu peut laisser un commantaires.</p>
          <h3>A toi !</h3>
         <button class="btn btn-bd-primary"> <a href="#"></a> Soumettre</button>
      </div>
    </div>
  </div>
  <div class="swiper-pagination"></div>
</div>
</section>


<!--fin section review-->

<!--debut section contact-->
<section class="contact" id="contact">
<h1 class="heading"> <span>contact </span> us</h1>
<div class="row">
  <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2630.232073950478!2d1.9662102999999993!3d48.75836430000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e683a36f97e4ef%3A0x6f2465b6ed205a83!2s1%20R%C3%A9s%20du%20Bois%20de%20l&#39;%C3%89tang%2C%2078320%20La%20Verri%C3%A8re!5e0!3m2!1sen!2sfr!4v1691459903863!5m2!1sen!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

  <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <h3>get in touche</h3>
    <input type="text" placeholder="name" id="name" class="box"  value="<?php // echo $name ;?>">
    <p class="comments"><?php // echo $nameError."je veux connaitre ton nom" ; ?> </p>
    <input type="email" placeholder="email" class="box" required value="<?php  //echo $email ;?>">
    <input type="number" placeholder="number" class="box" required value="<?php // echo $number ;?>">
    <textarea placeholder="message" class="box" id="" cols="30" rows="10" required><?php // echo $name ; ?></textarea >
    <input type="submit" value="send message" class="btn">
  </form>



</div>
</section>

<!--fin section contac-->
<!--debut section footer-->

<!--fin section footer-->

<?php 
include ("footer.php");
?>

<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="CSS/index.js"></script>
                        <hr />
                        <a href="deconnexion.php" class="btn btn-danger btn-lg">Déconnexion</a>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#change_password">
                          Changer mon mot de passe
                        </button> 
                </div>
            </div>
        </div>                          
        <!-- Modal -->
        <div class="modal fade" id="change_password" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Changer mon mot de passe</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                         </div>
                            <div class="modal-body">
                                <form action="layouts/change_password.php" method="POST">
                                    <label for='current_password'>Mot de passe actuel</label>
                                    <input type="password" id="current_password" name="current_password" class="form-control" required/>
                                    <br />
                                    <label for='new_password'>Nouveau mot de passe</label>
                                    <input type="password" id="new_password" name="new_password" class="form-control" required/>
                                    <br />
                                    <label for='new_password_retype'>Re tapez le nouveau mot de passe</label>
                                    <input type="password" id="new_password_retype" name="new_password_retype" class="form-control" required/>
                                    <br />
                                    <button type="submit" class="btn btn-success">Sauvegarder</button>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
                            </div>
                        </div>
                    </div>
                </div>

            <div class="modal fade" id="avatar" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Changer mon avatar</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                        </div>
                        <div class="modal-body">
                            <form action="layouts/change_avatar.php" method="POST" enctype="multipart/form-data">
                                <label for="avatar">Images autorisées : png, jpg, jpeg, gif - max 20Mo</label>
                                <input type="file" name="avatar_file">
                                <br />
                                <button type="submit" class="btn btn-success">Modifier</button>
                            </form>
                        </div>
                        <br />
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
                        </div>
                    </div>
                </div>
            </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
