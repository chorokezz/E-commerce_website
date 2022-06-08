<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<section class="about">

   <div class="row">

      <div class="box">
         <img src="images/indexJ.png" alt="">
         <h3>why choose us?</h3>
         <p>The cooperatives in Morocco need to integrate the digital world so they can extend their businesses and reach more people to do so they will need to have a website on which they represent their products and sell it online, and then starting a marketing process.</p>
            <p>First of all we’re talking about more than 27 000 cooperative in Morocco, and they are in different sectors, especially Agriculture and food industry, Artisan and Argan. The better solution is to offer an intelligent and good represented digital market for all of the cooperatives in Morocco, with one access but different designs and presentations (depends to each sector)</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

      <div class="box">
         <img src="images/R.2d03429b43077f33e23c3a116f42dc8e.png" alt="">
         <h3>what we provide?</h3>
         <p>We provide you BIO vegetables, fruits and argan, and for the artisan is 100% made by hand.</p>
         <a href="shop.php" class="btn">our shop</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">clients reivews</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/man.png" alt="">
         <p>everything is nice and also the vegetables are so good.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>user56</h3>
      </div>

      <div class="box">
         <img src="images/man.png" alt="">
         <p>nice website,fast delivery,good quality. Everything is good and nice.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>user74</h3>
      </div>

      <div class="box">
         <img src="images/woman.png" alt="">
         <p>j'aime beaucoup les pelluches qui sont fabriquées par la main.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>user566</h3>
      </div>

      <div class="box">
         <img src="images/woman.png" alt="">
         <p>Tout est bien je suis très satisfaite pour ce travail. J'éspère qu'il y'a plus que site web comme ce site.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>user8</h3>
      </div>

      <div class="box">
         <img src="images/man.png" alt="">
         <p>Not bad! Everything is nice except the artisan some of it are not that good but it's okay not a big problem.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>user5</h3>
      </div>

      <div class="box">
         <img src="images/woman.png" alt="">
         <p>je suis satisfait de ce site , ses outils m'ont aidé à trouver exactement ce que j'ai recherché</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>user98</h3>
      </div>

   </div>

</section>









<?php include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>