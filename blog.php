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
          <section class="product-top-header">
         <div class="container-fuid">
            <div class="row">
               <div class="col-md-12 text-center aos-init aos-animate" data-aos="fade-down">
                  <h1>BLOG</h1>
               </div>
            </div>
         </div>
      </section>
          <div class="container mt-5">
              <div class="row">
                  <div class="col-md-4">
                      <div><img src="sadmin/product-images/cpvc.png" class="img-fluid"></div>
                      <div class="date">16 Sep 2021</div>
                      <p class="text-center"><b>CPVC PLUMBING SYSTEM</b></p>
                      <p class="text-center">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                    <p class="text-center"><button class="blog-read-more mb-5">Read More</button></p>
                  </div>
                  
                  <div class="col-md-4">
                      <div><img src="sadmin/product-images/cpvc.png" class="img-fluid"></div>
                      <div class="date">16 Sep 2021</div>
                      <p class="text-center"><b>CPVC PLUMBING SYSTEM</b></p>
                      <p class="text-center">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                    <p class="text-center"><button class="blog-read-more mb-5">Read More</button></p>
                  </div>
                  
                  <div class="col-md-4">
                      <div><img src="sadmin/product-images/cpvc.png" class="img-fluid"></div>
                      <div class="date">16 Sep 2021</div>
                      <p class="text-center"><b>CPVC PLUMBING SYSTEM</b></p>
                      <p class="text-center">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                    <p class="text-center"><button class="blog-read-more mb-5">Read More</button></p>
                  </div>
              </div>
          </div>
      </div>  
    <?php include('footer.php'); ?>
   </body>
</html>