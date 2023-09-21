
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style2.css">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
  </head>
<body>
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
<img  class="home-parallax" data-speed="5" src="image/car.jpg" alt="voiture" width="96%" height="96%">
<a href="#" class="btn home-parallax" data-speed="7">Explore car</a>

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
         <img src="image/car2.jpg" alt="voitures 2" >
         <div class="content">
             <h3>new model</h3>
             <div class="price"> <span>price:</span> $65000/-</div>
             <p>
                new 
                <span class="fas fa-circle"></span>2021
                <span class="fas fa-circle"></span>automatic
               <span class="fas fa-circle"></span>petrol
               <span class="fas fa-circle"></span>183 MPH
               
             </p>
             <a href="#" class="btn">ckek out</a>
         </div>

       </div>

       <div class="swiper-slide box">
        <img src="image/car3.jpg" alt="voitures 2" >
        <div class="content">
            <h3>new model</h3>
            <div class="price"> <span>price:</span> $65000/-</div>
            <p>
               new 
               <span class="fas fa-circle"></span>2021
               <span class="fas fa-circle"></span>automatic
              <span class="fas fa-circle"></span>petrol
              <span class="fas fa-circle"></span>183 MPH
              
            </p>
            <a href="#" class="btn">ckek out</a>
        </div>

      </div>
       
      <div class="swiper-slide box">
        <img src="image/car4.jpg" alt="voitures 2" >
        <div class="content">
            <h3>new model</h3>
            <div class="price"> <span>price:</span> $65000/-</div>
            <p>
               new 
               <span class="fas fa-circle"></span>2021
               <span class="fas fa-circle"></span>automatic
              <span class="fas fa-circle"></span>petrol
              <span class="fas fa-circle"></span>183 MPH
              
            </p>
            <a href="#" class="btn">ckek out</a>
        </div>

      </div>


      <div class="swiper-slide box">
        <img src="image/car3.jpg" alt="voitures 2" >
        <div class="content">
            <h3>new model</h3>
            <div class="price"> <span>price:</span> $65000/-</div>
            <p>
               new 
               <span class="fas fa-circle"></span>2021
               <span class="fas fa-circle"></span>automatic
              <span class="fas fa-circle"></span>petrol
              <span class="fas fa-circle"></span>183 MPH
              
            </p>
            <a href="#" class="btn">ckek out</a>
        </div>

      </div>  

      <div class="swiper-slide box">
        <img src="image/car2.jpg" alt="voitures 2" >
        <div class="content">
            <h3>new model</h3>
            <div class="price"> <span>price:</span> $65000/-</div>
            <p>
               new 
               <span class="fas fa-circle"></span>2021
               <span class="fas fa-circle"></span>automatic
              <span class="fas fa-circle"></span>petrol
              <span class="fas fa-circle"></span>183 MPH
              
            </p>
            <a href="#" class="btn">ckek out</a>
        </div>

      </div>

      <div class="swiper-slide box">
        <img src="image/car1.jpg" alt="voitures 2" >
        <div class="content">
            <h3>new model</h3>
            <div class="price"> <span>price:</span> $65000/-</div>
            <p>
               new 
               <span class="fas fa-circle"></span>2021
               <span class="fas fa-circle"></span>automatic
              <span class="fas fa-circle"></span>petrol
              <span class="fas fa-circle"></span>183 MPH
              
            </p>
            <a href="#" class="btn">ckek out</a>
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
      <h3>car assurance</h3>
      <p>Lorem ipsum dolor, sit amet consectetur adipisicing 
        elit. Asperiores debitis temporibus molestias sapiente voluptates odio maiores quasi sunt, consectetur accusantium magni laudantium animi ipsam. 
        Id dolorem nulla in ullam quisquam!</p>
        <a href="#" class="btn"> read more</a>

    </div>

    <div class="box">
      <i class="fas fa-car-battery"></i>
      <h3>battery replacement</h3>
      <p>Lorem ipsum dolor, sit amet consectetur adipisicing 
        elit. Asperiores debitis temporibus molestias sapiente voluptates odio maiores quasi sunt, consectetur accusantium magni laudantium animi ipsam. 
        Id dolorem nulla in ullam quisquam!</p>
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
      <p>Lorem ipsum dolor, sit amet consectetur adipisicing 
        elit. Asperiores debitis temporibus molestias sapiente voluptates odio maiores quasi sunt, consectetur accusantium magni laudantium animi ipsam. 
        Id dolorem nulla in ullam quisquam!</p>
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
          <img src="image/car1.jpg" alt="voiture" width="100px" height="100px">
          <h3>new model</h3>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
          </div>
         <div class="price"> $55,000/-</div>
         <a href="#" class="btn"> chek out</a>
        </div>

        <div class="  swiper-slide box">
          <img src="image/car2.jpg" alt="voiture" width="100px" height="100px">
          <h3>new model</h3>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
          </div>
         <div class="price"> $55,000/-</div>
         <a href="#" class="btn"> chek out</a>
        </div>


        <div class=" swiper-slide box">
          <img src="image/car3.jpg" alt="voiture" width="100px" height="100px">
          <h3>new model</h3>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
          </div>
         <div class="price"> $55,000/-</div>
         <a href="#" class="btn"> chek out</a>
        </div>

        <div class="swiper-slide box">
          <img src="image/car4.jpg" alt="voiture" width="100px" height="100px">
          <h3>new model</h3>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
          </div>
         <div class="price"> $55,000/-</div>
         <a href="#" class="btn"> chek out</a>
        </div>

      </div>
  <div class="swiper-pagination"></div>

  </div>

  <div class="swiper featured-slider">
    <div class="swiper-wrapper">
      <div class="swiper-slide box">
        <img src="image/car1.jpg" alt="voiture" width="100px" height="100px">
        <h3>new model</h3>
        <div class="stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star-half-alt"></i>
        </div>
       <div class="price"> $55,000/-</div>
       <a href="#" class="btn"> chek out</a>
      </div>

      <div class="swiper-slide box">
        <img src="image/car2.jpg" alt="voiture" width="100px" height="100px">
        <h3>new model</h3>
        <div class="stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star-half-alt"></i>
        </div>
       <div class="price"> $55,000/-</div>
       <a href="#" class="btn"> chek out</a>
      </div>


      <div class=" swiper-slide box">
        <img src="image/car3.jpg" alt="voiture" width="100px" height="100px">
        <h3>new model</h3>
        <div class="stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star-half-alt"></i>
        </div>
       <div class="price"> $55,000/-</div>
       <a href="#" class="btn"> chek out</a>
      </div>

      <div class=" swiper-slide box">
        <img src="image/car4.jpg" alt="voiture" width="100px" height="100px">
        <h3>new model</h3>
        <div class="stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star-half-alt"></i>
        </div>
       <div class="price"> $55,000/-</div>
       <a href="#" class="btn"> chek out</a>
      </div>

    </div>
