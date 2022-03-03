<?php
$id = 9;
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
      <title>Faucets, Bathroom Faucets, Kitchen Faucets, Taps Manufacturers, India</title>
      <meta name="description" content="Faucets - APL Apollo Offers Wide Range of Premium Showers, Bathroom Showers, Hand Showers, Rain Showers, Bathroom Showers panels IN India."/>
      <meta name="keywords" content="Faucets, Bathroom Faucets, Kitchen Faucets, Taps, Faucets Manufacturers, Bathroom Faucets Manufacturers, Kitchen Faucets Manufacturers, Taps Manufacturers" />
      <link rel="canonical" href="https://www.apollopipes.com/faucets.php" />
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
            <div class="row mb-5 <?php if (empty($data['catalogueFile'])) {
                echo 'd-none';
            } ?>">
               <div class="col-md-12 mt-5 text-center">
                  <a href="downloads.php"><button class="download-catalog" style="cursor:pointer">Download catalog</button></a>
               </div>
            </div>
         </div>
      </section>
      <section class="<?php if($id != '9'){echo 'd-none';} ?>">
         <div class="container">
            <div class="col-md-12">
               <ul class="tabul">
                  <li class="clickme"><a href="javascript:void();" data-tag="tab9" class="activelink">Faucets</a></li>
               </ul>
               <div style="clear: both;"></div>
               <div id="container">
                  <div class="list mb-5" id="tab9" style="max-height: 600px;overflow: scroll;">
                     <div class="row justify-content-center">
                        <div class="col-md-12">
                           <p class="text-center active">BLOOM SERIES</p>
                        </div>
                        <?php
                           $liQuery = "SELECT * FROM productTabContent WHERE productTab='Faucets' AND productSubTab='Faucets Bloom' ";
                           $liSql = mysqli_query($conn, $liQuery);
                                    $sr = 10000000000000;
                                    while($liData=mysqli_fetch_array($liSql)){
                                        $num = $sr++;
                                    ?>    
                                    <div class="col-md-2">
                                        <div class="overlay-container" style="background-image: url('sadmin/product-images/<?php echo $liData['productImg']; ?>')">
                                            
                                        </div>
                                        <p class="overlay-caption"><?php echo $liData['productName']; ?></p>
                                    </div>
                                    <!-- Modal -->
                                    
                                    <?php
                                    }
                                ?>   
                     </div>
                     <div class="row justify-content-center">
                        <div class="col-md-12">
                           <p class="text-center active"> CLASSIC SERIES</p>
                        </div>
                        <?php
                           $liQuery = "SELECT * FROM productTabContent WHERE productTab='Faucets' AND productSubTab='Faucets Classic' ";
                           $liSql = mysqli_query($conn, $liQuery);
                                    $sr = 1000000000000000;
                                    while($liData=mysqli_fetch_array($liSql)){
                                        $num = $sr++;
                                    ?>    
                                    <div class="col-md-2">
                                        <div class="overlay-container" style="background-image: url('sadmin/product-images/<?php echo $liData['productImg']; ?>')">
                                        </div>
                                        <p class="overlay-caption"><?php echo $liData['productName']; ?></p>
                                    </div>
                                    <!-- Modal -->
                            
                                    <?php
                                    }
                                ?>   
                     </div>
                     <div class="row justify-content-center">
                        <div class="col-md-12">
                           <p class="text-center active">CONTINENTAL SERIES</p>
                        </div>
                        <?php
                           $liQuery = "SELECT * FROM productTabContent WHERE productTab='Faucets' AND productSubTab='Faucets Continental' ";
                           $liSql = mysqli_query($conn, $liQuery);
                                    $sr = 10000000000000000;
                                    while($liData=mysqli_fetch_array($liSql)){
                                        $num = $sr++;
                                    ?>    
                                    <div class="col-md-2">
                                        <div class="overlay-container" style="background-image: url('sadmin/product-images/<?php echo $liData['productImg']; ?>')">
                                        </div>
                                        <p class="overlay-caption"><?php echo $liData['productName']; ?></p>
                                    </div>
                                    <!-- Modal -->
                                    <?php
                                    }
                                ?>   
                     </div>
                     <div class="row justify-content-center">
                        <div class="col-md-12">
                           <p class="text-center active">CORAL SERIES</p>
                        </div>
                        <?php
                           $liQuery = "SELECT * FROM productTabContent WHERE productTab='Faucets' AND productSubTab='Faucets Coral' ";
                           $liSql = mysqli_query($conn, $liQuery);
                                    $sr = 100000000000000000;
                                    while($liData=mysqli_fetch_array($liSql)){
                                        $num = $sr++;
                                    ?>    
                                    <div class="col-md-2">
                                        <div class="overlay-container" style="background-image: url('sadmin/product-images/<?php echo $liData['productImg']; ?>')">
                                        </div>
                                        <p class="overlay-caption"><?php echo $liData['productName']; ?></p>
                                    </div>
                                    <!-- Modal -->
                                    <?php
                                    }
                                ?>  
                     </div>
                     <div class="row justify-content-center">
                        <div class="col-md-12">
                           <p class="text-center active">CORNET SERIES</p>
                        </div>
                        <?php
                           $liQuery = "SELECT * FROM productTabContent WHERE productTab='Faucets' AND productSubTab='Faucets Cornet' ";
                           $liSql = mysqli_query($conn, $liQuery);
                                    $sr = 1000000000000000000;
                                    while($liData=mysqli_fetch_array($liSql)){
                                        $num = $sr++;
                                    ?>    
                                    <div class="col-md-2">
                                        <div class="overlay-container" style="background-image: url('sadmin/product-images/<?php echo $liData['productImg']; ?>')">
                                        </div>
                                        <p class="overlay-caption"><?php echo $liData['productName']; ?></p>
                                    </div>
                                    <!-- Modal -->
                                    <?php
                                    }
                                ?>   
                     </div>
                     <div class="row justify-content-center">
                        <div class="col-md-12">
                           <p class="text-center active">EDGE SERIES</p>
                        </div>
                        <?php
                           $liQuery = "SELECT * FROM productTabContent WHERE productTab='Faucets' AND productSubTab='Faucets Edge' ";
                           $liSql = mysqli_query($conn, $liQuery);
                                    $sr = 1002567;
                                    while($liData=mysqli_fetch_array($liSql)){
                                        $num = $sr++;
                                    ?>
                                    <div class="col-md-2">
                                        <div class="overlay-container" style="background-image: url('sadmin/product-images/<?php echo $liData['productImg']; ?>')">
                                        </div>
                                        <p class="overlay-caption"><?php echo $liData['productName']; ?></p>
                                    </div>
                                    <!-- Modal -->
                                    <?php
                                    }
                                ?>   
                     </div>
                     <div class="row justify-content-center">
                        <div class="col-md-12">
                           <p class="text-center active">FUSION SERIES</p>
                        </div>
                        <?php
                           $liQuery = "SELECT * FROM productTabContent WHERE productTab='Faucets' AND productSubTab='Faucets Fusion' ";
                           $liSql = mysqli_query($conn, $liQuery);
                                    $sr = 1002568787;
                                    while($liData=mysqli_fetch_array($liSql)){
                                        $num = $sr++;
                                    ?>    
                                    <div class="col-md-2">
                                        <div class="overlay-container" style="background-image: url('sadmin/product-images/<?php echo $liData['productImg']; ?>')">
                                        </div>
                                        <p class="overlay-caption"><?php echo $liData['productName']; ?></p>
                                    </div>
                                    <!-- Modal -->
                                    <?php
                                    }
                                ?>   
                     </div>

                     <div class="row justify-content-center">
                        <div class="col-md-12">
                           <p class="text-center active">QUADRO SERIES</p>
                        </div>
                        <?php
                           $liQuery = "SELECT * FROM productTabContent WHERE productTab='Faucets' AND productSubTab='Faucets Quadro' ";
                           $liSql = mysqli_query($conn, $liQuery);
                                    $sr = 10029809;
                                    while($liData=mysqli_fetch_array($liSql)){
                                        $num = $sr++;
                                    ?>    
                                    <div class="col-md-2">
                                        <div class="overlay-container" style="background-image: url('sadmin/product-images/<?php echo $liData['productImg']; ?>')">
                                        </div>
                                        <p class="overlay-caption"><?php echo $liData['productName']; ?></p>
                                    </div>
                                    <!-- Modal -->
                                    <?php
                                    }
                                ?>   
                     </div>
                     <div class="row justify-content-center">
                        <div class="col-md-12">
                           <p class="text-center active">ROYAL SERIES</p>
                        </div>
                        <?php
                           $liQuery = "SELECT * FROM productTabContent WHERE productTab='Faucets' AND productSubTab='Faucets Royal' ";
                           $liSql = mysqli_query($conn, $liQuery);
                                    $sr = 100099001;
                                    while($liData=mysqli_fetch_array($liSql)){
                                        $num = $sr++;
                                    ?>    
                                    <div class="col-md-2">
                                        <div class="overlay-container" style="background-image: url('sadmin/product-images/<?php echo $liData['productImg']; ?>')">
                                        </div>
                                        <p class="overlay-caption"><?php echo $liData['productName']; ?></p>
                                    </div>
                                    <!-- Modal -->
                                    <?php
                                    }
                                ?>   
                     </div>
                     <div class="row justify-content-center">
                        <div class="col-md-12">
                           <p class="text-center active">SPARK SERIES</p>
                        </div>
                        <?php
                           $liQuery = "SELECT * FROM productTabContent WHERE productTab='Faucets' AND productSubTab='Faucets Spark' ";
                           $liSql = mysqli_query($conn, $liQuery);
                                    $sr = 100008461;
                                    while($liData=mysqli_fetch_array($liSql)){
                                        $num = $sr++;
                                    ?>    
                                    <div class="col-md-2">
                                        <div class="overlay-container" style="background-image: url('sadmin/product-images/<?php echo $liData['productImg']; ?>')">
                                        </div>
                                        <p class="overlay-caption"><?php echo $liData['productName']; ?></p>
                                    </div>
                                    <!-- Modal -->
                                    <?php
                                    }
                                ?>  
                     </div>
                     <div class="row justify-content-center">
                        <div class="col-md-12">
                           <p class="text-center active">VENUS SERIES</p>
                        </div>
                        <?php
                           $liQuery = "SELECT * FROM productTabContent WHERE productTab='Faucets' AND productSubTab='Faucets Venus' ";
                           $liSql = mysqli_query($conn, $liQuery);
                                    $sr = 100098101;
                                    while($liData=mysqli_fetch_array($liSql)){
                                        $num = $sr++;
                                    ?>    
                                    <div class="col-md-2">
                                        <div class="overlay-container" style="background-image: url('sadmin/product-images/<?php echo $liData['productImg']; ?>')">
                                        </div>
                                        <p class="overlay-caption"><?php echo $liData['productName']; ?></p>
                                    </div>
                                    <!-- Modal -->
                                    <?php
                                    }
                                ?>   
                     </div>
                     
                     <div class="row justify-content-center">
                        <div class="col-md-12">
                           <p class="text-center active">DAZZLE SERIES</p>
                        </div>
                        <?php
                           $liQuery = "SELECT * FROM productTabContent WHERE productTab='Faucets' AND productSubTab='Faucets Dazzle' ";
                           $liSql = mysqli_query($conn, $liQuery);
                                    $sr = 100098101;
                                    while($liData=mysqli_fetch_array($liSql)){
                                        $num = $sr++;
                                    ?>    
                                    <div class="col-md-2">
                                        <div class="overlay-container" style="background-image: url('sadmin/product-images/<?php echo $liData['productImg']; ?>')">
                                        </div>
                                        <p class="overlay-caption"><?php echo $liData['productName']; ?></p>
                                    </div>
                                    <!-- Modal -->
                                    <?php
                                    }
                                ?>   
                     </div>
                     
                     <div class="row justify-content-center">
                        <div class="col-md-12">
                           <p class="text-center active">ELEGENCE SERIES</p>
                        </div>
                        <?php
                           $liQuery = "SELECT * FROM productTabContent WHERE productTab='Faucets' AND productSubTab='Faucets Elegence' ";
                           $liSql = mysqli_query($conn, $liQuery);
                                    $sr = 100098101;
                                    while($liData=mysqli_fetch_array($liSql)){
                                        $num = $sr++;
                                    ?>    
                                    <div class="col-md-2">
                                        <div class="overlay-container" style="background-image: url('sadmin/product-images/<?php echo $liData['productImg']; ?>')">
                                        </div>
                                        <p class="overlay-caption"><?php echo $liData['productName']; ?></p>
                                    </div>
                                    <!-- Modal -->
                                    <?php
                                    }
                                ?>   
                     </div>
                     
                     <div class="row justify-content-center">
                        <div class="col-md-12">
                           <p class="text-center active">FLORA SERIES</p>
                        </div>
                        <?php
                           $liQuery = "SELECT * FROM productTabContent WHERE productTab='Faucets' AND productSubTab='Faucets Flora' ";
                           $liSql = mysqli_query($conn, $liQuery);
                                    $sr = 100098101;
                                    while($liData=mysqli_fetch_array($liSql)){
                                        $num = $sr++;
                                    ?>    
                                    <div class="col-md-2">
                                        <div class="overlay-container" style="background-image: url('sadmin/product-images/<?php echo $liData['productImg']; ?>')">
                                        </div>
                                        <p class="overlay-caption"><?php echo $liData['productName']; ?></p>
                                    </div>
                                    <!-- Modal -->
                                    <?php
                                    }
                                ?>   
                     </div>
                     
                     <div class="row justify-content-center">
                        <div class="col-md-12">
                           <p class="text-center active">GLORY SERIES</p>
                        </div>
                        <?php
                           $liQuery = "SELECT * FROM productTabContent WHERE productTab='Faucets' AND productSubTab='Faucets Glory' ";
                           $liSql = mysqli_query($conn, $liQuery);
                                    $sr = 100098101;
                                    while($liData=mysqli_fetch_array($liSql)){
                                        $num = $sr++;
                                    ?>    
                                    <div class="col-md-2">
                                        <div class="overlay-container" style="background-image: url('sadmin/product-images/<?php echo $liData['productImg']; ?>')">
                                        </div>
                                        <p class="overlay-caption"><?php echo $liData['productName']; ?></p>
                                    </div>
                                    <!-- Modal -->
                                    <?php
                                    }
                                ?>   
                     </div>
                     
                     <div class="row justify-content-center">
                        <div class="col-md-12">
                           <p class="text-center active">GRACE SERIES</p>
                        </div>
                        <?php
                           $liQuery = "SELECT * FROM productTabContent WHERE productTab='Faucets' AND productSubTab='Faucets Grace' ";
                           $liSql = mysqli_query($conn, $liQuery);
                                    $sr = 100098101;
                                    while($liData=mysqli_fetch_array($liSql)){
                                        $num = $sr++;
                                    ?>    
                                    <div class="col-md-2">
                                        <div class="overlay-container" style="background-image: url('sadmin/product-images/<?php echo $liData['productImg']; ?>')">
                                        </div>
                                        <p class="overlay-caption"><?php echo $liData['productName']; ?></p>
                                    </div>
                                    <!-- Modal -->
                                    <?php
                                    }
                                ?>   
                     </div>
                     
                     <div class="row justify-content-center">
                        <div class="col-md-12">
                           <p class="text-center active">POISE SERIES</p>
                        </div>
                        <?php
                           $liQuery = "SELECT * FROM productTabContent WHERE productTab='Faucets' AND productSubTab='Faucets Poise' ";
                           $liSql = mysqli_query($conn, $liQuery);
                                    $sr = 100098101;
                                    while($liData=mysqli_fetch_array($liSql)){
                                        $num = $sr++;
                                    ?>    
                                    <div class="col-md-2">
                                        <div class="overlay-container" style="background-image: url('sadmin/product-images/<?php echo $liData['productImg']; ?>')">
                                        </div>
                                        <p class="overlay-caption"><?php echo $liData['productName']; ?></p>
                                    </div>
                                    <!-- Modal -->
                                    <?php
                                    }
                                ?>   
                     </div>
                     
                     <div class="row justify-content-center">
                        <div class="col-md-12">
                           <p class="text-center active">FLORET SERIES</p>
                        </div>
                        <?php
                           $liQuery = "SELECT * FROM productTabContent WHERE productTab='Faucets' AND productSubTab='Faucets Floret' ";
                           $liSql = mysqli_query($conn, $liQuery);
                                    $sr = 100098101;
                                    while($liData=mysqli_fetch_array($liSql)){
                                        $num = $sr++;
                                    ?>    
                                    <div class="col-md-2">
                                        <div class="overlay-container" style="background-image: url('sadmin/product-images/<?php echo $liData['productImg']; ?>')">
                                        </div>
                                        <p class="overlay-caption"><?php echo $liData['productName']; ?></p>
                                    </div>
                                    <!-- Modal -->
                                    <?php
                                    }
                                ?>   
                     </div>
                     
                     <div class="row justify-content-center">
                        <div class="col-md-12">
                           <p class="text-center active">XTREME SERIES</p>
                        </div>
                        <?php
                           $liQuery = "SELECT * FROM productTabContent WHERE productTab='Faucets' AND productSubTab='Faucets Xtreme' ";
                           $liSql = mysqli_query($conn, $liQuery);
                                    $sr = 100098101;
                                    while($liData=mysqli_fetch_array($liSql)){
                                        $num = $sr++;
                                    ?>    
                                    <div class="col-md-2">
                                        <div class="overlay-container" style="background-image: url('sadmin/product-images/<?php echo $liData['productImg']; ?>')">
                                        </div>
                                        <p class="overlay-caption"><?php echo $liData['productName']; ?></p>
                                    </div>
                                    <!-- Modal -->
                                    <?php
                                    }
                                ?>   
                     </div>
                     
                     <div class="row justify-content-center">
                        <div class="col-md-12">
                           <p class="text-center active">PRIME PILLAR TAPS SERIES</p>
                        </div>
                        <?php
                           $liQuery = "SELECT * FROM productTabContent WHERE productTab='Faucets' AND productSubTab='Faucets Prime Pillar Taps' ";
                           $liSql = mysqli_query($conn, $liQuery);
                                    $sr = 100098101;
                                    while($liData=mysqli_fetch_array($liSql)){
                                        $num = $sr++;
                                    ?>    
                                    <div class="col-md-2">
                                        <div class="overlay-container" style="background-image: url('sadmin/product-images/<?php echo $liData['productImg']; ?>')">
                                        </div>
                                        <p class="overlay-caption"><?php echo $liData['productName']; ?></p>
                                    </div>
                                    <!-- Modal -->
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