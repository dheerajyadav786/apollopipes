<?php
$id = 12;
include 'sadmin/connection.php';
$query = "SELECT * FROM products WHERE id='$id' ";
$sql = mysqli_query($conn, $query);
$data = mysqli_fetch_assoc($sql);
?>
<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon"> 
      <title>Water Tank - Manufacturers & Suppliers in India</title>
      <meta name="description" content="APL Apollo is one of the renowned Water Tank Manufacturers and Suppliers in India. Get Durable and Reliable Plastic Water Tanks with APL Apollo."/>
      <meta name="keywords" content="Plastic Water Tanks, Water Tank, Water Tank Manufacturers, Water Tank Suppliers, Water Tank Manufacturers in India, Water Tank Suppliers in India" />
      <link rel="canonical" href="https://www.apollopipes.com/water-tanks.php" />
      <meta name="robots" content="index, follow"/>
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
      <style>
         li.nav-item.white a.active {
            border: 3px solid #f8973a;
            border-radius: 50%;
            padding: 0;
            height: 22px;
            width: 22px;
            margin-top: -2px;
            margin-left: -2px;
         }
      </style>
   </head>
   <body>
      <?php include 'header.php'; ?>
      <div id="main-content" style="overflow: hidden;">
      <section class="product-top-header">
         <div class="container-fuid">
            <div class="row">
               <div class="col-md-12 text-center" data-aos="fade-down">
                  <h1><?php echo $data['productTitle']; ?></h1>
               </div>
            </div>
         </div>
      </section>
      <section class="pt-2 pb-2 bg-white">
         <div class="container">
            <div class="row" data-aos="fade-in">
               <div class="col-md-8">
                  <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                     <ol class="breadcrumb bg-white">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">
                           <a href="product.html">Product</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                           <?php echo $data['productTitle']; ?>
                        </li>
                     </ol>
                  </nav>
               </div>
            </div>
         </div>
      </section>
      <section class="introduction mt-5">
         <div class="container">
            <div class="row">
               <div class="col-md-6" data-aos="fade-right">
                  <img src="sadmin/product-images/<?php echo $data['productMainImg']; ?>" class="img-fluid" />
               </div>
               <div class="col-md-6 pl-5 intro-product" data-aos="fade-in">
                  <h1 class="intro text-uppercase" data-aos="fade-up" data-aos-delay="100">Introduction</h1>
                  <p class="introduction-p" data-aos="fade-left" data-aos-delay="150">
                     <?php echo $data['firstContent']; ?>
                  </p>
                  <!-- <p class="introduction-p" data-aos="fade-left" data-aos-delay="150">APL APOLLO CPVC plumbing
                     system is approved for contact with potable
                     water
                     in a wide range of countries including USA, UK, Canada, Germany, France, Netherlands, Middle
                     East among others.</p> -->
                  <div class="enquire mt-4" data-aos="fade-up" data-aos-delay="150"><a href="enquiry-form.php"><button>Enquire Now</button></a>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="product-section3 <?php if (empty($data['secondContent'])) {
          echo 'd-none';
      } ?>">
         <div class="container">
            <div class="col-md-10 offset-md-1 offset-lg-1 text-center">
               <h1 class="intro mb-2 pt-5" data-aos="fade-up">Technical Specifications</h1>
               <p class="intro-p pr-5 ml-5 mr-5">APL Apollo CPVC Plumbing Pipes are manufactured as per the standards given below:</p>
               <div class="text-left">
                  <?php echo $data['secondContent']; ?>
               </div>
               <!--ul class="text-left">
                  <li data-aos="fade-right"><span class="font-weight-bold">ASTM D1784 -</span>
                      Standard Specification for Rigid Poly
                      (Vinyl
                      Chloride) (PVC) Compounds and Chlorinated Poly (Vinyl Chloride) (CPVC) Compounds.</li>
                  <li data-aos="fade-left" data-aos-delay="100"><span class="font-weight-bold">ASTM D2846/IS:15778
                          -</span> Specification for Chlorinated
                      Poly
                      Vinyl Chloride (CPVC) Plastic Pipes for Hot & Cold water distribution systems.</li>
                  <li data-aos="fade-right" data-aos-delay="150"><span class="font-weight-bold">ASTM F493 -</span>
                      Standard Specification for Solvent Cements
                      for
                      Chlorinated Poly (Vinyl Chloride) (CPVC) Plastic Pipe & Fittings.</li>
                  <li data-aos="fade-left" data-aos-delay="200"><span class="font-weight-bold">ASTM F441 -</span>
                      Standard Specification for Chlorinated
                      Poly
                      (Vinyl Chloride) (CPVC) Plastic Pipe, SCH 40 & 80.</li>
                  <li data-aos="fade-right" data-aos-delay="250"><span class="font-weight-bold">ASTM F438 -</span>
                      Socket-Type Chlorinated Polyvinyl Chloride
                      Plastic Pipe Fittings. SCH 40.</li>
                  <li data-aos="fade-left" data-aos-delay="300"><span class="font-weight-bold">ASTM F439 -</span>
                      Socket-Type Chlorinated Polyvinyl Chloride
                      Plastic Pipe Fittings. SCH 80.</li>
                  </ul> -->
            </div>
         </div>
         <div class="container-fuid pb-4">
            <div class="row">
               <div class="col-md-12">
                  <img src="img/product/tecnical-img.png" class="img-fluid" />
               </div>
            </div>
         </div>
      </section>
      <section class="product-top-header">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <h1 class="intro text-center">
                     WHY SHOULD YOU CHOOSE APL APOLLO <br />
                     <?php echo $data['productTitle']; ?>?
                  </h1>
               </div>
            </div>
            <div class="row text-center mt-5 justify-content-center">
               <div class="col-md-3 <?php if (empty($data['iconImg1'])) {
                   echo 'd-none';
               } ?>" data-aos="fade-up">
                  <img src="sadmin/product-images/<?php echo $data['iconImg1']; ?>" class="multi-features-img" />
                  <p class="multi-features"><?php echo $data['iconText1']; ?></p>
               </div>
               <div class="col-md-3 <?php if (empty($data['iconImg2'])) {
                   echo 'd-none';
               } ?>" data-aos="fade-up" data-aos-delay="100">
                  <img src="sadmin/product-images/<?php echo $data['iconImg2']; ?>" class="multi-features-img" />
                  <p class="multi-features"><?php echo $data['iconText2']; ?></p>
               </div>
               <div class="col-md-3 <?php if (empty($data['iconImg3'])) {
                   echo 'd-none';
               } ?>" data-aos="fade-up" data-aos-delay="150">
                  <img src="sadmin/product-images/<?php echo $data['iconImg3']; ?>" class="multi-features-img" />
                  <p class="multi-features"><?php echo $data['iconText3']; ?></p>
               </div>
               <div class="col-md-3 <?php if (empty($data['iconImg4'])) {
                   echo 'd-none';
               } ?>" data-aos="fade-up" data-aos-delay="200">
                  <img src="sadmin/product-images/<?php echo $data['iconImg4']; ?>" class="multi-features-img" />
                  <p class="multi-features"><?php echo $data['iconText4']; ?></p>
               </div>
            </div>
            <div class="row text-center mt-5 justify-content-center">
               <div class="col-md-3 <?php if (empty($data['iconImg5'])) {
                   echo 'd-none';
               } ?>" data-aos="fade-up" data-aos-delay="250">
                  <img src="sadmin/product-images/<?php echo $data['iconImg5']; ?>" class="multi-features-img" />
                  <p class="multi-features"><?php echo $data['iconText5']; ?></p>
               </div>
               <div class="col-md-3 <?php if (empty($data['iconImg6'])) {
                   echo 'd-none';
               } ?>" data-aos="fade-up" data-aos-delay="300">
                  <img src="sadmin/product-images/<?php echo $data['iconImg6']; ?>" class="multi-features-img" />
                  <p class="multi-features"><?php echo $data['iconText6']; ?></p>
               </div>
               <div class="col-md-3 <?php if (empty($data['iconImg7'])) {
                   echo 'd-none';
               } ?>" data-aos="fade-up" data-aos-delay="350">
                  <img src="sadmin/product-images/<?php echo $data['iconImg7']; ?>" class="multi-features-img" />
                  <p class="multi-features"><?php echo $data['iconText7']; ?></p>
               </div>
               <div class="col-md-3 <?php if (empty($data['iconImg8'])) {
                   echo 'd-none';
               } ?>" data-aos="fade-up" data-aos-delay="400">
                  <img src="sadmin/product-images/<?php echo $data['iconImg8']; ?>" class="multi-features-img" />
                  <p class="multi-features"><?php echo $data['iconText8']; ?></p>
               </div>
               
            </div>
            
            <div class="row text-center mt-5 justify-content-center">
                
               <div class="col-md-3 <?php if (empty($data['iconImg9'])) {
                   echo 'd-none';
               } ?>" data-aos="fade-up" data-aos-delay="400">
                  <img src="sadmin/product-images/<?php echo $data['iconImg9']; ?>" class="multi-features-img" />
                  <p class="multi-features"><?php echo $data['iconText9']; ?></p>
               </div>
               
               <div class="col-md-3 <?php if (empty($data['iconImg10'])) {
                   echo 'd-none';
               } ?>" data-aos="fade-up" data-aos-delay="400">
                  <img src="sadmin/product-images/<?php echo $data['iconImg10']; ?>" class="multi-features-img" />
                  <p class="multi-features"><?php echo $data['iconText10']; ?></p>
               </div>
               
               <div class="col-md-3 <?php if (empty($data['iconImg11'])) {
                   echo 'd-none';
               } ?>" data-aos="fade-up" data-aos-delay="400">
                  <img src="sadmin/product-images/<?php echo $data['iconImg11']; ?>" class="multi-features-img" />
                  <p class="multi-features"><?php echo $data['iconText11']; ?></p>
               </div>
               
               
            </div>
         </div>
      </section>
      <section>
         <div class="container">
            <div class="row <?php if (empty($data['availableInfo'])) {
                echo 'd-none';
            } ?> <?php if (empty($data['catalogueFile'])) {
     echo 'mb-5';
 } ?>">
               <div class="col-md-12 mt-5 text-center text-uppercase available-column" data-aos="fade-down">
                  <h1 class="intro">Available <?php if ($id == '11') {
                      echo 'Range';
                  } else {
                      echo 'Sizes';
                  } ?></h1>
                  <?php echo $data['availableInfo']; ?>
                  <!-- <p class="sizes-p black font-weight-bold mt-5">Pipes:</p>
                     <p class="sizes-p" data-aos="fade-right">SDR 11 – ½” (15MM) to 2” (50MM)</p>
                     <p class="sizes-p" data-aos="fade-left" data-aos-delay="100">SDR 13.5-½” (15MM) to 2” (50MM)</p>
                     <p class="sizes-p" data-aos="fade-right" data-aos-delay="150">SCH 40- 21/2” (65MM) to 4” (100
                         MM)</p>
                     <p class="sizes-p" data-aos="fade-left" data-aos-delay="200">SCH 80- 21/2” (65MM) to 4” (100 MM)
                     </p>
                     
                     <p class="sizes-p black font-weight-bold mt-4">Fittings:</p>
                     <p class="sizes-p" data-aos="fade-right" data-aos-delay="250">SDR 11 – ½” (15MM) to 2” (50MM)
                     </p>
                     <p class="sizes-p" data-aos="fade-left" data-aos-delay="300">SCH 40- 21/2” (65MM) to 4” (100 MM)
                     </p> -->
               </div>
            </div>
            <div class="row mb-5">
               <div class="col-md-12 text-center">
                  <a href="downloads.php"><button class="download-catalog" style="cursor:pointer">Download catalog</button></a>
               </div>
            </div>
         </div>
      </section>
      <section class="<?php if($id != '12'){echo 'd-none';} ?>">
         <div class="container">
            <div class="col-md-12">
               <!--<ul class="tabul">-->
               <!--   <li class="clickme"><a href="javascript:void();" data-tag="tab19" class="activelink">Grand</a></li>-->
               <!--   <li class="clickme ml-md-5"><a href="javascript:void();" data-tag="tab20">Life</a></li>-->
               <!--   <li class="clickme ml-md-5"><a href="javascript:void();" data-tag="tab21">Star</a></li>-->
               <!--</ul>-->
               <div style="clear: both;"></div>
               <div id="container">
                  <div class="list mb-5" id="tab19">
                     <div class="row justify-content-center">
                        <div class="col-md-4">
                           <div class="tab-content mt-3">
                              <div class="tab-pane active" id="white" role="tabpanel">
                                 <div class="col-md-12" data-aos="zoom-in">
                                    <div class="overlay-container">
                                       <img src="img/ws-life-white.jpg" class="img-fluid" alt="" />
                                    </div>
                                    <p class="text-center mt-4"><img src="img/water-tanks.png"></p>
                                    <p class="product-caption">3 Layer Water Tank</p>
                                    <p class="overlay-caption product-2 pb-0">Colour Variants:</p>
                                 </div>
                              </div>
                              <div class="tab-pane" id="black" role="tabpanel" aria-labelledby="history-tab">
                                 <div class="col-md-12" data-aos="zoom-in">
                                    <div class="overlay-container">
                                       <img src="img/ws-life-black.jpg" class="img-fluid" alt="" />
                                    </div>
                                    <p class="text-center mt-4"><img src="img/water-tanks.png"></p>
                                    <p class="product-caption">3 Layer Water Tank</p>
                                    <p class="overlay-caption product-2">Colour Variants:</p>
                                 </div>
                              </div>
                              <div class="tab-pane" id="yellow" role="tabpanel" aria-labelledby="deals-tab">
                                 <div class="col-md-12" data-aos="zoom-in">
                                    <div class="overlay-container">
                                       <img src="img/ws-life-yellow.jpg" class="img-fluid" alt="" />
                                    </div>
                                    <p class="text-center mt-4"><img src="img/water-tanks.png"></p>
                                    <p class="product-caption">3 Layer Water Tank</p>
                                    <p class="overlay-caption product-2">Colour Variants:</p>
                                 </div>
                              </div>
                              <div class="tab-pane" id="green" role="tabpanel" aria-labelledby="deals-tab">
                                 <div class="col-md-12" data-aos="zoom-in">
                                    <div class="overlay-container">
                                       <img src="img/ws-life-green.jpg" class="img-fluid" alt="" />
                                    </div>
                                    <p class="text-center mt-4"><img src="img/water-tanks.png"></p>
                                    <p class="product-caption">3 Layer Water Tank</p>
                                    <p class="overlay-caption product-2">Colour Variants:</p>
                                 </div>
                              </div>
                              <div class="tab-pane" id="blue" role="tabpanel" aria-labelledby="deals-tab">
                                 <div class="col-md-12" data-aos="zoom-in">
                                    <div class="overlay-container">
                                       <img src="img/ws-life-blue.jpg" class="img-fluid" alt="" />
                                    </div>
                                    <p class="text-center mt-4"><img src="img/water-tanks.png"></p>
                                    <p class="product-caption">3 Layer Water Tank</p>
                                    <p class="overlay-caption product-2">Colour Variants:</p>
                                 </div>
                              </div>
                              <div class="card-header pt-0 pb-0 border-0">
                                 <ul class="nav justify-content-center" id="bologna-list" role="tablist">
                                    <li class="nav-item white">
                                       <a class="nav-link active" href="#white" role="tab" aria-controls="description" aria-selected="true"></a>
                                    </li>
                                    <li class="nav-item white black">
                                       <a class="nav-link"  href="#black" role="tab" aria-controls="history" aria-selected="false"></a>
                                    </li>
                                    <li class="nav-item white yellow">
                                       <a class="nav-link" href="#yellow" role="tab" aria-controls="deals" aria-selected="false"></a>
                                    </li>
                                    <li class="nav-item white green">
                                       <a class="nav-link" href="#green" role="tab" aria-controls="deals" aria-selected="false"></a>
                                    </li>
                                    <li class="nav-item white blue">
                                       <a class="nav-link" href="#blue" role="tab" aria-controls="deals" aria-selected="false"></a>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                        
                        <div class="col-md-4">
                           <div class="tab-content mt-3">
                              <div class="tab-pane active" id="white2" role="tabpanel">
                                 <div class="col-md-12" data-aos="zoom-in">
                                    <div class="overlay-container">
                                       <img src="img/ws-grand-white.jpg" class="img-fluid" alt="" />
                                    </div>
                                    <p class="text-center mt-4"><img src="img/grand.png"></p>
                                    <p class="product-caption">4 Layer Water Tank</p>
                                    <p class="overlay-caption product-2 pb-0">Colour Variants:</p>
                                 </div>
                              </div>
                              <div class="tab-pane" id="black2" role="tabpanel" aria-labelledby="history-tab">
                                 <div class="col-md-12" data-aos="zoom-in">
                                    <div class="overlay-container">
                                       <img src="img/ws-grand-black.jpg" class="img-fluid" alt="" />
                                    </div>
                                    <p class="text-center mt-4"><img src="img/grand.png"></p>
                                    <p class="product-caption">4 Layer Water Tank</p>
                                    <p class="overlay-caption product-2">Colour Variants:</p>
                                 </div>
                              </div>
                              <div class="tab-pane" id="yellow2" role="tabpanel" aria-labelledby="deals-tab">
                                 <div class="col-md-12" data-aos="zoom-in">
                                    <div class="overlay-container">
                                       <img src="img/ws-grand-yellow.jpg" class="img-fluid" alt="" />
                                    </div>
                                    <p class="text-center mt-4"><img src="img/grand.png"></p>
                                    <p class="product-caption">4 Layer Water Tank</p>
                                    <p class="overlay-caption product-2">Colour Variants:</p>
                                 </div>
                              </div>
                              <div class="tab-pane" id="green2" role="tabpanel" aria-labelledby="deals-tab">
                                 <div class="col-md-12" data-aos="zoom-in">
                                    <div class="overlay-container">
                                       <img src="img/ws-grand-green.jpg" class="img-fluid" alt="" />
                                    </div>
                                    <p class="text-center mt-4"><img src="img/grand.png"></p>
                                    <p class="product-caption">4 Layer Water Tank</p>
                                    <p class="overlay-caption product-2">Colour Variants:</p>
                                 </div>
                              </div>
                              <div class="tab-pane" id="blue2" role="tabpanel" aria-labelledby="deals-tab">
                                 <div class="col-md-12" data-aos="zoom-in">
                                    <div class="overlay-container">
                                       <img src="img/ws-grand-blue.jpg" class="img-fluid" alt="" />
                                    </div>
                                    <p class="text-center mt-4"><img src="img/grand.png"></p>
                                    <p class="product-caption">4 Layer Water Tank</p>
                                    <p class="overlay-caption product-2">Colour Variants:</p>
                                 </div>
                              </div>
                              <div class="card-header pt-0 pb-0 border-0">
                                 <ul class="nav justify-content-center" id="bologna-list" role="tablist">
                                    <li class="nav-item white">
                                       <a class="nav-link active" href="#white2" role="tab" aria-controls="description" aria-selected="true"></a>
                                    </li>
                                    <li class="nav-item white black">
                                       <a class="nav-link"  href="#black2" role="tab" aria-controls="history" aria-selected="false"></a>
                                    </li>
                                    <li class="nav-item white yellow">
                                       <a class="nav-link" href="#yellow2" role="tab" aria-controls="deals" aria-selected="false"></a>
                                    </li>
                                    <li class="nav-item white green">
                                       <a class="nav-link" href="#green2" role="tab" aria-controls="deals" aria-selected="false"></a>
                                    </li>
                                    <li class="nav-item white blue">
                                       <a class="nav-link" href="#blue2" role="tab" aria-controls="deals" aria-selected="false"></a>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                        
                        <div class="col-md-4">
                           <div class="tab-content mt-3">
                              <div class="tab-pane active" id="white3" role="tabpanel">
                                 <div class="col-md-12" data-aos="zoom-in">
                                    <div class="overlay-container">
                                       <img src="img/ws-star-white.jpg" class="img-fluid" alt="" />
                                    </div>
                                    <p class="text-center mt-4"><img src="img/star.png"></p>
                                    <p class="product-caption">5 Layer Water Tank</p>
                                    <p class="overlay-caption product-2 pb-0">Colour Variants:</p>
                                 </div>
                              </div>
                              <div class="tab-pane" id="black3" role="tabpanel" aria-labelledby="history-tab">
                                 <div class="col-md-12" data-aos="zoom-in">
                                    <div class="overlay-container">
                                       <img src="img/ws-star-black.jpg" class="img-fluid" alt="" />
                                    </div>
                                    <p class="text-center mt-4"><img src="img/star.png"></p>
                                    <p class="product-caption">5 Layer Water Tank</p>
                                    <p class="overlay-caption product-2">Colour Variants:</p>
                                 </div>
                              </div>
                              <div class="tab-pane" id="yellow3" role="tabpanel" aria-labelledby="deals-tab">
                                 <div class="col-md-12" data-aos="zoom-in">
                                    <div class="overlay-container">
                                       <img src="img/ws-star-yellow.jpg" class="img-fluid" alt="" />
                                    </div>
                                    <p class="text-center mt-4"><img src="img/star.png"></p>
                                    <p class="product-caption">5 Layer Water Tank</p>
                                    <p class="overlay-caption product-2">Colour Variants:</p>
                                 </div>
                              </div>
                              <div class="tab-pane" id="green3" role="tabpanel" aria-labelledby="deals-tab">
                                 <div class="col-md-12" data-aos="zoom-in">
                                    <div class="overlay-container">
                                       <img src="img/ws-star-green.jpg" class="img-fluid" alt="" />
                                    </div>
                                    <p class="text-center mt-4"><img src="img/star.png"></p>
                                    <p class="product-caption">5 Layer Water Tank</p>
                                    <p class="overlay-caption product-2">Colour Variants:</p>
                                 </div>
                              </div>
                              <div class="tab-pane" id="blue3" role="tabpanel" aria-labelledby="deals-tab">
                                 <div class="col-md-12" data-aos="zoom-in">
                                    <div class="overlay-container">
                                       <img src="img/ws-star-blue.jpg" class="img-fluid" alt="" />
                                    </div>
                                    <p class="text-center mt-4"><img src="img/star.png"></p>
                                    <p class="product-caption">5 Layer Water Tank</p>
                                    <p class="overlay-caption product-2">Colour Variants:</p>
                                 </div>
                              </div>
                              <div class="card-header pt-0 pb-0 border-0">
                                 <ul class="nav justify-content-center" id="bologna-list" role="tablist">
                                    <li class="nav-item white">
                                       <a class="nav-link active" href="#white3" role="tab" aria-controls="description" aria-selected="true"></a>
                                    </li>
                                    <li class="nav-item white black">
                                       <a class="nav-link"  href="#black3" role="tab" aria-controls="history" aria-selected="false"></a>
                                    </li>
                                    <li class="nav-item white yellow">
                                       <a class="nav-link" href="#yellow3" role="tab" aria-controls="deals" aria-selected="false"></a>
                                    </li>
                                    <li class="nav-item white green">
                                       <a class="nav-link" href="#green3" role="tab" aria-controls="deals" aria-selected="false"></a>
                                    </li>
                                    <li class="nav-item white blue">
                                       <a class="nav-link" href="#blue3" role="tab" aria-controls="deals" aria-selected="false"></a>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-12 mt-5">
                            <p class="text-center active">For Water Tanks specification, <a href="#" data-toggle="modal" data-target="#WaterTankSpec">Click Here</a></p>
                            
                            <div class="modal fade" id="WaterTankSpec" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                            <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle"> 3, 4 & 5 LAYER WATER STORAGE TANKS (HSN CODE:392510)</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-3">
                        <img src="img/ws-life-white.jpg" width="100%"/>
                    </div>
                    <div class="col-md-9">
                        <table class="table table-bordered table-striped">
                            <thead class="thead-dark">
                                <tr>
                                    <th colspan="4">VERTICAL OVERHEAD TANKS</th>
                                </tr>
                                <tr>
                                    <th>Capacity<br> (Ltrs.)</th>
                                    <th>Overall <br>Diameter (mm)</th>
                                    <th>Overall <br>Height (mm)</th>
                                    <th>Overall of <br>Man-hole (mm)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>500 Ltr.</td>
                                    <td>888</td>
                                    <td>960</td>
                                    <td>400</td>
                                </tr>
                                <tr>
                                    <td>700 Ltr.</td>
                                    <td>999</td>
                                    <td>1038</td>
                                    <td>400</td>
                                </tr>
                                <tr>
                                    <td>1000 Ltr.</td>
                                    <td>1116</td>
                                    <td>1088</td>
                                    <td>400</td>
                                </tr>
                                <tr>
                                    <td>1500 Ltr.</td>
                                    <td>1260</td>
                                    <td>1390</td>
                                    <td>400</td>
                                </tr>
                                <tr>
                                    <td>2000 Ltr.</td>
                                    <td>1368</td>
                                    <td>1552</td>
                                    <td>450</td>
                                </tr>
                                <tr>
                                    <td>3000 Ltr.</td>
                                    <td>1552</td>
                                    <td>1794</td>
                                    <td>450</td>
                                </tr>
                                <tr>
                                    <td>5000 Ltr.</td>
                                    <td>1901</td>
                                    <td>1988</td>
                                    <td>450</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>

                        </div>

                     </div>
                  </div>
                  <div class="list hide mb-5" id="tab20" style="max-height: 600px;overflow: scroll;">
                     <div class="row">
                        <div class="col-md-12">
                           <p class="text-center">Life Water Storage</p>
                        </div>
                        <?php
                           $liQuery = "SELECT * FROM productTabContent WHERE productTab='Life-Water Storage' ";
                           $liSql = mysqli_query($conn, $liQuery);
                                    $sr = 10488399;
                                    while($liData=mysqli_fetch_array($liSql)){
                                        $num = $sr++;
                                    ?>    
                                    <div class="col-md-2">
                                        <div class="overlay-container" style="background-image: url('sadmin/product-images/<?php echo $liData['productImg']; ?>')">
                                            <div class="overlay-button"><a href="#" class="btn btn-info" data-toggle="modal" data-target="#<?php echo 'product'.$num; ?>">Know More</a></div>
                                        </div>
                                        <p class="overlay-caption"><?php echo $liData['productName']; ?></p>
                                    </div>
                                    <!-- Modal -->
                                    <div class="modal fade" id="<?php echo 'product'.$num; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                      <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle"><?php echo $liData['productName']; ?></h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                            </button>
                                          </div>
                                          <div class="modal-body">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <img src="sadmin/product-images/<?php echo $liData['productImg']; ?>" width="100%">
                                                </div>
                                                <div class="col-md-9">
                                                    <table class="table table-bordered table-striped">
                                                        <thead class="thead-dark">
                                                            <tr>
                                                                <th colspan="2">Size</th>
                                                                <th rowspan="2" class="align-middle">Standard Packaging Quantity</th>
                                                            </tr>
                                                            <tr>
                                                                <th>Inches</th>
                                                                <th>mm</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td><?php echo $liData['specInch1'].'"'; ?></td>
                                                                <td><?php echo $liData['specMM1']; ?></td>
                                                                <td><?php echo $liData['specQty1']; ?></td>
                                                            </tr>
                                                            <tr <?php if($liData['specInch2']==''){echo"style='display:none'";} ?>>
                                                                <td><?php echo $liData['specInch2'].'"'; ?></td>
                                                                <td><?php echo $liData['specMM2']; ?></td>
                                                                <td><?php echo $liData['specQty2']; ?></td>
                                                            </tr>
                                                            <tr <?php if($liData['specInch3']==''){echo"style='display:none'";} ?>>
                                                                <td><?php echo $liData['specInch3'].'"'; ?></td>
                                                                <td><?php echo $liData['specMM3']; ?></td>
                                                                <td><?php echo $liData['specQty3']; ?></td>
                                                            </tr>
                                                            <tr <?php if($liData['specInch4']==''){echo"style='display:none'";} ?>>
                                                                <td><?php echo $liData['specInch4'].'"'; ?></td>
                                                                <td><?php echo $liData['specMM4']; ?></td>
                                                                <td><?php echo $liData['specQty4']; ?></td>
                                                            </tr>
                                                            <tr <?php if($liData['specInch5']==''){echo"style='display:none'";} ?>>
                                                                <td><?php echo $liData['specInch5'].'"'; ?></td>
                                                                <td><?php echo $liData['specMM5']; ?></td>
                                                                <td><?php echo $liData['specQty5']; ?></td>
                                                            </tr>
                                                            <tr <?php if($liData['specInch6']==''){echo"style='display:none'";} ?>>
                                                                <td><?php echo $liData['specInch6'].'"'; ?></td>
                                                                <td><?php echo $liData['specMM6']; ?></td>
                                                                <td><?php echo $liData['specQty6']; ?></td>
                                                            </tr>
                                                            <tr <?php if($liData['specInch7']==''){echo"style='display:none'";} ?>>
                                                                <td><?php echo $liData['specInch7'].'"'; ?></td>
                                                                <td><?php echo $liData['specMM7']; ?></td>
                                                                <td><?php echo $liData['specQty7']; ?></td>
                                                            </tr>
                                                            <tr <?php if($liData['specInch8']==''){echo"style='display:none'";} ?>>
                                                                <td><?php echo $liData['specInch8'].'"'; ?></td>
                                                                <td><?php echo $liData['specMM8']; ?></td>
                                                                <td><?php echo $liData['specQty8']; ?></td>
                                                            </tr>
                                                            <tr <?php if($liData['specInch9']==''){echo"style='display:none'";} ?>>
                                                                <td><?php echo $liData['specInch9'].'"'; ?></td>
                                                                <td><?php echo $liData['specMM9']; ?></td>
                                                                <td><?php echo $liData['specQty9']; ?></td>
                                                            </tr>
                                                            <tr <?php if($liData['specInch10']==''){echo"style='display:none'";} ?>>
                                                                <td><?php echo $liData['specInch10'].'"'; ?></td>
                                                                <td><?php echo $liData['specMM10']; ?></td>
                                                                <td><?php echo $liData['specQty10']; ?></td>
                                                            </tr>
                                                            <tr <?php if($liData['specInch11']==''){echo"style='display:none'";} ?>>
                                                                <td><?php echo $liData['specInch11'].'"'; ?></td>
                                                                <td><?php echo $liData['specMM11']; ?></td>
                                                                <td><?php echo $liData['specQty11']; ?></td>
                                                            </tr>
                                                            <tr <?php if($liData['specInch12']==''){echo"style='display:none'";} ?>>
                                                                <td><?php echo $liData['specInch12'].'"'; ?></td>
                                                                <td><?php echo $liData['specMM12']; ?></td>
                                                                <td><?php echo $liData['specQty12']; ?></td>
                                                            </tr>
                                                            <tr <?php if($liData['specInch13']==''){echo"style='display:none'";} ?>>
                                                                <td><?php echo $liData['specInch13'].'"'; ?></td>
                                                                <td><?php echo $liData['specMM13']; ?></td>
                                                                <td><?php echo $liData['specQty13']; ?></td>
                                                            </tr>
                                                            <tr <?php if($liData['specInch14']==''){echo"style='display:none'";} ?>>
                                                                <td><?php echo $liData['specInch14'].'"'; ?></td>
                                                                <td><?php echo $liData['specMM14']; ?></td>
                                                                <td><?php echo $liData['specQt14']; ?></td>
                                                            </tr>
                                                            <tr <?php if($liData['specInch15']==''){echo"style='display:none'";} ?>>
                                                                <td><?php echo $liData['specInch15'].'"'; ?></td>
                                                                <td><?php echo $liData['specMM15']; ?></td>
                                                                <td><?php echo $liData['specQty15']; ?></td>
                                                            </tr>
                                                            <tr <?php if($liData['specInch16']==''){echo"style='display:none'";} ?>>
                                                                <td><?php echo $liData['specInch16'].'"'; ?></td>
                                                                <td><?php echo $liData['specMM16']; ?></td>
                                                                <td><?php echo $liData['specQty16']; ?></td>
                                                            </tr>
                                                            <tr <?php if($liData['specInch17']==''){echo"style='display:none'";} ?>>
                                                                <td><?php echo $liData['specInch17'].'"'; ?></td>
                                                                <td><?php echo $liData['specMM17']; ?></td>
                                                                <td><?php echo $liData['specQty17']; ?></td>
                                                            </tr>
                                                            <tr <?php if($liData['specInch18']==''){echo"style='display:none'";} ?>>
                                                                <td><?php echo $liData['specInch18'].'"'; ?></td>
                                                                <td><?php echo $liData['specMM18']; ?></td>
                                                                <td><?php echo $liData['specQty18']; ?></td>
                                                            </tr>
                                                            <tr <?php if($liData['specInch19']==''){echo"style='display:none'";} ?>>
                                                                <td><?php echo $liData['specInch19'].'"'; ?></td>
                                                                <td><?php echo $liData['specMM19']; ?></td>
                                                                <td><?php echo $liData['specQty19']; ?></td>
                                                            </tr>
                                                            <tr <?php if($liData['specInch20']==''){echo"style='display:none'";} ?>>
                                                                <td><?php echo $liData['specInch20'].'"'; ?></td>
                                                                <td><?php echo $liData['specMM20']; ?></td>
                                                                <td><?php echo $liData['specQty20']; ?></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <?php
                                    }
                                ?>
                     </div>
                  </div>
                  <div class="list hide mb-5" id="tab21" style="max-height: 600px;overflow: scroll;">
                     <div class="row">
                        <div class="col-md-12">
                           <p class="text-center active">Star Water Storage</p>
                        </div>
                        <?php
                           $liQuery = "SELECT * FROM productTabContent WHERE productTab='Star-Water Storage' ";
                           $liSql = mysqli_query($conn, $liQuery);
                                    $sr = 1048940095;
                                    while($liData=mysqli_fetch_array($liSql)){
                                        $num = $sr++;
                                    ?>    
                                    <div class="col-md-2">
                                        <div class="overlay-container" style="background-image: url('sadmin/product-images/<?php echo $liData['productImg']; ?>')">
                                            <div class="overlay-button"><a href="#" class="btn btn-info" data-toggle="modal" data-target="#<?php echo 'product'.$num; ?>">Know More</a></div>
                                        </div>
                                        <p class="overlay-caption"><?php echo $liData['productName']; ?></p>
                                    </div>
                                    <!-- Modal -->
                                    <div class="modal fade" id="<?php echo 'product'.$num; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                      <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle"><?php echo $liData['productName']; ?></h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                            </button>
                                          </div>
                                          <div class="modal-body">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <img src="sadmin/product-images/<?php echo $liData['productImg']; ?>" width="100%">
                                                </div>
                                                <div class="col-md-9">
                                                    <table class="table table-bordered table-striped">
                                                        <thead class="thead-dark">
                                                            <tr>
                                                                <th colspan="2">Size</th>
                                                                <th rowspan="2" class="align-middle">Standard Packaging Quantity</th>
                                                            </tr>
                                                            <tr>
                                                                <th>Inches</th>
                                                                <th>mm</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td><?php echo $liData['specInch1'].'"'; ?></td>
                                                                <td><?php echo $liData['specMM1']; ?></td>
                                                                <td><?php echo $liData['specQty1']; ?></td>
                                                            </tr>
                                                            <tr <?php if($liData['specInch2']==''){echo"style='display:none'";} ?>>
                                                                <td><?php echo $liData['specInch2'].'"'; ?></td>
                                                                <td><?php echo $liData['specMM2']; ?></td>
                                                                <td><?php echo $liData['specQty2']; ?></td>
                                                            </tr>
                                                            <tr <?php if($liData['specInch3']==''){echo"style='display:none'";} ?>>
                                                                <td><?php echo $liData['specInch3'].'"'; ?></td>
                                                                <td><?php echo $liData['specMM3']; ?></td>
                                                                <td><?php echo $liData['specQty3']; ?></td>
                                                            </tr>
                                                            <tr <?php if($liData['specInch4']==''){echo"style='display:none'";} ?>>
                                                                <td><?php echo $liData['specInch4'].'"'; ?></td>
                                                                <td><?php echo $liData['specMM4']; ?></td>
                                                                <td><?php echo $liData['specQty4']; ?></td>
                                                            </tr>
                                                            <tr <?php if($liData['specInch5']==''){echo"style='display:none'";} ?>>
                                                                <td><?php echo $liData['specInch5'].'"'; ?></td>
                                                                <td><?php echo $liData['specMM5']; ?></td>
                                                                <td><?php echo $liData['specQty5']; ?></td>
                                                            </tr>
                                                            <tr <?php if($liData['specInch6']==''){echo"style='display:none'";} ?>>
                                                                <td><?php echo $liData['specInch6'].'"'; ?></td>
                                                                <td><?php echo $liData['specMM6']; ?></td>
                                                                <td><?php echo $liData['specQty6']; ?></td>
                                                            </tr>
                                                            <tr <?php if($liData['specInch7']==''){echo"style='display:none'";} ?>>
                                                                <td><?php echo $liData['specInch7'].'"'; ?></td>
                                                                <td><?php echo $liData['specMM7']; ?></td>
                                                                <td><?php echo $liData['specQty7']; ?></td>
                                                            </tr>
                                                            <tr <?php if($liData['specInch8']==''){echo"style='display:none'";} ?>>
                                                                <td><?php echo $liData['specInch8'].'"'; ?></td>
                                                                <td><?php echo $liData['specMM8']; ?></td>
                                                                <td><?php echo $liData['specQty8']; ?></td>
                                                            </tr>
                                                            <tr <?php if($liData['specInch9']==''){echo"style='display:none'";} ?>>
                                                                <td><?php echo $liData['specInch9'].'"'; ?></td>
                                                                <td><?php echo $liData['specMM9']; ?></td>
                                                                <td><?php echo $liData['specQty9']; ?></td>
                                                            </tr>
                                                            <tr <?php if($liData['specInch10']==''){echo"style='display:none'";} ?>>
                                                                <td><?php echo $liData['specInch10'].'"'; ?></td>
                                                                <td><?php echo $liData['specMM10']; ?></td>
                                                                <td><?php echo $liData['specQty10']; ?></td>
                                                            </tr>
                                                            <tr <?php if($liData['specInch11']==''){echo"style='display:none'";} ?>>
                                                                <td><?php echo $liData['specInch11'].'"'; ?></td>
                                                                <td><?php echo $liData['specMM11']; ?></td>
                                                                <td><?php echo $liData['specQty11']; ?></td>
                                                            </tr>
                                                            <tr <?php if($liData['specInch12']==''){echo"style='display:none'";} ?>>
                                                                <td><?php echo $liData['specInch12'].'"'; ?></td>
                                                                <td><?php echo $liData['specMM12']; ?></td>
                                                                <td><?php echo $liData['specQty12']; ?></td>
                                                            </tr>
                                                            <tr <?php if($liData['specInch13']==''){echo"style='display:none'";} ?>>
                                                                <td><?php echo $liData['specInch13'].'"'; ?></td>
                                                                <td><?php echo $liData['specMM13']; ?></td>
                                                                <td><?php echo $liData['specQty13']; ?></td>
                                                            </tr>
                                                            <tr <?php if($liData['specInch14']==''){echo"style='display:none'";} ?>>
                                                                <td><?php echo $liData['specInch14'].'"'; ?></td>
                                                                <td><?php echo $liData['specMM14']; ?></td>
                                                                <td><?php echo $liData['specQt14']; ?></td>
                                                            </tr>
                                                            <tr <?php if($liData['specInch15']==''){echo"style='display:none'";} ?>>
                                                                <td><?php echo $liData['specInch15'].'"'; ?></td>
                                                                <td><?php echo $liData['specMM15']; ?></td>
                                                                <td><?php echo $liData['specQty15']; ?></td>
                                                            </tr>
                                                            <tr <?php if($liData['specInch16']==''){echo"style='display:none'";} ?>>
                                                                <td><?php echo $liData['specInch16'].'"'; ?></td>
                                                                <td><?php echo $liData['specMM16']; ?></td>
                                                                <td><?php echo $liData['specQty16']; ?></td>
                                                            </tr>
                                                            <tr <?php if($liData['specInch17']==''){echo"style='display:none'";} ?>>
                                                                <td><?php echo $liData['specInch17'].'"'; ?></td>
                                                                <td><?php echo $liData['specMM17']; ?></td>
                                                                <td><?php echo $liData['specQty17']; ?></td>
                                                            </tr>
                                                            <tr <?php if($liData['specInch18']==''){echo"style='display:none'";} ?>>
                                                                <td><?php echo $liData['specInch18'].'"'; ?></td>
                                                                <td><?php echo $liData['specMM18']; ?></td>
                                                                <td><?php echo $liData['specQty18']; ?></td>
                                                            </tr>
                                                            <tr <?php if($liData['specInch19']==''){echo"style='display:none'";} ?>>
                                                                <td><?php echo $liData['specInch19'].'"'; ?></td>
                                                                <td><?php echo $liData['specMM19']; ?></td>
                                                                <td><?php echo $liData['specQty19']; ?></td>
                                                            </tr>
                                                            <tr <?php if($liData['specInch20']==''){echo"style='display:none'";} ?>>
                                                                <td><?php echo $liData['specInch20'].'"'; ?></td>
                                                                <td><?php echo $liData['specMM20']; ?></td>
                                                                <td><?php echo $liData['specQty20']; ?></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <?php
                                    }
                                ?>   
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      
      
    
      
     
      
      <section class="tollfree-bg pb-4" >
         <div class="container">
         <div class="d-none d-sm-none d-md-block d-lg-block">
            <div class="row">
               <div class="col-md-12 mt-5 text-center">
                  <p class="intro-p">Call to place your order via phone</p>
                  <h1 class="intro">
                     <span class="pr-3"><img src="img/phone.png" /></span>Toll Free No. : 1800 121 3737
                  </h1>
                  <p class="intro-p">Or</p>
                  <h1 class="intro">Request a callback</h1>
               </div>
            </div>
         </div>
         <div class="d-block d-sm-block d-md-none d-lg-none">
            <div class="row">
               <div class="col-md-12 mt-5 text-center">
                  <p class="intro-p">Call to place your order via phone</p>
                  <h1 class="intro">
                     <span class="pr-3"><img src="img/phone.png" /></span>Toll Free No. :<br> 1800 121 3737
                  </h1>
                  <p class="intro-p">Or</p>
                  <h1 class="intro">request a callback</h1>
               </div>
            </div>
         </div>
      </section>
      <section class="application-bg">
         <div class="container">
            <div class="row">
               <div class="col-md-10 offset-md-1 offset-lg-1 mt-5 text-center">
                  <h1 class="intro">Applications</h1>
                  <p class="introduction-p" style="text-align: justify; text-align-last: center;">
                     <?php echo $data['lastContent']; ?>
                  </p>
               </div>
            </div>
         </div>
         <div class="container-fuid">
            <div class="row">
               <div class="col-md-12 mt-5">
                  <p class="mb-0"><img src="img/product/end-illustration.png" class="img-fluid" /></p>
               </div>
            </div>
         </div>
      </section>
      <?php include 'footer.php'; ?>
      <script>
         $('#bologna-list a').on('click', function (e) {
         e.preventDefault()
         $(this).tab('show')
         })
      </script>
   </body>
</html>