<div class="swiper-pagination"></div>

</div>

</section>
<!--fin section factred-->

<!--debut section newletter-->
<section class="newsletter">
     <h3>sbcribe for latest updates</h3>
    <p>lorem ipsum sit amet consecttetur adipsicing elit vero ducenimos</p>
    <form action="">
      <input type="email" name="" placeholder="enter your email" id="">
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
      <img src="image/photo1.jpg" alt="personne">
      <div class="content">
        <p>Une équipe professionnelle, accueillante et de bons conseils.Je recommande !</p>
          <h3>joe deo</h3>
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
        <p>il y a 4 mois
Une vraie mine de conseils ! Merci beaucoup à Aymeric qui a su me guider et faire un excellent travail ! Je recommande vivement !</p>
          <h3>joe deo</h3>
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
      <img src="image/photo1.jpg" alt="personne">
      <div class="content">
        <p> il y a 3 mois
très bon accueil de la part d'Éric, leurs voiturettes sont trop mimi rapide et efficace !</p>
          <h3>joe deo</h3>
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
        <p>Lorem ipsum dolor sit amet consectetur adipisicing 
          elit. Quisquam eos pariatur debitis, eaque facilis architecto a dolor officia illum deserunt quod adipisci ea libero, 
          optio nisi soluta molestiae sint atque?</p>
          <h3>joe deo</h3>
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
      <img src="image/photo1.jpg" alt="personne">
      <div class="content">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing 
          elit. Quisquam eos pariatur debitis, eaque facilis architecto a dolor officia illum deserunt quod adipisci ea libero, 
          optio nisi soluta molestiae sint atque?</p>
          <h3>joe deo</h3>
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
        <p>Lorem ipsum dolor sit amet consectetur adipisicing 
          elit. Quisquam eos pariatur debitis, eaque facilis architecto a dolor officia illum deserunt quod adipisci ea libero, 
          optio nisi soluta molestiae sint atque?</p>
          <h3>joe deo</h3>
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
    
</body>
</html>