<?php
include('sadmin/connection.php');
?>
<!DOCTYPE html>
<html>
   <head>
      <title>Apollo</title>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon"> 
      <link rel="stylesheet" href="css/bootstrap.min.css" />
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
      <link
         href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
         rel="stylesheet" />
      <link
         href="https://fonts.googleapis.com/css2?family=Crimson+Pro:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
         rel="stylesheet" />
      <link rel="stylesheet" href="css/style.css" />
      <link rel="stylesheet" href="css/aos.css" />
      <link rel="stylesheet" href="css/animate.min.css" />
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/aos.js"></script>
      <script src="js/main.js"></script>
      <script src="js/index.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
   </head>
   <body>
      <?php include('header.php'); ?>
      <div id="main-content" style="overflow: hidden;">
      <section class="d-none d-sm-none d-md-block d-lg-block mt-4" data-aos="zoom-in" data-aos-delay="100">
         <div class="container">
            <div class="row">
               <div class="col-md-12 p-0">
                  <iframe width="100%" height="500" src="https://www.youtube.com/embed/whmbmyyRJ2w" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
               </div>
            </div>
         </div>
      </section>
      <section class="d-block d-sm-block d-md-none d-lg-none" data-aos="zoom-in" data-aos-delay="100">
         <div class="container">
            <div class="row">
               <div class="col-md-12 p-0">
                  <iframe width="100%" height="400" src="https://www.youtube.com/embed/whmbmyyRJ2w" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
               </div>
            </div>
         </div>
      </section>
      <section class="mb-5 mt-5">
         <div class="container mt-4 product-plumbing">
            <div class="row">
               <div class="col-md-12 text-center">
                  <h1 class="apollo-h1">Play the video to<br> watch the application</h1>
               </div>
            </div>
            <div class="row justify-content-md-center">
                <?php
                    $query = "SELECT * FROM products WHERE category = 'Home Solutions'";
                    $sql = mysqli_query($conn, $query);
                    while($data = mysqli_fetch_array($sql)){
                        echo '<div class="col-md-3 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="100">
                                  <a href="single-product.php?id='.$data['id'].'">
                                     <p class="mb-0 mt-5 text-center font-weight-bold text-uppercase">Click Here to Know More</p>
                                     <div class="product-image">
                                        <img src="sadmin/product-images/'.$data['productMainImg'].'">
                                        <p>'.$data['productTitle'].'</p>
                                     </div>
                                  </a>
                               </div>';        
                    }
                ?>
               <!-- <div class="col-md-3"></div>
               <div class="col-md-3 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="100">
                  <a href="cpvc-pipes-fittings.html">
                     <p class="mb-0 mt-5 text-center font-weight-bold text-uppercase">Click Here to Know More</p>
                     <div class="product-image">
                        <img src="img/cpvc-pipes-fittings.png">
                        <p><span class="text-lowercase">c</span>PVC Pipes &amp; Fittings</p>
                     </div>
                  </a>
               </div>
               <div class="col-md-3 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="110">
                  <a href="">
                     <p class="mb-0 mt-5 text-center font-weight-bold text-uppercase">Click Here to Know More</p>
                     <div class="product-image">
                        <img src="img/upvc-plumbing-system.png">
                        <p><span class="text-lowercase">u</span>PVC Plumbing System</p>
                     </div>
                  </a>
               </div>
               <div class="col-md-3"></div> -->
            </div>
         </div>
      </section>
      <?php include('footer.php'); ?>
   </body>
</html>