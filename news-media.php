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
      <link rel="stylesheet" type="text/css" href="css/slick.css">
      <link rel="stylesheet" type="text/css" href="https://kenwheeler.github.io/slick/slick/slick-theme.css">
   </head>
   <body>
      <?php include('header.php'); ?>
      <div id="main-content" style="overflow: hidden;">
      <section>
         <div id="demo" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <img src="img/news-media.jpg" alt="News & Media" width="1100" height="500" class="animate__animated animate__pulse" />
                  <div class="carousel-caption">
                     <div class="col-md-12 mt-5">
                        <h1 class="text-black animate__animated animate__backInDown">News & Media</h1>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="pt-2 pb-2 bg-white">
         <div class="container">
            <div class="row">
               <div class="col-md-8">
                  <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                     <ol class="breadcrumb bg-white ml-0">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">
                           <a href="">News & Media</a>
                        </li>
                     </ol>
                  </nav>
               </div>
            </div>
         </div>
      </section>
      <!--<section class=" mb-5">-->
      <!--   <div class="container">-->
      <!--      <div class="row">-->
      <!--         <div class="col-md-8 offset-md-2 offset-lg-2 mb-4">-->
      <!--            <div class="row text-center news-media">-->
      <!--               <div class="col-md-12 p-0">-->
      <!--                  <a href="upcoming-event.php"><button data-aos="fade-up" data-aos-delay="50">Upcoming Events</button></a>-->
      <!--                  <a href="news-media.php"><button data-aos="fade-up" data-aos-delay="100" class="news-media-active">Press Release</button></a>-->
      <!--                  <a href="video-photos.php"><button data-aos="fade-up" data-aos-delay="150">Video / photos</button></a>-->
      <!--               </div>-->
      <!--            </div>-->
      <!--         </div>-->
      <!--      </div>-->
      <!--      <div class="container">-->
      <!--         <div class="row">-->
      <!--            <div class="col-lg-3 col-md-4 col-xs-6 p-0 thumb">-->
      <!--               <div class="main-div" data-aos="fade-right" data-aos-delay="50">-->
      <!--                  <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""-->
      <!--                     data-image="img/gallery/plumber-meet-at-fatepur.jpg"-->
      <!--                     data-target="#image-gallery">-->
      <!--                  <img class="img-thumbnail"-->
      <!--                     src="img/gallery/plumber-meet-at-fatepur.jpg"-->
      <!--                     alt="Another alt text" width="100%">-->
      <!--                  </a>-->
      <!--                  <div class="gallery-title">Plumber meet at Fatepur,<br> April 2017</div>-->
      <!--               </div>-->
      <!--               <div class="main-div" data-aos="fade-right" data-aos-delay="100">-->
      <!--                  <img class="img-thumbnail"-->
      <!--                     src="img/gallery/plumber-meeting-village-dhangr-disst-fethabaad.jpg"-->
      <!--                     alt="Another alt text" width="100%">-->
      <!--                  <div class="gallery-title">Plumber Meeting Village<br> Dhangr Disst Fethabaad</div>-->
      <!--               </div>-->
      <!--            </div>-->
      <!--            <div class="col-lg-3 col-md-4 col-xs-6 p-0 thumb">-->
      <!--               <div class="main-div" data-aos="fade-right" data-aos-delay="150">-->
      <!--                  <img class="img-thumbnail"-->
      <!--                     src="img/gallery/plumber-meet-fatehpur.jpg"-->
      <!--                     alt="Another alt text" width="100%">-->
      <!--                  <div class="gallery-title">SAP HANA Innovation Award<br> bagged by APL Apollo Industries</div>-->
      <!--               </div>-->
      <!--               <div class="main-div" data-aos="fade-right" data-aos-delay="200">-->
      <!--                  <img class="img-thumbnail"-->
      <!--                     src="img/gallery/plumber-workshop-meeting-pic-and-contact-detail.jpg"-->
      <!--                     alt="Another alt text" width="100%">-->
      <!--                  <div class="gallery-title">Plumber Workshop Meeting Pic<br> and Contact Detail</div>-->
      <!--               </div>-->
      <!--            </div>-->
      <!--            <div class="col-lg-3 col-md-4 col-xs-6 p-0 thumb">-->
      <!--               <div class="main-div" data-aos="fade-right" data-aos-delay="250">-->
      <!--                  <img class="img-thumbnail"-->
      <!--                     src="img/gallery/kissan-mela-ludhiana.jpg"-->
      <!--                     alt="Another alt text" width="100%">-->
      <!--                  <div class="gallery-title bottom">Kissan Mela Ludhiana</div>-->
      <!--               </div>-->
      <!--               <div class="main-div" data-aos="fade-right" data-aos-delay="300">-->
      <!--                  <div class="">-->
      <!--                     <img class="img-thumbnail"-->
      <!--                        src="img/gallery/van-activities.jpg"-->
      <!--                        alt="Another alt text" width="100%">-->
      <!--                     <div class="gallery-title bottom">Van Activities</div>-->
      <!--                  </div>-->
      <!--               </div>-->
      <!--            </div>-->
      <!--            <div class="col-lg-3 col-md-4 col-xs-6 p-0 thumb">-->
      <!--               <div class="main-div" data-aos="fade-right" data-aos-delay="350">-->
      <!--                  <img class="img-thumbnail"-->
      <!--                     src="img/gallery/kissan-mela-pantnagar.jpg"-->
      <!--                     alt="Another alt text" width="100%">-->
      <!--                  <div class="gallery-title bottom">Kissan Mela Pantnagar</div>-->
      <!--               </div>-->
      <!--               <div class="main-div" data-aos="fade-right" data-aos-delay="400">-->
      <!--                  <img class="img-thumbnail"-->
      <!--                     src="img/gallery/plumber-meet-bilashpur.jpg"-->
      <!--                     alt="Another alt text" width="100%">-->
      <!--                  <div class="gallery-title bottom">Plumber Meet Bilashpur</div>-->
      <!--               </div>-->
      <!--            </div>-->
      <!--         </div>-->
      <!--      </div>-->
      <!--      <div class="modal fade" id="image-gallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">-->
      <!--         <div class="modal-dialog">-->
      <!--            <div class="modal-content">-->
      <!--               <div class="modal-header">-->
      <!--                  <h4 class="modal-title" id="image-gallery-title"></h4>-->
      <!--                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span>-->
      <!--                  </button>-->
      <!--               </div>-->
      <!--               <div class="modal-body">-->
      <!--                  <div class="wrap-modal-slider">-->
      <!--                     <div class="your-class text-center">-->
      <!--                        <div><img src="img/gallery/plumber-meet-at-fatepur-slider.jpg" alt=""></div>-->
      <!--                        <div><img src="img/gallery/plumber-meet-at-fatepur-slider.jpg" alt=""></div>-->
      <!--                        <div><img src="img/gallery/plumber-meet-at-fatepur-slider.jpg" alt=""></div>-->
      <!--                     </div>-->
      <!--                  </div>-->
      <!--               </div>-->
      <!--               <div class="modal-footer">-->
      <!--               </div>-->
      <!--            </div>-->
      <!--         </div>-->
      <!--      </div>-->
      <!--   </div>-->
      <!--</section>-->
      
      
      
      
      
      
      
      
      <section class="mb-5">
         <div class="container">
                  <div class="row text-center news-media">
                     <div class="col-md-5 p-0">&nbsp;</div>
                         <div class="col-md-6 p-0">
                        <a href=""><button data-aos="fade-up" class="news-media-active" data-aos-delay="150">Video / photos</button></a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="container pb-5">
               <div class="row">
                  <div class="col-lg-4 col-md-4 col-xs-12">
                     <iframe width="100%" height="350" src="https://www.youtube.com/embed/_CWxAM_5lnc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                        <p class="mt-3">Best Brand for Building & Materials</p>
                     </div>
                     <div class="col-lg-4 col-md-4 col-xs-12">
                     <iframe width="100%" height="350" src="https://www.youtube.com/embed/iN2FnahNDnw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                     <p class="mt-3">Raveena Tandon, Brand Face of APL APOLLO (Hindi Language)</p>
                     </div>
                     <div class="col-lg-4 col-md-4 col-xs-12">
                     <iframe width="100%" height="350" src="https://www.youtube.com/embed/XhKQqaovYZA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                     <p class="mt-3">Raveena Tandon, Brand Face of APL APOLLO (English Language)</p>
                     </div>
                  </div>
               </div>
      </section>
      
      <?php include('footer.php'); ?>
   </body>
</html>