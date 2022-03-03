<?php
   $id=$_GET['id'];
   include('sadmin/connection.php');
   $query = "SELECT * FROM products WHERE id='$id' ";
   $sql = mysqli_query($conn, $query);
   $data = mysqli_fetch_assoc($sql);
   
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
      <?php include('header.php'); ?>
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
      <section class="product-section3 <?php if(empty($data['secondContent'])){echo 'd-none';} ?>">
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
               <div class="col-md-3 <?php if(empty($data['iconImg1'])){echo 'd-none';} ?>" data-aos="fade-up">
                  <img src="sadmin/product-images/<?php echo $data['iconImg1']; ?>" class="multi-features-img" />
                  <p class="multi-features"><?php echo $data['iconText1']; ?></p>
               </div>
               <div class="col-md-3 <?php if(empty($data['iconImg2'])){echo 'd-none';} ?>" data-aos="fade-up" data-aos-delay="100">
                  <img src="sadmin/product-images/<?php echo $data['iconImg2']; ?>" class="multi-features-img" />
                  <p class="multi-features"><?php echo $data['iconText2']; ?></p>
               </div>
               <div class="col-md-3 <?php if(empty($data['iconImg3'])){echo 'd-none';} ?>" data-aos="fade-up" data-aos-delay="150">
                  <img src="sadmin/product-images/<?php echo $data['iconImg3']; ?>" class="multi-features-img" />
                  <p class="multi-features"><?php echo $data['iconText3']; ?></p>
               </div>
               <div class="col-md-3 <?php if(empty($data['iconImg4'])){echo 'd-none';} ?>" data-aos="fade-up" data-aos-delay="200">
                  <img src="sadmin/product-images/<?php echo $data['iconImg4']; ?>" class="multi-features-img" />
                  <p class="multi-features"><?php echo $data['iconText4']; ?></p>
               </div>
            </div>
            <div class="row text-center mt-5 justify-content-center">
               <div class="col-md-3 <?php if(empty($data['iconImg5'])){echo 'd-none';} ?>" data-aos="fade-up" data-aos-delay="250">
                  <img src="sadmin/product-images/<?php echo $data['iconImg5']; ?>" class="multi-features-img" />
                  <p class="multi-features"><?php echo $data['iconText5']; ?></p>
               </div>
               <div class="col-md-3 <?php if(empty($data['iconImg6'])){echo 'd-none';} ?>" data-aos="fade-up" data-aos-delay="300">
                  <img src="sadmin/product-images/<?php echo $data['iconImg6']; ?>" class="multi-features-img" />
                  <p class="multi-features"><?php echo $data['iconText6']; ?></p>
               </div>
               <div class="col-md-3 <?php if(empty($data['iconImg7'])){echo 'd-none';} ?>" data-aos="fade-up" data-aos-delay="350">
                  <img src="sadmin/product-images/<?php echo $data['iconImg7']; ?>" class="multi-features-img" />
                  <p class="multi-features"><?php echo $data['iconText7']; ?></p>
               </div>
               <div class="col-md-3 <?php if(empty($data['iconImg8'])){echo 'd-none';} ?>" data-aos="fade-up" data-aos-delay="400">
                  <img src="sadmin/product-images/<?php echo $data['iconImg8']; ?>" class="multi-features-img" />
                  <p class="multi-features"><?php echo $data['iconText8']; ?></p>
               </div>
               
            </div>
            
            <div class="row text-center mt-5 justify-content-center">
                
               <div class="col-md-3 <?php if(empty($data['iconImg9'])){echo 'd-none';} ?>" data-aos="fade-up" data-aos-delay="400">
                  <img src="sadmin/product-images/<?php echo $data['iconImg9']; ?>" class="multi-features-img" />
                  <p class="multi-features"><?php echo $data['iconText9']; ?></p>
               </div>
               
               <div class="col-md-3 <?php if(empty($data['iconImg10'])){echo 'd-none';} ?>" data-aos="fade-up" data-aos-delay="400">
                  <img src="sadmin/product-images/<?php echo $data['iconImg10']; ?>" class="multi-features-img" />
                  <p class="multi-features"><?php echo $data['iconText10']; ?></p>
               </div>
               
               <div class="col-md-3 <?php if(empty($data['iconImg11'])){echo 'd-none';} ?>" data-aos="fade-up" data-aos-delay="400">
                  <img src="sadmin/product-images/<?php echo $data['iconImg11']; ?>" class="multi-features-img" />
                  <p class="multi-features"><?php echo $data['iconText11']; ?></p>
               </div>
               
               
            </div>
         </div>
      </section>
      <section>
         <div class="container">
            <div class="row <?php if(empty($data['availableInfo'])){echo 'd-none';} ?> <?php if(empty($data['catalogueFile'])){echo 'mb-5';} ?>">
               <div class="col-md-12 mt-5 text-center text-uppercase available-column" data-aos="fade-down">
                  <h1 class="intro">Available <?php if($id == '11'){echo 'Range';}else{echo 'Sizes';} ?></h1>
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
            <div class="row mb-5 <?php if(empty($data['catalogueFile'])){echo 'd-none';} ?>">
               <div class="col-md-12 mt-5 text-center">
                  <a href="downloads.php"><button class="download-catalog" style="cursor:pointer">Download catalog</button></a>
               </div>
            </div>
         </div>
      </section>
      <section class="<?php if($id != '1'){echo 'd-none';} ?>">
         <div class="container">
            <div class="col-md-12">
               <ul class="tabul">
                  <li class="clickme"><a href="javascript:void();" data-tag="one" class="activelink">PIPES</a>
                  </li>
                  <li class="clickme ml-md-5"><a href="javascript:void();" data-tag="two">FITTINGS</a></li>
               </ul>
               <div style="clear: both;"></div>
               <div id="container">
                  <div class="list mb-5" id="one" style="max-height: 600px;overflow: scroll;">
                            <div class="row justify-content-center">
                                <!-- <div class="col-md-12">    
                                    <p class="text-center active">cPVC PIPES</p>
                                </div>  -->
                                <?php
                                    $liQuery = "SELECT * FROM productTabContent WHERE productTab='Pipes' AND productId='$id' ";
                                    $liSql = mysqli_query($conn, $liQuery);
                                    $sr = 1;
                                    while($liData=mysqli_fetch_array($liSql)){
                                        $num = $sr++;
                                    ?>    
                                    <div class="col-md-2" data-aos="zoom-in">
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
                  <div class="list hide mb-5" id="two" style="max-height: 600px;overflow: scroll;">
                            <div class="row justify-content-center">
                                <div class="col-md-12">
                                    <p class="text-center">CPVC FITTINGS IN SCH 40 AS PER ASTM F- 438</p>
                                </div>    
                                <?php
                                    $liQuery = "SELECT * FROM productTabContent WHERE productTab='Fittings' AND productSubTab='cPVC FITTINGS IN SCH 40 AS PER ASTM F- 438' ";
                                    $liSql = mysqli_query($conn, $liQuery);
                                    $sr = 100;
                                    while($liData=mysqli_fetch_array($liSql)){
                                        $num = $sr++;
                                    ?>    
                                    <div class="col-md-2" data-aos="zoom-in">
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
                            <div class="row justify-content-center">
                                <div class="col-md-12">
                                    <p class="text-center">CPVC FITTINGS IN SDR 11 AS PER ASTM D-2846</p>
                                </div>    
                                <?php
                                    $liQuery = "SELECT * FROM productTabContent WHERE productTab='Fittings' AND productSubTab='cPVC FITTINGS IN SDR 11 AS PER ASTM D-2846' ";
                                    $liSql = mysqli_query($conn, $liQuery);
                                    $sr = 1000;
                                    while($liData=mysqli_fetch_array($liSql)){
                                        $num = $sr++;
                                    ?>    
                                    <div class="col-md-2" data-aos="zoom-in">
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
      <section class="<?php if($id != '2'){echo 'd-none';} ?>">
         <div class="container">
            <div class="col-md-12">
               <ul class="tabul">
                  <li class="clickme"><a href="javascript:void();" data-tag="three" class="activelink">PIPES</a>
                  </li>
                  <li class="clickme ml-md-5"><a href="javascript:void();" data-tag="four">FITTINGS</a></li>
               </ul>
               <div style="clear: both;"></div>
               <div id="container">
                  <div class="list mb-5" id="three" style="max-height: 600px;overflow: scroll;">
                     <div class="row justify-content-center">
                        <div class="col-md-12">
                           <p class="text-center active">uPVC PLUMBING PIPES AS PER ASTM D-1785 </p>
                        </div>
                        <?php
                           $liQuery = "SELECT * FROM productTabContent WHERE productTab='Pipes' AND productId='$id' ";
                           $liSql = mysqli_query($conn, $liQuery);
                                    $sr = 10000;
                                    while($liData=mysqli_fetch_array($liSql)){
                                        $num = $sr++;
                                    ?>    
                                    <div class="col-md-2" data-aos="zoom-in">
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
                                <div class="col-md-2" data-aos="zoom-in">
                                        <div class="overlay-container" style="background-image: url('sadmin/product-images/uPVC Plumbing_PIPE SCH-40 (3 MTR-6 MTR-PLAIN END).jpg')">
                                            <div class="overlay-button"><a href="#" class="btn btn-info" data-toggle="modal" data-target="#6mtrThreded">Know More</a></div>
                                        </div>
                                        <p class="overlay-caption">SCH-40 (6 MTR -THREADED)</p>
                                    </div>
                                    <div class="modal fade" id="6mtrThreded" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                      <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">SCH-40 (6 MTR -THREADED)</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                            </button>
                                          </div>
                                          <div class="modal-body">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <img src="sadmin/product-images/uPVC Plumbing_PIPE SCH-40 (3 MTR-6 MTR-PLAIN END).jpg" width="100%">
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
                                                                <td>1/2"</td>
                                                                <td>15</td>
                                                                <td>50</td>
                                                            </tr>
                                                            <tr>
                                                                <td>3/4"</td>
                                                                <td>20</td>
                                                                <td>40</td>
                                                            </tr>
                                                            <tr>
                                                                <td>1"</td>
                                                                <td>25</td>
                                                                <td>25</td>
                                                            </tr>
                                                            <tr>
                                                                <td>1.25"</td>
                                                                <td>32</td>
                                                                <td>15</td>
                                                            </tr>
                                                            <tr>
                                                                <td>1.50"</td>
                                                                <td>40</td>
                                                                <td>10</td>
                                                            </tr>
                                                            <tr>
                                                                <td>2"</td>
                                                                <td>50</td>
                                                                <td>10</td>
                                                            </tr>
                                                            <tr>
                                                                <td>2.50"</td>
                                                                <td>65</td>
                                                                <td>4</td>
                                                            </tr>
                                                            <tr>
                                                                <td>3"</td>
                                                                <td>80</td>
                                                                <td>5</td>
                                                            </tr>
                                                            <tr>
                                                                <td>4"</td>
                                                                <td>100</td>
                                                                <td>3</td>
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
                  <div class="list hide mb-5" id="four" style="max-height: 600px;overflow: scroll;">
                     <div class="row justify-content-center">
                        <div class="col-md-12">
                           <p class="text-center">uPVC PLUMBING FITTINGS IN SCH 40 AS PER ASTM D- 2466</p>
                        </div>
                        <?php
                           $liQuery = "SELECT * FROM productTabContent WHERE productTab='Fittings' AND productSubTab='uPVC PLUMBING FITTINGS IN SCH 40 AS PER ASTM D - 2466' ";
                           $liSql = mysqli_query($conn, $liQuery);
                                    $sr = 100000;
                                    while($liData=mysqli_fetch_array($liSql)){
                                        $num = $sr++;
                                    ?>    
                                    <div class="col-md-2" data-aos="zoom-in">
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
                     <div class="row justify-content-center">
                        <div class="col-md-12">
                           <p class="text-center">uPVC PLUMBING FITTINGS IN SCH-80 AS PER ASTM D-2467</p>
                        </div>
                        <?php
                           $liQuery = "SELECT * FROM productTabContent WHERE productTab='Fittings' AND productSubTab='uPVC PLUMBING FITTINGS IN SCH-80 AS PER ASTM D - 2467' ";
                           $liSql = mysqli_query($conn, $liQuery);
                                    $sr = 1000000;
                                    while($liData=mysqli_fetch_array($liSql)){
                                        $num = $sr++;
                                    ?>    
                                    <div class="col-md-2" data-aos="zoom-in">
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
      <section class="<?php if($id != '3'){echo 'd-none';} ?>">
         <div class="container">
            <div class="col-md-12">
               <ul class="tabul">
                  <li class="clickme"><a href="javascript:void();" data-tag="five" class="activelink">PIPES</a>
                  </li>
                  <li class="clickme ml-md-5"><a href="javascript:void();" data-tag="six">FITTINGS</a></li>
               </ul>
               <div style="clear: both;"></div>
               <div id="container">
                  <div class="list mb-5" id="five" style="max-height: 600px;overflow: scroll;">
                     <div class="row justify-content-center">
                        <div class="col-md-12">
                           <p class="text-center active">AGRI PIPES CONFORMING TO IS:4985-2000</p>
                        </div>
                        <?php
                           $liQuery = "SELECT * FROM productTabContent WHERE productTab='Pipes' AND productId='$id' ";
                           $liSql = mysqli_query($conn, $liQuery);
                                    $sr = 10000000;
                                    while($liData=mysqli_fetch_array($liSql)){
                                        $num = $sr++;
                                    ?>    
                                    <div class="col-md-2" data-aos="zoom-in">
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
                                                                <th>Size</th>
                                                                <th rowspan="2" class="align-middle">Standard Packaging Quantity</th>
                                                            </tr>
                                                            <tr>
                                                                <th>mm</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td><?php echo $liData['specInch1']; ?></td>
                                                                <td><?php echo $liData['specMM1']; ?></td>
                                                            </tr>
                                                            <tr <?php if($liData['specInch2']==''){echo"style='display:none'";} ?>>
                                                                <td><?php echo $liData['specInch2']; ?></td>
                                                                <td><?php echo $liData['specMM2']; ?></td>
                                                            </tr>
                                                            <tr <?php if($liData['specInch3']==''){echo"style='display:none'";} ?>>
                                                                <td><?php echo $liData['specInch3']; ?></td>
                                                                <td><?php echo $liData['specMM3']; ?></td>
                                                            </tr>
                                                            <tr <?php if($liData['specInch4']==''){echo"style='display:none'";} ?>>
                                                                <td><?php echo $liData['specInch4']; ?></td>
                                                                <td><?php echo $liData['specMM4']; ?></td>
                                                            </tr>
                                                            <tr <?php if($liData['specInch5']==''){echo"style='display:none'";} ?>>
                                                                <td><?php echo $liData['specInch5']; ?></td>
                                                                <td><?php echo $liData['specMM5']; ?></td>
                                                            </tr>
                                                            <tr <?php if($liData['specInch6']==''){echo"style='display:none'";} ?>>
                                                                <td><?php echo $liData['specInch6']; ?></td>
                                                                <td><?php echo $liData['specMM6']; ?></td>
                                                            </tr>
                                                            <tr <?php if($liData['specInch7']==''){echo"style='display:none'";} ?>>
                                                                <td><?php echo $liData['specInch7']; ?></td>
                                                                <td><?php echo $liData['specMM7']; ?></td>
                                                            </tr>
                                                            <tr <?php if($liData['specInch8']==''){echo"style='display:none'";} ?>>
                                                                <td><?php echo $liData['specInch8']; ?></td>
                                                                <td><?php echo $liData['specMM8']; ?></td>
                                                            </tr>
                                                            <tr <?php if($liData['specInch9']==''){echo"style='display:none'";} ?>>
                                                                <td><?php echo $liData['specInch9']; ?></td>
                                                                <td><?php echo $liData['specMM9']; ?></td>
                                                            </tr>
                                                            <tr <?php if($liData['specInch10']==''){echo"style='display:none'";} ?>>
                                                                <td><?php echo $liData['specInch10']; ?></td>
                                                                <td><?php echo $liData['specMM10']; ?></td>
                                                            </tr>
                                                            <tr <?php if($liData['specInch11']==''){echo"style='display:none'";} ?>>
                                                                <td><?php echo $liData['specInch11']; ?></td>
                                                                <td><?php echo $liData['specMM11']; ?></td>
                                                            </tr>
                                                            <tr <?php if($liData['specInch12']==''){echo"style='display:none'";} ?>>
                                                                <td><?php echo $liData['specInch12']; ?></td>
                                                                <td><?php echo $liData['specMM12']; ?></td>
                                                            </tr>
                                                            <tr <?php if($liData['specInch13']==''){echo"style='display:none'";} ?>>
                                                                <td><?php echo $liData['specInch13']; ?></td>
                                                                <td><?php echo $liData['specMM13']; ?></td>
                                                                
                                                            </tr>
                                                            <tr <?php if($liData['specInch14']==''){echo"style='display:none'";} ?>>
                                                                <td><?php echo $liData['specInch14']; ?></td>
                                                                <td><?php echo $liData['specMM14']; ?></td>
                                                            </tr>
                                                            <tr <?php if($liData['specInch15']==''){echo"style='display:none'";} ?>>
                                                                <td><?php echo $liData['specInch15']; ?></td>
                                                                <td><?php echo $liData['specMM15']; ?></td>
                                                            </tr>
                                                            <tr <?php if($liData['specInch16']==''){echo"style='display:none'";} ?>>
                                                                <td><?php echo $liData['specInch16']; ?></td>
                                                                <td><?php echo $liData['specMM16']; ?></td>
                                                            </tr>
                                                            <tr <?php if($liData['specInch17']==''){echo"style='display:none'";} ?>>
                                                                <td><?php echo $liData['specInch17']; ?></td>
                                                                <td><?php echo $liData['specMM17']; ?></td>
                                                            </tr>
                                                            <tr <?php if($liData['specInch18']==''){echo"style='display:none'";} ?>>
                                                                <td><?php echo $liData['specInch18']; ?></td>
                                                                <td><?php echo $liData['specMM18']; ?></td>
                                                            </tr>
                                                            <tr <?php if($liData['specInch19']==''){echo"style='display:none'";} ?>>
                                                                <td><?php echo $liData['specInch19']; ?></td>
                                                                <td><?php echo $liData['specMM19']; ?></td>
                                                            </tr>
                                                            <tr <?php if($liData['specInch20']==''){echo"style='display:none'";} ?>>
                                                                <td><?php echo $liData['specInch20']; ?></td>
                                                                <td><?php echo $liData['specMM20']; ?></td>
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
                  <div class="list hide mb-5" id="six" style="max-height: 600px;overflow: scroll;">
                     <div class="row justify-content-center">
                        <div class="col-md-12">
                           <p class="text-center">AGRICULTURE FITTINGS AS PER IS:7834</p>
                        </div>
                        
                        <?php
                        $liQuery = "SELECT * FROM productTabContent WHERE productTab='Fittings' AND productSubTab='AGRICULTURE FITTINGS (AS PER IS - 7834)' ";
                           $liSql = mysqli_query($conn, $liQuery);
                                    $sr = 10000000000;
                                    while($liData=mysqli_fetch_array($liSql)){
                                        $num = $sr++;
                                    ?>  
                                    <div class="col-md-2" data-aos="zoom-in">
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
                                                                <th>Size</th>
                                                                <th rowspan="2" class="align-middle">Standard Packaging Quantity</th>
                                                            </tr>
                                                            <tr>
                                                                <th>mm</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td><?php echo $liData['specInch1']; ?></td>
                                                                <td><?php echo $liData['specMM1']; ?></td>
                                                            </tr>
                                                            <tr <?php if($liData['specInch2']==''){echo"style='display:none'";} ?>>
                                                                <td><?php echo $liData['specInch2']; ?></td>
                                                                <td><?php echo $liData['specMM2']; ?></td>
                                                            </tr>
                                                            <tr <?php if($liData['specInch3']==''){echo"style='display:none'";} ?>>
                                                                <td><?php echo $liData['specInch3']; ?></td>
                                                                <td><?php echo $liData['specMM3']; ?></td>
                                                            </tr>
                                                            <tr <?php if($liData['specInch4']==''){echo"style='display:none'";} ?>>
                                                                <td><?php echo $liData['specInch4']; ?></td>
                                                                <td><?php echo $liData['specMM4']; ?></td>
                                                            </tr>
                                                            <tr <?php if($liData['specInch5']==''){echo"style='display:none'";} ?>>
                                                                <td><?php echo $liData['specInch5']; ?></td>
                                                                <td><?php echo $liData['specMM5']; ?></td>
                                                            </tr>
                                                            <tr <?php if($liData['specInch6']==''){echo"style='display:none'";} ?>>
                                                                <td><?php echo $liData['specInch6']; ?></td>
                                                                <td><?php echo $liData['specMM6']; ?></td>
                                                            </tr>
                                                            <tr <?php if($liData['specInch7']==''){echo"style='display:none'";} ?>>
                                                                <td><?php echo $liData['specInch7']; ?></td>
                                                                <td><?php echo $liData['specMM7']; ?></td>
                                                            </tr>
                                                            <tr <?php if($liData['specInch8']==''){echo"style='display:none'";} ?>>
                                                                <td><?php echo $liData['specInch8']; ?></td>
                                                                <td><?php echo $liData['specMM8']; ?></td>
                                                            </tr>
                                                            <tr <?php if($liData['specInch9']==''){echo"style='display:none'";} ?>>
                                                                <td><?php echo $liData['specInch9']; ?></td>
                                                                <td><?php echo $liData['specMM9']; ?></td>
                                                            </tr>
                                                            <tr <?php if($liData['specInch10']==''){echo"style='display:none'";} ?>>
                                                                <td><?php echo $liData['specInch10']; ?></td>
                                                                <td><?php echo $liData['specMM10']; ?></td>
                                                            </tr>
                                                            <tr <?php if($liData['specInch11']==''){echo"style='display:none'";} ?>>
                                                                <td><?php echo $liData['specInch11']; ?></td>
                                                                <td><?php echo $liData['specMM11']; ?></td>
                                                            </tr>
                                                            <tr <?php if($liData['specInch12']==''){echo"style='display:none'";} ?>>
                                                                <td><?php echo $liData['specInch12']; ?></td>
                                                                <td><?php echo $liData['specMM12']; ?></td>
                                                            </tr>
                                                            <tr <?php if($liData['specInch13']==''){echo"style='display:none'";} ?>>
                                                                <td><?php echo $liData['specInch13']; ?></td>
                                                                <td><?php echo $liData['specMM13']; ?></td>
                                                                
                                                            </tr>
                                                            <tr <?php if($liData['specInch14']==''){echo"style='display:none'";} ?>>
                                                                <td><?php echo $liData['specInch14']; ?></td>
                                                                <td><?php echo $liData['specMM14']; ?></td>
                                                            </tr>
                                                            <tr <?php if($liData['specInch15']==''){echo"style='display:none'";} ?>>
                                                                <td><?php echo $liData['specInch15']; ?></td>
                                                                <td><?php echo $liData['specMM15']; ?></td>
                                                            </tr>
                                                            <tr <?php if($liData['specInch16']==''){echo"style='display:none'";} ?>>
                                                                <td><?php echo $liData['specInch16']; ?></td>
                                                                <td><?php echo $liData['specMM16']; ?></td>
                                                            </tr>
                                                            <tr <?php if($liData['specInch17']==''){echo"style='display:none'";} ?>>
                                                                <td><?php echo $liData['specInch17']; ?></td>
                                                                <td><?php echo $liData['specMM17']; ?></td>
                                                            </tr>
                                                            <tr <?php if($liData['specInch18']==''){echo"style='display:none'";} ?>>
                                                                <td><?php echo $liData['specInch18']; ?></td>
                                                                <td><?php echo $liData['specMM18']; ?></td>
                                                            </tr>
                                                            <tr <?php if($liData['specInch19']==''){echo"style='display:none'";} ?>>
                                                                <td><?php echo $liData['specInch19']; ?></td>
                                                                <td><?php echo $liData['specMM19']; ?></td>
                                                            </tr>
                                                            <tr <?php if($liData['specInch20']==''){echo"style='display:none'";} ?>>
                                                                <td><?php echo $liData['specInch20']; ?></td>
                                                                <td><?php echo $liData['specMM20']; ?></td>
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
      
      
      
      <section class="<?php if($id != '4'){echo 'd-none';} ?>">
         <div id="container">
                     <div class="row justify-content-center">
                        <div class="col-md-12">
                           <p class="text-center active mb-5">For Column Pipes specification, <a href="#" data-toggle="modal" data-target="#ColumnPipes">Click Here</a></p>
                           
                           <div class="modal fade" id="ColumnPipes" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle"> COLUMN PIPES (HSN CODE: 391723)</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-bordered table-striped">
                                                        <thead class="thead-dark">
                                                            <tr>
                                                                <th colspan="2">Size</th>
                                                                <th rowspan="2" class="align-middle">No. of Pcs Per Bundle</th>
                                                            </tr>
                                                            <tr>
                                                                <th>Inches</th>
                                                                <th>mm</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>1"</td>
                                                                <td>33</td>
                                                                <td>30</td>
                                                            </tr>
                                                            <tr>
                                                                <td>1.25"</td>
                                                                <td>42</td>
                                                                <td>25</td>
                                                            </tr>
                                                            <tr>
                                                                <td>1.50"</td>
                                                                <td>48</td>
                                                                <td>20</td>
                                                            </tr>
                                                            <tr>
                                                                <td>2"</td>
                                                                <td>60</td>
                                                                <td>15</td>
                                                            </tr>
                                                            <tr>
                                                                <td>2.50"</td>
                                                                <td>75</td>
                                                                <td>10</td>
                                                            </tr>
                                                            <tr>
                                                                <td>3"</td>
                                                                <td>88</td>
                                                                <td>5</td>
                                                            </tr>
                                                            <tr>
                                                                <td>4"</td>
                                                                <td>113</td>
                                                                <td>5</td>
                                                            </tr>
                                                            <tr>
                                                                <td>5"</td>
                                                                <td>140</td>
                                                                <td>3</td>
                                                            </tr>
                                                            <tr>
                                                                <td>6"</td>
                                                                <td>168</td>
                                                                <td>2</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle"> ACCESSORIES FOR COLUMN PIPES (HSN CODE: 730711 & 730729) </h5>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-bordered table-striped">
                                                        <thead class="thead-dark">
                                                            <tr>
                                                                <th colspan="2">Size</th>
                                                            </tr>
                                                            <tr>
                                                                <th>Inches</th>
                                                                <th>mm</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>1"</td>
                                                                <td>25</td>
                                                            </tr>
                                                            <tr>
                                                                <td>1.25"</td>
                                                                <td>32</td>
                                                            </tr>
                                                            <tr>
                                                                <td>1.50"</td>
                                                                <td>40</td>
                                                            </tr>
                                                            <tr>
                                                                <td>2"</td>
                                                                <td>50</td>
                                                            </tr>
                                                            <tr>
                                                                <td>2.50"</td>
                                                                <td>65</td>
                                                            </tr>
                                                            <tr>
                                                                <td>3"</td>
                                                                <td>80</td>
                                                            </tr>
                                                            <tr>
                                                                <td>4"</td>
                                                                <td>100</td>
                                                            </tr>
                                                            <tr>
                                                                <td>5"</td>
                                                                <td>125</td>
                                                            </tr>
                                                            <tr>
                                                                <td>6"</td>
                                                                <td>150</td>
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
                  </div>
         </div>
      </section>
      
      <section class="<?php if($id != '5'){echo 'd-none';} ?>">
         <div id="container">
                     <div class="row justify-content-center">
                        <div class="col-md-12">
                           <p class="text-center active mb-5">For HDPE Pipes & Coils specification, <a href="#" data-toggle="modal" data-target="#HDPEPipes">Click Here</a></p>
                           
                           <div class="modal fade" id="HDPEPipes" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle"> HDPE PIPES AS PER IS:4984:2016 (HSN CODE:391721)</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-bordered table-striped">
                                                        <thead class="thead-dark">
                                                            <tr>
                                                                <th colspan="2">Sizes</th>
                                                                <th colspan="7" class="align-middle">PE-63</th>
                                                            </tr>
                                                            <tr>
                                                                <th>Inches</th>
                                                                <th>SDR</th>
                                                                <th>SDR-41</th>
                                                                <th>SDR-33</th>
                                                                <th>SDR-26</th>
                                                                <th>SDR-21</th>
                                                                <th>SDR-17</th>
                                                                <th>SDR-13.6</th>
                                                                <th>SDR-11</th>
                                                            </tr>
                                                            <tr>
                                                                <th>Inches</th>
                                                                <th>PN/DA</th>
                                                                <th>PN-2</th>
                                                                <th>PN-2.5</th>
                                                                <th>PN-3.5</th>
                                                                <th>PN-4</th>
                                                                <th>PN-5</th>
                                                                <th>PN-6</th>
                                                                <th>PN-8</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>1/2"</td>
                                                                <td>20MM</td>
                                                                <td>-</td>
                                                                <td>-</td>
                                                                <td>-</td>
                                                                <td>-</td>
                                                                <td>-</td>
                                                                <td>-</td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>3/4"</td>
                                                                <td>25 MM</td>
                                                                <td>-</td>
                                                                <td>-</td>
                                                                <td>-</td>
                                                                <td>-</td>
                                                                <td>-</td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>1"</td>
                                                                <td>32 MM</td>
                                                                <td>-</td>
                                                                <td>-</td>
                                                                <td>-</td>
                                                                <td>-</td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>1.25"</td>
                                                                <td>40 MM</td>
                                                                <td>-</td>
                                                                <td>-</td>
                                                                <td>-</td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>1.50"</td>
                                                                <td>50 MM</td>
                                                                <td>-</td>
                                                                <td>-</td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>2"</td>
                                                                <td>63 MM</td>
                                                                <td>-</td>
                                                                <td>-</td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>2.50"</td>
                                                                <td>75 MM</td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>3"</td>
                                                                <td>90 MM</td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>4"</td>
                                                                <td>110 MM</td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>4.50"</td>
                                                                <td>125 MM</td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>5"</td>
                                                                <td>140 MM</td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>6"</td>
                                                                <td>160 MM</td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>7"</td>
                                                                <td>180 MM</td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>8"</td>
                                                                <td>200 MM</td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>9"</td>
                                                                <td>225 MM</td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>10"</td>
                                                                <td>250 MM</td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>11"</td>
                                                                <td>280 MM</td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>12"</td>
                                                                <td>315 MM</td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle"> HDPE PIPES AS PER IS:4984:2016 (HSN CODE: 391721)</h5>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-bordered table-striped">
                                                        <thead class="thead-dark">
                                                            <tr>
                                                                <th colspan="2">Sizes</th>
                                                                <th colspan="9" class="align-middle">PE-80</th>
                                                            </tr>
                                                            <tr>
                                                                <th>Inches</th>
                                                                <th>SDR</th>
                                                                <th>SDR-41</th>
                                                                <th>SDR-33</th>
                                                                <th>SDR-26</th>
                                                                <th>SDR-21</th>
                                                                <th>SDR-17</th>
                                                                <th>SDR-13.6</th>
                                                                <th>SDR-11</th>
                                                                <th>SDR-9</th>
                                                                <th>SDR-7.4</th>
                                                            </tr>
                                                            <tr>
                                                                <th></th>
                                                                <th>PN/DA</th>
                                                                <th>PN-2.5</th>
                                                                <th>PN-3.2</th>
                                                                <th>PN-4</th>
                                                                <th>PN-5</th>
                                                                <th>PN-6</th>
                                                                <th>PN-8</th>
                                                                <th>PN-10</th>
                                                                <th>PN-12.5</th>
                                                                <th>PN-16</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>-</td>
                                                                <td>16 MM</td>
                                                                <td>-</td>
                                                                <td>-</td>
                                                                <td>-</td>
                                                                <td>-</td>
                                                                <td>-</td>
                                                                <td>-</td>
                                                                <td>-</td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                            </tr>
                                                            
                                                            <tr>
                                                                <td>1/2"</td>
                                                                <td>20 MM</td>
                                                                <td>-</td>
                                                                <td>-</td>
                                                                <td>-</td>
                                                                <td>-</td>
                                                                <td>-</td>
                                                                <td>-</td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>3/4"</td>
                                                                <td>25 MM</td>
                                                                <td>-</td>
                                                                <td>-</td>
                                                                <td>-</td>
                                                                <td>-</td>
                                                                <td>-</td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>1"</td>
                                                                <td>32 MM</td>
                                                                <td>-</td>
                                                                <td>-</td>
                                                                <td>-</td>
                                                                <td>-</td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>1.25"</td>
                                                                <td>40 MM</td>
                                                                <td>-</td>
                                                                <td>-</td>
                                                                <td>-</td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>1.50"</td>
                                                                <td>50 MM</td>
                                                                <td>-</td>
                                                                <td>-</td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>2"</td>
                                                                <td>63 MM</td>
                                                                <td>-</td>
                                                                <td>-</td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>2.50"</td>
                                                                <td>75 MM</td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>3"</td>
                                                                <td>90 MM</td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>4"</td>
                                                                <td>110 MM</td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>4.50"</td>
                                                                <td>125 MM</td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>5"</td>
                                                                <td>140 MM</td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>6"</td>
                                                                <td>160 MM</td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>7"</td>
                                                                <td>180 MM</td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>8"</td>
                                                                <td>200 MM</td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>9"</td>
                                                                <td>225 MM</td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>10"</td>
                                                                <td>250 MM</td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>11"</td>
                                                                <td>280 MM</td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>12"</td>
                                                                <td>315 MM</td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                            </tr>
                                                            
                                                        </tbody>
                                                    </table>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="modal-content">
            <div class="modal-body">
            </div>
                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-bordered table-striped">
                                                        <thead class="thead-dark">
                                                            <tr>
                                                                <th colspan="2">Sizes</th>
                                                                <th colspan="9" class="align-middle">PE-100</th>
                                                            </tr>
                                                            <tr>
                                                                <th>Inches</th>
                                                                <th>SDR</th>
                                                                <th>SDR-41</th>
                                                                <th>SDR-33</th>
                                                                <th>SDR-26</th>
                                                                <th>SDR-21</th>
                                                                <th>SDR-17</th>
                                                                <th>SDR-13.6</th>
                                                                <th>SDR-11</th>
                                                                <th>SDR-9</th>
                                                            </tr>
                                                            <tr>
                                                                <th></th>
                                                                <th>PN/DA</th>
                                                                <th>PN-3</th>
                                                                <th>PN-4</th>
                                                                <th>PN-5</th>
                                                                <th>PN-6</th>
                                                                <th>PN-8</th>
                                                                <th>PN-10</th>
                                                                <th>PN-12.5</th>
                                                                <th>PN-16</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>-</td>
                                                                <td>16 MM</td>
                                                                <td>-</td>
                                                                <td>-</td>
                                                                <td>-</td>
                                                                <td>-</td>
                                                                <td>-</td>
                                                                <td>-</td>
                                                                <td>-</td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                            </tr>
                                                            
                                                            <tr>
                                                                <td>1/2"</td>
                                                                <td>20 MM</td>
                                                                <td>-</td>
                                                                <td>-</td>
                                                                <td>-</td>
                                                                <td>-</td>
                                                                <td>-</td>
                                                                <td>-</td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>3/4"</td>
                                                                <td>25 MM</td>
                                                                <td>-</td>
                                                                <td>-</td>
                                                                <td>-</td>
                                                                <td>-</td>
                                                                <td>-</td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>1"</td>
                                                                <td>32 MM</td>
                                                                <td>-</td>
                                                                <td>-</td>
                                                                <td>-</td>
                                                                <td>-</td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>1.25"</td>
                                                                <td>40 MM</td>
                                                                <td>-</td>
                                                                <td>-</td>
                                                                <td>-</td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>1.50"</td>
                                                                <td>50 MM</td>
                                                                <td>-</td>
                                                                <td>-</td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>2"</td>
                                                                <td>63 MM</td>
                                                                <td>-</td>
                                                                <td>-</td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>2.50"</td>
                                                                <td>75 MM</td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>3"</td>
                                                                <td>90 MM</td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>4"</td>
                                                                <td>110 MM</td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>4.50"</td>
                                                                <td>125 MM</td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>5"</td>
                                                                <td>140 MM</td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>6"</td>
                                                                <td>160 MM</td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>7"</td>
                                                                <td>180 MM</td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>8"</td>
                                                                <td>200 MM</td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>9"</td>
                                                                <td>225 MM</td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>10"</td>
                                                                <td>250 MM</td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>11"</td>
                                                                <td>280 MM</td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>12"</td>
                                                                <td>315 MM</td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                            </tr>
                                                            
                                                        </tbody>
                                                    </table>
                    </div>
                </div>
            </div>
            
            <div class="modal-content">
            <div class="modal-body">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle"> HDPE PIPES AS PER IS:14333:1996 (HSN CODE: 391721)</h5>
            </div>
                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-bordered table-striped">
                                                        <thead class="thead-dark">
                                                            <tr>
                                                                <th colspan="2">Sizes</th>
                                                                <th colspan="9" class="align-middle">PE-63</th>
                                                            </tr>
                                                            <tr>
                                                                <th>Inches</th>
                                                                <th>SDR</th>
                                                                <th>SDR-41</th>
                                                                <th>SDR-33</th>
                                                                <th>SDR-26</th>
                                                                <th>SDR-21</th>
                                                                <th>SDR-17</th>
                                                                <th>SDR-13.6</th>
                                                                <th>SDR-11</th>
                                                                <th>SDR-9</th>
                                                            </tr>
                                                            <tr>
                                                                <th></th>
                                                                <th>PN/DA</th>
                                                                <th>PN-3</th>
                                                                <th>PN-4</th>
                                                                <th>PN-5</th>
                                                                <th>PN-6</th>
                                                                <th>PN-8</th>
                                                                <th>PN-10</th>
                                                                <th>PN-12.5</th>
                                                                <th>PN-16</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>2</td>
                                                                <td>63</td>
                                                                <td>-</td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                            </tr>
                                                            
                                                            <tr>
                                                                <td>2.50"</td>
                                                                <td>75 MM</td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>3"</td>
                                                                <td>90 MM</td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>4"</td>
                                                                <td>110 MM</td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>4.50"</td>
                                                                <td>125 MM</td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>5"</td>
                                                                <td>140 MM</td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>6"</td>
                                                                <td>160 MM</td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>7"</td>
                                                                <td>180 MM</td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>8"</td>
                                                                <td>200 MM</td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>9"</td>
                                                                <td>225 MM</td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>10"</td>
                                                                <td>250 MM</td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>11"</td>
                                                                <td>280 MM</td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>12"</td>
                                                                <td>315 MM</td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                            </tr>
                                                            
                                                            
                                                        </tbody>
                                                    </table>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-bordered table-striped">
                                                        <thead class="thead-dark">
                                                            <tr>
                                                                <th colspan="2">Sizes</th>
                                                                <th colspan="9" class="align-middle">PE-80</th>
                                                            </tr>
                                                            <tr>
                                                                <th>Inches</th>
                                                                <th>SDR</th>
                                                                <th>SDR-41</th>
                                                                <th>SDR-33</th>
                                                                <th>SDR-26</th>
                                                                <th>SDR-21</th>
                                                                <th>SDR-17</th>
                                                                <th>SDR-13.6</th>
                                                                <th>SDR-11</th>
                                                                <th>SDR-9</th>
                                                            </tr>
                                                            <tr>
                                                                <th></th>
                                                                <th>PN/DA</th>
                                                                <th>PN-3</th>
                                                                <th>PN-4</th>
                                                                <th>PN-5</th>
                                                                <th>PN-6</th>
                                                                <th>PN-8</th>
                                                                <th>PN-10</th>
                                                                <th>PN-12.5</th>
                                                                <th>PN-16</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>2</td>
                                                                <td>63</td>
                                                                <td>-</td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                            </tr>
                                                            
                                                            <tr>
                                                                <td>2.50"</td>
                                                                <td>75 MM</td>
                                                                <td>-</td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>3"</td>
                                                                <td>90 MM</td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>4"</td>
                                                                <td>110 MM</td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>4.50"</td>
                                                                <td>125 MM</td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>5"</td>
                                                                <td>140 MM</td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>6"</td>
                                                                <td>160 MM</td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>7"</td>
                                                                <td>180 MM</td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>8"</td>
                                                                <td>200 MM</td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>9"</td>
                                                                <td>225 MM</td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>10"</td>
                                                                <td>250 MM</td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>11"</td>
                                                                <td>280 MM</td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>12"</td>
                                                                <td>315 MM</td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                            </tr>
                                                            
                                                            
                                                        </tbody>
                                                    </table>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-bordered table-striped">
                                                        <thead class="thead-dark">
                                                            <tr>
                                                                <th colspan="2">Sizes</th>
                                                                <th colspan="9" class="align-middle">PE-100</th>
                                                            </tr>
                                                            <tr>
                                                                <th>Inches</th>
                                                                <th>SDR</th>
                                                                <th>SDR-41</th>
                                                                <th>SDR-33</th>
                                                                <th>SDR-26</th>
                                                                <th>SDR-21</th>
                                                                <th>SDR-17</th>
                                                                <th>SDR-13.6</th>
                                                                <th>SDR-11</th>
                                                                <th>SDR-9</th>
                                                            </tr>
                                                            <tr>
                                                                <th></th>
                                                                <th>PN/DA</th>
                                                                <th>PN-3</th>
                                                                <th>PN-4</th>
                                                                <th>PN-5</th>
                                                                <th>PN-6</th>
                                                                <th>PN-8</th>
                                                                <th>PN-10</th>
                                                                <th>PN-12.5</th>
                                                                <th>PN-16</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>2</td>
                                                                <td>63</td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                            </tr>
                                                            
                                                            <tr>
                                                                <td>2.50"</td>
                                                                <td>75 MM</td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>3"</td>
                                                                <td>90 MM</td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>4"</td>
                                                                <td>110 MM</td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>4.50"</td>
                                                                <td>125 MM</td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>5"</td>
                                                                <td>140 MM</td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>6"</td>
                                                                <td>160 MM</td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>7"</td>
                                                                <td>180 MM</td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>8"</td>
                                                                <td>200 MM</td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>9"</td>
                                                                <td>225 MM</td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>10"</td>
                                                                <td>250 MM</td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>11"</td>
                                                                <td>280 MM</td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>12"</td>
                                                                <td>315 MM</td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                                <td><img src="img/right.svg" width="20"></td>
                                                            </tr>
                                                            
                                                            
                                                        </tbody>
                                                    </table>
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
                                     
                     </div>
                  </div>
         </div>
      </section>
      
      <section class="<?php if($id != '6'){echo 'd-none';} ?>">
    <div id="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <p class="text-center active mb-5">For Sprinkler System specification, <a href="#" data-toggle="modal" data-target="#SprinklerSystem">Click Here</a></p>

                <div class="modal fade" id="SprinklerSystem" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">HDPE SPRINKLER IRRIGATION SYSTEM IS:14151-1994 (KAN TYPE)</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <table class="table table-bordered table-striped text-center">
                                            <thead class="thead-dark">
                                                <tr>
                                                    <th>S.NO.</th>
                                                    <th>Description</th>
                                                    <th>63 MM</th>
                                                    <th>75 MM</th>
                                                    <th>90 MM</th>
                                                    <th>110 MM</th>
                                                    <th>125 MM</th>
                                                </tr>
                                                
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td class="text-left">HDPE Pipe duly coupled IS:14151 (Class-1) 6 mtr including Rubber Gasket & Latch Clamp</td>
                                                    <td>-</td>
                                                    <td><img src="img/right.svg" width="20" /></td>
                                                    <td><img src="img/right.svg" width="20" /></td>
                                                    <td><img src="img/right.svg" width="20" /></td>
                                                    <td><img src="img/right.svg" width="20" /></td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td class="text-left">HDPE Pipe duly coupled IS:1415I (Class-II) 6 mtr. including Rubber Gasket & Latch Clamp</td>
                                                    <td><img src="img/right.svg" width="20" /></td>
                                                    <td><img src="img/right.svg" width="20" /></td>
                                                    <td><img src="img/right.svg" width="20" /></td>
                                                    <td><img src="img/right.svg" width="20" /></td>
                                                    <td><img src="img/right.svg" width="20" /></td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td class="text-left">HDPE Pipe duly coupled 3 mtr. (Class-l)</td>
                                                    <td><img src="img/right.svg" width="20" /></td>
                                                    <td><img src="img/right.svg" width="20" /></td>
                                                    <td><img src="img/right.svg" width="20" /></td>
                                                    <td><img src="img/right.svg" width="20" /></td>
                                                    <td><img src="img/right.svg" width="20" /></td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td class="text-left">HDPE Plain Pipe IS: 14151 (Class-l)</td>
                                                    <td>-</td>
                                                    <td><img src="img/right.svg" width="20" /></td>
                                                    <td><img src="img/right.svg" width="20" /></td>
                                                    <td><img src="img/right.svg" width="20" /></td>
                                                    <td><img src="img/right.svg" width="20" /></td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td class="text-left">HDPE Plain Pipe IS: 14151 (Class-ll)</td>
                                                    <td><img src="img/right.svg" width="20" /></td>
                                                    <td><img src="img/right.svg" width="20" /></td>
                                                    <td><img src="img/right.svg" width="20" /></td>
                                                    <td><img src="img/right.svg" width="20" /></td>
                                                    <td><img src="img/right.svg" width="20" /></td>
                                                </tr>
                                                <tr>
                                                    <td>6</td>
                                                    <td class="text-left">Bend With Coupler</td>
                                                    <td><img src="img/right.svg" width="20" /></td>
                                                    <td><img src="img/right.svg" width="20" /></td>
                                                    <td><img src="img/right.svg" width="20" /></td>
                                                    <td><img src="img/right.svg" width="20" /></td>
                                                    <td><img src="img/right.svg" width="20" /></td>
                                                </tr>
                                                <tr>
                                                    <td>7</td>
                                                    <td class="text-left">Tee With Coupler</td>
                                                    <td><img src="img/right.svg" width="20" /></td>
                                                    <td><img src="img/right.svg" width="20" /></td>
                                                    <td><img src="img/right.svg" width="20" /></td>
                                                    <td><img src="img/right.svg" width="20" /></td>
                                                    <td><img src="img/right.svg" width="20" /></td>
                                                </tr>
                                                <tr>
                                                    <td>8</td>
                                                    <td class="text-left">PCN (Pump Connecting Nipple) (Long)</td>
                                                    <td><img src="img/right.svg" width="20" /></td>
                                                    <td><img src="img/right.svg" width="20" /></td>
                                                    <td><img src="img/right.svg" width="20" /></td>
                                                    <td><img src="img/right.svg" width="20" /></td>
                                                    <td>-</td>
                                                </tr>
                                                <tr>
                                                    <td>9</td>
                                                    <td class="text-left">PCN (Pump Connecting Nipple) (Short)</td>
                                                    <td><img src="img/right.svg" width="20" /></td>
                                                    <td><img src="img/right.svg" width="20" /></td>
                                                    <td><img src="img/right.svg" width="20" /></td>
                                                    <td><img src="img/right.svg" width="20" /></td>
                                                    <td><img src="img/right.svg" width="20" /></td>
                                                </tr>
                                                <tr>
                                                    <td>10</td>
                                                    <td class="text-left">End Cap with Clamp</td>
                                                    <td><img src="img/right.svg" width="20" /></td>
                                                    <td><img src="img/right.svg" width="20" /></td>
                                                    <td><img src="img/right.svg" width="20" /></td>
                                                    <td><img src="img/right.svg" width="20" /></td>
                                                    <td><img src="img/right.svg" width="20" /></td>
                                                </tr>
                                                <tr>
                                                    <td>11</td>
                                                    <td class="text-left">Sprinkler Adaptor with Foot Batton</td>
                                                    <td><img src="img/right.svg" width="20" /></td>
                                                    <td><img src="img/right.svg" width="20" /></td>
                                                    <td><img src="img/right.svg" width="20" /></td>
                                                    <td><img src="img/right.svg" width="20" /></td>
                                                    <td>-</td>
                                                </tr>
                                                <tr>
                                                    <td>12</td>
                                                    <td class="text-left">Sprinkler Adaptor with Foot Batton (Heavy)</td>
                                                    <td><img src="img/right.svg" width="20" /></td>
                                                    <td><img src="img/right.svg" width="20" /></td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                </tr>
                                                <tr>
                                                    <td>13</td>
                                                    <td class="text-left">APL APOLLO Brand-  Medium Class Riser Pipe</td>
                                                    <td><img src="img/right.svg" width="20" /></td>
                                                    <td><img src="img/right.svg" width="20" /></td>
                                                    <td><img src="img/right.svg" width="20" /></td>
                                                    <td><img src="img/right.svg" width="20" /></td>
                                                    <td><img src="img/right.svg" width="20" /></td>
                                                </tr>
                                                <tr>
                                                    <td>14</td>
                                                    <td class="text-left">Sprinkler Nozzel</td>
                                                    <td><img src="img/right.svg" width="20" /></td>
                                                    <td><img src="img/right.svg" width="20" /></td>
                                                    <td><img src="img/right.svg" width="20" /></td>
                                                    <td><img src="img/right.svg" width="20" /></td>
                                                    <td><img src="img/right.svg" width="20" /></td>
                                                </tr>
                                                <tr>
                                                    <td>15</td>
                                                    <td class="text-left">Extra Rubber Ring</td>
                                                    <td><img src="img/right.svg" width="20" /></td>
                                                    <td><img src="img/right.svg" width="20" /></td>
                                                    <td><img src="img/right.svg" width="20" /></td>
                                                    <td><img src="img/right.svg" width="20" /></td>
                                                    <td><img src="img/right.svg" width="20" /></td>
                                                </tr>
                                                <tr>
                                                    <td>16</td>
                                                    <td class="text-left">Extra Clamp</td>
                                                    <td><img src="img/right.svg" width="20" /></td>
                                                    <td><img src="img/right.svg" width="20" /></td>
                                                    <td><img src="img/right.svg" width="20" /></td>
                                                    <td><img src="img/right.svg" width="20" /></td>
                                                    <td><img src="img/right.svg" width="20" /></td>
                                                </tr>
                                                <tr>
                                                    <td>17</td>
                                                    <td class="text-left">Reducer with Coupler 75 mm x 63 mm</td>
                                                    <td><img src="img/right.svg" width="20" /></td>
                                                    <td>90X75 MM</td>
                                                    <td><img src="img/right.svg" width="20" /></td>
                                                    <td>110X90 MM</td>
                                                    <td><img src="img/right.svg" width="20" /></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">HDPE SPRINKLER SYSTEM IS: 14151</h5>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <table class="table table-bordered table-striped text-center">
                                            <thead class="thead-dark">
                                                <tr>
                                                    <th>S.NO.</th>
                                                    <th>Description</th>
                                                    <th>63 MM</th>
                                                    <th>75 MM</th>
                                                    <th>90 MM</th>
                                                    <th>110 MM</th>
                                                    <th>125 MM</th>
                                                </tr>
                                                
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td class="text-left">HDPE Pipe duly coupled IS:14151 (Class-1) 6 mtr. including Rubber Gasket & Latch Clamp</td>
                                                    <td>-</td>
                                                    <td><img src="img/right.svg" width="20" /></td>
                                                    <td><img src="img/right.svg" width="20" /></td>
                                                    <td><img src="img/right.svg" width="20" /></td>
                                                    <td>-</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td class="text-left">HDPE Pipe duly coupled IS: 1415I (Class-II) 6 mtr. Including Rubber Gasket & Latch Clamp</td>
                                                    <td><img src="img/right.svg" width="20" /></td>
                                                    <td><img src="img/right.svg" width="20" /></td>
                                                    <td><img src="img/right.svg" width="20" /></td>
                                                    <td><img src="img/right.svg" width="20" /></td>
                                                    <td>-</td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td class="text-left">HDPE Pipe duly coupled 3 mtr.</td>
                                                    <td><img src="img/right.svg" width="20" /></td>
                                                    <td><img src="img/right.svg" width="20" /></td>
                                                    <td><img src="img/right.svg" width="20" /></td>
                                                    <td><img src="img/right.svg" width="20" /></td>
                                                    <td>-</td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td class="text-left">Bend with Coupler</td>
                                                    <td><img src="img/right.svg" width="20" /></td>
                                                    <td><img src="img/right.svg" width="20" /></td>
                                                    <td><img src="img/right.svg" width="20" /></td>
                                                    <td><img src="img/right.svg" width="20" /></td>
                                                    <td>-</td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td class="text-left">Tee with Coupler</td>
                                                    <td><img src="img/right.svg" width="20" /></td>
                                                    <td><img src="img/right.svg" width="20" /></td>
                                                    <td><img src="img/right.svg" width="20" /></td>
                                                    <td><img src="img/right.svg" width="20" /></td>
                                                    <td>-</td>
                                                </tr>
                                                <tr>
                                                    <td>6</td>
                                                    <td class="text-left">PCN (Pump Connecting Nipple) (Long)</td>
                                                    <td><img src="img/right.svg" width="20" /></td>
                                                    <td><img src="img/right.svg" width="20" /></td>
                                                    <td><img src="img/right.svg" width="20" /></td>
                                                    <td><img src="img/right.svg" width="20" /></td>
                                                    <td>-</td>
                                                </tr>
                                                <tr>
                                                    <td>7</td>
                                                    <td class="text-left">PCN (Pump Connecting Nipple) (Short)</td>
                                                    <td><img src="img/right.svg" width="20" /></td>
                                                    <td><img src="img/right.svg" width="20" /></td>
                                                    <td><img src="img/right.svg" width="20" /></td>
                                                    <td><img src="img/right.svg" width="20" /></td>
                                                    <td>-</td>
                                                </tr>
                                                <tr>
                                                    <td>8</td>
                                                    <td class="text-left">End Cap</td>
                                                    <td><img src="img/right.svg" width="20" /></td>
                                                    <td><img src="img/right.svg" width="20" /></td>
                                                    <td><img src="img/right.svg" width="20" /></td>
                                                    <td><img src="img/right.svg" width="20" /></td>
                                                    <td>-</td>
                                                </tr>
                                                <tr>
                                                    <td>9</td>
                                                    <td class="text-left">Sprinkler Adaptor with Foot Batton</td>
                                                    <td><img src="img/right.svg" width="20" /></td>
                                                    <td><img src="img/right.svg" width="20" /></td>
                                                    <td><img src="img/right.svg" width="20" /></td>
                                                    <td><img src="img/right.svg" width="20" /></td>
                                                    <td>-</td>
                                                </tr>
                                                <tr>
                                                    <td>10</td>
                                                    <td class="text-left">APL APOLLO Brand- Medium Class Riser Pipe </td>
                                                    <td><img src="img/right.svg" width="20" /></td>
                                                    <td><img src="img/right.svg" width="20" /></td>
                                                    <td><img src="img/right.svg" width="20" /></td>
                                                    <td><img src="img/right.svg" width="20" /></td>
                                                    <td>-</td>
                                                </tr>
                                                <tr>
                                                    <td>11</td>
                                                    <td class="text-left">Sprinkler Nozzel</td>
                                                    <td><img src="img/right.svg" width="20" /></td>
                                                    <td><img src="img/right.svg" width="20" /></td>
                                                    <td><img src="img/right.svg" width="20" /></td>
                                                    <td><img src="img/right.svg" width="20" /></td>
                                                    <td>-</td>
                                                </tr>
                                                <tr>
                                                    <td>12</td>
                                                    <td class="text-left">Extra Rubber Ring</td>
                                                    <td><img src="img/right.svg" width="20" /></td>
                                                    <td><img src="img/right.svg" width="20" /></td>
                                                    <td><img src="img/right.svg" width="20" /></td>
                                                    <td><img src="img/right.svg" width="20" /></td>
                                                    <td>-</td>
                                                </tr>
                                                <tr>
                                                    <td>13</td>
                                                    <td class="text-left">Reducer with Coupler 75 mm x 63 mm</td>
                                                    <td><img src="img/right.svg" width="20" /></td>
                                                    <td>90X75 MM</td>
                                                    <td><img src="img/right.svg" width="20" /></td>
                                                    <td>110X90 MM</td>
                                                    <td><img src="img/right.svg" width="20" /></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">HDPE SPRINKLE BARE FITTINGS (PLAIN)</h5>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <table class="table table-bordered table-striped text-left">
                                            <thead class="thead-dark">
                                                <tr>
                                                    <th>S.NO.</th>
                                                    <th>Description</th>
                                                    <th>63 MM</th>
                                                    <th>75 MM</th>
                                                    <th>90 MM</th>
                                                    <th>110 MM</th>
                                                    <th>125 MM</th>
                                                </tr>
                                                
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Coupler (Head)</td>
                                                    <td>-</td>
                                                    <td><img src="img/right.svg" width="20" /></td>
                                                    <td><img src="img/right.svg" width="20" /></td>
                                                    <td><img src="img/right.svg" width="20" /></td>
                                                    <td>-</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Coupler (Tail)</td>
                                                    <td>-</td>
                                                    <td><img src="img/right.svg" width="20" /></td>
                                                    <td><img src="img/right.svg" width="20" /></td>
                                                    <td><img src="img/right.svg" width="20" /></td>
                                                    <td>-</td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>End Cap (Plain)</td>
                                                    <td>-</td>
                                                    <td><img src="img/right.svg" width="20" /></td>
                                                    <td><img src="img/right.svg" width="20" /></td>
                                                    <td><img src="img/right.svg" width="20" /></td>
                                                    <td>-</td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>Bend (Plain)</td>
                                                    <td>-</td>
                                                    <td><img src="img/right.svg" width="20" /></td>
                                                    <td><img src="img/right.svg" width="20" /></td>
                                                    <td><img src="img/right.svg" width="20" /></td>
                                                    <td>-</td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td>Tee (Plain)</td>
                                                    <td>-</td>
                                                    <td><img src="img/right.svg" width="20" /></td>
                                                    <td><img src="img/right.svg" width="20" /></td>
                                                    <td><img src="img/right.svg" width="20" /></td>
                                                    <td>-</td>
                                                </tr>
                                                <tr>
                                                    <td>6</td>
                                                    <td>Reducer 110 mm x 90 mm (Plain)</td>
                                                    <td><img src="img/right.svg" width="20" /></td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                </tr>
                                                <tr>
                                                    <td>7</td>
                                                    <td>Reducer  90 mm x 75 mm (Pain)</td>
                                                    <td><img src="img/right.svg" width="20" /></td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                </tr>
                                            </tbody>
                                        </table>
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
        </div>
    </div>
</section>
      
      <section class="<?php if($id != '7'){echo 'd-none';} ?>">
    <div id="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <p class="text-center active mb-5">For Underground Drainage and Sewerage Pipes specification, <a href="#" data-toggle="modal" data-target="#UndergroundDrainage">Click Here</a></p>

                <div class="modal fade" id="UndergroundDrainage" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">uPVC UNDERGROUND DRAINAGE AND SEWERAGE PIPES (SOLVENT WELD)</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <table class="table table-bordered table-striped">
                                            <thead class="thead-dark">
                                                <tr>
                                                    <th colspan="2" class="text-center">Outside Dia</th>
                                                    <th rowspan="2"class="align-middle text-center">SN-2/SDR-51</th>
                                                    <th rowspan="2" class="align-middle text-center">SN-4/SDR-41</th>
                                                    <th rowspan="2" class="align-middle text-center">SN-8/SDR-34</th>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-center">Inches</th>
                                                        <th class="text-center">mm</th>
                                                    </tr>
                                                        </thead>
                                            <tbody>
                                                <tr>
                                                    <td>2"</td>
                                                    <td>63</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td><img src="img/right.svg" width="20" /></td>
                                                </tr>
                                                <tr>
                                                    <td>2.5"</td>
                                                    <td>75</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td><img src="img/right.svg" width="20" /></td>
                                                </tr>
                                                <tr>
                                                    <td>3"</td>
                                                    <td>90</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td><img src="img/right.svg" width="20" /></td>
                                                </tr>
                                                <tr>
                                                    <td>4"</td>
                                                    <td>110</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td><img src="img/right.svg" width="20" /></td>
                                                </tr>
                                                <tr>
                                                    <td>4.5"</td>
                                                    <td>125</td>
                                                    <td>-</td>
                                                    <td><img src="img/right.svg" width="20" /></td>
                                                    <td><img src="img/right.svg" width="20" /></td>
                                                </tr>
                                                <tr>
                                                    <td>6"</td>
                                                    <td>160</td>
                                                    <td><img src="img/right.svg" width="20" /></td>
                                                    <td><img src="img/right.svg" width="20" /></td>
                                                    <td><img src="img/right.svg" width="20" /></td>
                                                </tr>
                                                <tr>
                                                    <td>8"</td>
                                                    <td>200</td>
                                                    <td><img src="img/right.svg" width="20" /></td>
                                                    <td><img src="img/right.svg" width="20" /></td>
                                                    <td><img src="img/right.svg" width="20" /></td>
                                                </tr>
                                                <tr>
                                                    <td>10"</td>
                                                    <td>250</td>
                                                    <td><img src="img/right.svg" width="20" /></td>
                                                    <td><img src="img/right.svg" width="20" /></td>
                                                    <td><img src="img/right.svg" width="20" /></td>
                                                </tr>
                                                <tr>
                                                    <td>12"</td>
                                                    <td>315</td>
                                                    <td><img src="img/right.svg" width="20" /></td>
                                                    <td><img src="img/right.svg" width="20" /></td>
                                                    <td><img src="img/right.svg" width="20" /></td>
                                                </tr>
                                                <tr>
                                                    <td>16"</td>
                                                    <td>400</td>
                                                    <td><img src="img/right.svg" width="20" /></td>
                                                    <td><img src="img/right.svg" width="20" /></td>
                                                    <td><img src="img/right.svg" width="20" /></td>
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
    </div>
</section>
      
      
      <section class="<?php if($id != '14'){echo 'd-none';} ?>">
         <div id="container">
                     <div class="row justify-content-center">
                        <div class="col-md-12">
                           <p class="text-center active mb-5">For Casing Pipes specification, <a href="#" data-toggle="modal" data-target="#CasingPipes">Click Here</a></p>
                           
                           <div class="modal fade" id="CasingPipes" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle"> uPVC PLAIN CASING PIPES AS PER IS:12818 (HSN CODE: 391723)</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-bordered table-striped">
                                                        <thead class="thead-dark">
                                                            <tr>
                                                                <th>Normal Dia</th>
                                                                <th>OD (MM)</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>35 MM</td>
                                                                <td>42</td>
                                                            </tr>
                                                            <tr>
                                                                <td>40 MM</td>
                                                                <td>48</td>
                                                            </tr>
                                                            <tr>
                                                                <td>50 MM</td>
                                                                <td>60</td>
                                                            </tr>
                                                            <tr>
                                                                <td>80 MM</td>
                                                                <td>88</td>
                                                            </tr>
                                                            <tr>
                                                                <td>100 MM</td>
                                                                <td>113</td>
                                                            </tr>
                                                            <tr>
                                                                <td>115 MM</td>
                                                                <td>125</td>
                                                            </tr>
                                                            <tr>
                                                                <td>125 MM</td>
                                                                <td>140</td>
                                                            </tr>
                                                            <tr>
                                                                <td>150 MM</td>
                                                                <td>165</td>
                                                            </tr>
                                                            <tr>
                                                                <td>*</td>
                                                                <td>180</td>
                                                            </tr>
                                                            <tr>
                                                                <td>175 MM</td>
                                                                <td>200</td>
                                                            </tr>
                                                            <tr>
                                                                <td>200 MM</td>
                                                                <td>225</td>
                                                            </tr>
                                                            <tr>
                                                                <td>*</td>
                                                                <td>250</td>
                                                            </tr>
                                                            <tr>
                                                                <td>250 MM</td>
                                                                <td>280</td>
                                                            </tr>
                                                            <tr>
                                                                <td>300 MM</td>
                                                                <td>330</td>
                                                            </tr>
                                                            <tr>
                                                                <td>*</td>
                                                                <td>350</td>
                                                            </tr>
                                                            <tr>
                                                                <td>350 MM</td>
                                                                <td>400</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle"> CASING SLOTTED PIPES AS PER IS:12818 (HSN CODE: 391723)</h5>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-bordered table-striped">
                                                        <thead class="thead-dark">
                                                            <tr>
                                                                <th>Normal Dia</th>
                                                                <th>OD (MM)</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>35 MM</td>
                                                                <td>42</td>
                                                            </tr>
                                                            <tr>
                                                                <td>40 MM</td>
                                                                <td>48</td>
                                                            </tr>
                                                            <tr>
                                                                <td>50 MM</td>
                                                                <td>60</td>
                                                            </tr>
                                                            <tr>
                                                                <td>80 MM</td>
                                                                <td>88</td>
                                                            </tr>
                                                            <tr>
                                                                <td>100 MM</td>
                                                                <td>113</td>
                                                            </tr>
                                                            <tr>
                                                                <td>115 MM</td>
                                                                <td>125</td>
                                                            </tr>
                                                            <tr>
                                                                <td>125 MM</td>
                                                                <td>140</td>
                                                            </tr>
                                                            <tr>
                                                                <td>150 MM</td>
                                                                <td>165</td>
                                                            </tr>
                                                            <tr>
                                                                <td>*</td>
                                                                <td>180</td>
                                                            </tr>
                                                            <tr>
                                                                <td>175 MM</td>
                                                                <td>200</td>
                                                            </tr>
                                                            <tr>
                                                                <td>200 MM</td>
                                                                <td>225</td>
                                                            </tr>
                                                            <tr>
                                                                <td>*</td>
                                                                <td>250</td>
                                                            </tr>
                                                            <tr>
                                                                <td>250 MM</td>
                                                                <td>280</td>
                                                            </tr>
                                                            <tr>
                                                                <td>300 MM</td>
                                                                <td>330</td>
                                                            </tr>
                                                            <tr>
                                                                <td>*</td>
                                                                <td>350</td>
                                                            </tr>
                                                            <tr>
                                                                <td>350 MM</td>
                                                                <td>400</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle"> RIBBED SCREEN PIPES AS PER IS:12818 (HSN CODE: 391723)</h5>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-bordered table-striped">
                                                        <thead class="thead-dark">
                                                            <tr>
                                                                <th>Normal Dia</th>
                                                                <th>OD (MM)</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>50 MM</td>
                                                                <td>64</td>
                                                            </tr>
                                                            <tr>
                                                                <td>100 MM</td>
                                                                <td>117</td>
                                                            </tr>
                                                            <tr>
                                                                <td>125 MM</td>
                                                                <td>144</td>
                                                            </tr>
                                                            <tr>
                                                                <td>150 MM</td>
                                                                <td>169</td>
                                                            </tr>
                                                            <tr>
                                                                <td>200 MM</td>
                                                                <td>229</td>
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
                  </div>
         </div>
      </section>
      
      
      <section class="<?php if($id != '8'){echo 'd-none';} ?>">
         <div class="container">
            <div class="col-md-12">
               <ul class="tabul">
                  <li class="clickme"><a href="javascript:void();" data-tag="seven" class="activelink">PIPES</a>
                  </li>
                  <li class="clickme ml-md-5"><a href="javascript:void();" data-tag="eight">FITTINGS</a></li>
               </ul>
               <div style="clear: both;"></div>
               <div id="container">
                  <div class="list mb-5" id="seven" style="max-height: 600px;overflow: scroll;">
                     <div class="row justify-content-center">
                        <div class="col-md-12">
                           <p class="text-center active">SWR PIPES AS PER IS:13592</p>
                        </div>
                        <?php
                           $liQuery = "SELECT * FROM productTabContent WHERE productTab='Pipes' AND productId='$id' ";
                           $liSql = mysqli_query($conn, $liQuery);
                                    $sr = 1000000000;
                                    while($liData=mysqli_fetch_array($liSql)){
                                        $num = $sr++;
                                    ?>    
                                    <div class="col-md-2" data-aos="zoom-in">
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
                                                                <th>Class</th>
                                                                <th class="align-middle">Size Length</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td><?php echo $liData['specInch1']; ?></td>
                                                                <td><?php echo $liData['specMM1']; ?></td>
                                                            </tr>
                                                            <tr <?php if($liData['specInch2']==''){echo"style='display:none'";} ?>>
                                                                <td><?php echo $liData['specInch2']; ?></td>
                                                                <td><?php echo $liData['specMM2']; ?></td>
                                                            </tr>
                                                            <tr <?php if($liData['specInch3']==''){echo"style='display:none'";} ?>>
                                                                <td><?php echo $liData['specInch3']; ?></td>
                                                                <td><?php echo $liData['specMM3']; ?></td>
                                                            </tr>
                                                            <tr <?php if($liData['specInch4']==''){echo"style='display:none'";} ?>>
                                                                <td><?php echo $liData['specInch4']; ?></td>
                                                                <td><?php echo $liData['specMM4']; ?></td>
                                                            </tr>
                                                            <tr <?php if($liData['specInch5']==''){echo"style='display:none'";} ?>>
                                                                <td><?php echo $liData['specInch5']; ?></td>
                                                                <td><?php echo $liData['specMM5']; ?></td>
                                                            </tr>
                                                            <tr <?php if($liData['specInch6']==''){echo"style='display:none'";} ?>>
                                                                <td><?php echo $liData['specInch6']; ?></td>
                                                                <td><?php echo $liData['specMM6']; ?></td>
                                                            </tr>
                                                            <tr <?php if($liData['specInch7']==''){echo"style='display:none'";} ?>>
                                                                <td><?php echo $liData['specInch7']; ?></td>
                                                                <td><?php echo $liData['specMM7']; ?></td>
                                                            </tr>
                                                            <tr <?php if($liData['specInch8']==''){echo"style='display:none'";} ?>>
                                                                <td><?php echo $liData['specInch8']; ?></td>
                                                                <td><?php echo $liData['specMM8']; ?></td>
                                                            </tr>
                                                            <tr <?php if($liData['specInch9']==''){echo"style='display:none'";} ?>>
                                                                <td><?php echo $liData['specInch9']; ?></td>
                                                                <td><?php echo $liData['specMM9']; ?></td>
                                                            </tr>
                                                            <tr <?php if($liData['specInch10']==''){echo"style='display:none'";} ?>>
                                                                <td><?php echo $liData['specInch10']; ?></td>
                                                                <td><?php echo $liData['specMM10']; ?></td>
                                                            </tr>
                                                            <tr <?php if($liData['specInch11']==''){echo"style='display:none'";} ?>>
                                                                <td><?php echo $liData['specInch11']; ?></td>
                                                                <td><?php echo $liData['specMM11']; ?></td>
                                                            </tr>
                                                            <tr <?php if($liData['specInch12']==''){echo"style='display:none'";} ?>>
                                                                <td><?php echo $liData['specInch12']; ?></td>
                                                                <td><?php echo $liData['specMM12']; ?></td>
                                                            </tr>
                                                            <tr <?php if($liData['specInch13']==''){echo"style='display:none'";} ?>>
                                                                <td><?php echo $liData['specInch13']; ?></td>
                                                                <td><?php echo $liData['specMM13']; ?></td>
                                                                
                                                            </tr>
                                                            <tr <?php if($liData['specInch14']==''){echo"style='display:none'";} ?>>
                                                                <td><?php echo $liData['specInch14']; ?></td>
                                                                <td><?php echo $liData['specMM14']; ?></td>
                                                            </tr>
                                                            <tr <?php if($liData['specInch15']==''){echo"style='display:none'";} ?>>
                                                                <td><?php echo $liData['specInch15']; ?></td>
                                                                <td><?php echo $liData['specMM15']; ?></td>
                                                            </tr>
                                                            <tr <?php if($liData['specInch16']==''){echo"style='display:none'";} ?>>
                                                                <td><?php echo $liData['specInch16']; ?></td>
                                                                <td><?php echo $liData['specMM16']; ?></td>
                                                            </tr>
                                                            <tr <?php if($liData['specInch17']==''){echo"style='display:none'";} ?>>
                                                                <td><?php echo $liData['specInch17']; ?></td>
                                                                <td><?php echo $liData['specMM17']; ?></td>
                                                            </tr>
                                                            <tr <?php if($liData['specInch18']==''){echo"style='display:none'";} ?>>
                                                                <td><?php echo $liData['specInch18']; ?></td>
                                                                <td><?php echo $liData['specMM18']; ?></td>
                                                            </tr>
                                                            <tr <?php if($liData['specInch19']==''){echo"style='display:none'";} ?>>
                                                                <td><?php echo $liData['specInch19']; ?></td>
                                                                <td><?php echo $liData['specMM19']; ?></td>
                                                            </tr>
                                                            <tr <?php if($liData['specInch20']==''){echo"style='display:none'";} ?>>
                                                                <td><?php echo $liData['specInch20']; ?></td>
                                                                <td><?php echo $liData['specMM20']; ?></td>
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
                  <div class="list hide mb-5" id="eight" style="max-height: 600px;overflow: scroll;">
                     <div class="row justify-content-center">
                        <div class="col-md-12">
                           <p class="text-center">uPVC SWR FITTINGS SELF FIT (AS PER IS:14735)</p>
                        </div>
                        <?php
                           $liQuery = "SELECT * FROM productTabContent WHERE productTab='Fittings' AND productSubTab='SWR FITTINGS SELF FIT (AS PER IS - 14735)' ";
                           $liSql = mysqli_query($conn, $liQuery);
                                    $sr = 100000000000;
                                    while($liData=mysqli_fetch_array($liSql)){
                                        $num = $sr++;
                                    ?>    
                                    <div class="col-md-2" data-aos="zoom-in">
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
                                                                <th>Size</th>
                                                                <th rowspan="2" class="align-middle">Standard Packaging Quantity</th>
                                                            </tr>
                                                            <tr>
                                                                <th>mm</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td><?php echo $liData['specInch1']; ?></td>
                                                                <td><?php echo $liData['specMM1']; ?></td>
                                                            </tr>
                                                            <tr <?php if($liData['specInch2']==''){echo"style='display:none'";} ?>>
                                                                <td><?php echo $liData['specInch2']; ?></td>
                                                                <td><?php echo $liData['specMM2']; ?></td>
                                                            </tr>
                                                            <tr <?php if($liData['specInch3']==''){echo"style='display:none'";} ?>>
                                                                <td><?php echo $liData['specInch3']; ?></td>
                                                                <td><?php echo $liData['specMM3']; ?></td>
                                                            </tr>
                                                            <tr <?php if($liData['specInch4']==''){echo"style='display:none'";} ?>>
                                                                <td><?php echo $liData['specInch4']; ?></td>
                                                                <td><?php echo $liData['specMM4']; ?></td>
                                                            </tr>
                                                            <tr <?php if($liData['specInch5']==''){echo"style='display:none'";} ?>>
                                                                <td><?php echo $liData['specInch5']; ?></td>
                                                                <td><?php echo $liData['specMM5']; ?></td>
                                                            </tr>
                                                            <tr <?php if($liData['specInch6']==''){echo"style='display:none'";} ?>>
                                                                <td><?php echo $liData['specInch6']; ?></td>
                                                                <td><?php echo $liData['specMM6']; ?></td>
                                                            </tr>
                                                            <tr <?php if($liData['specInch7']==''){echo"style='display:none'";} ?>>
                                                                <td><?php echo $liData['specInch7']; ?></td>
                                                                <td><?php echo $liData['specMM7']; ?></td>
                                                            </tr>
                                                            <tr <?php if($liData['specInch8']==''){echo"style='display:none'";} ?>>
                                                                <td><?php echo $liData['specInch8']; ?></td>
                                                                <td><?php echo $liData['specMM8']; ?></td>
                                                            </tr>
                                                            <tr <?php if($liData['specInch9']==''){echo"style='display:none'";} ?>>
                                                                <td><?php echo $liData['specInch9']; ?></td>
                                                                <td><?php echo $liData['specMM9']; ?></td>
                                                            </tr>
                                                            <tr <?php if($liData['specInch10']==''){echo"style='display:none'";} ?>>
                                                                <td><?php echo $liData['specInch10']; ?></td>
                                                                <td><?php echo $liData['specMM10']; ?></td>
                                                            </tr>
                                                            <tr <?php if($liData['specInch11']==''){echo"style='display:none'";} ?>>
                                                                <td><?php echo $liData['specInch11']; ?></td>
                                                                <td><?php echo $liData['specMM11']; ?></td>
                                                            </tr>
                                                            <tr <?php if($liData['specInch12']==''){echo"style='display:none'";} ?>>
                                                                <td><?php echo $liData['specInch12']; ?></td>
                                                                <td><?php echo $liData['specMM12']; ?></td>
                                                            </tr>
                                                            <tr <?php if($liData['specInch13']==''){echo"style='display:none'";} ?>>
                                                                <td><?php echo $liData['specInch13']; ?></td>
                                                                <td><?php echo $liData['specMM13']; ?></td>
                                                                
                                                            </tr>
                                                            <tr <?php if($liData['specInch14']==''){echo"style='display:none'";} ?>>
                                                                <td><?php echo $liData['specInch14']; ?></td>
                                                                <td><?php echo $liData['specMM14']; ?></td>
                                                            </tr>
                                                            <tr <?php if($liData['specInch15']==''){echo"style='display:none'";} ?>>
                                                                <td><?php echo $liData['specInch15']; ?></td>
                                                                <td><?php echo $liData['specMM15']; ?></td>
                                                            </tr>
                                                            <tr <?php if($liData['specInch16']==''){echo"style='display:none'";} ?>>
                                                                <td><?php echo $liData['specInch16']; ?></td>
                                                                <td><?php echo $liData['specMM16']; ?></td>
                                                            </tr>
                                                            <tr <?php if($liData['specInch17']==''){echo"style='display:none'";} ?>>
                                                                <td><?php echo $liData['specInch17']; ?></td>
                                                                <td><?php echo $liData['specMM17']; ?></td>
                                                            </tr>
                                                            <tr <?php if($liData['specInch18']==''){echo"style='display:none'";} ?>>
                                                                <td><?php echo $liData['specInch18']; ?></td>
                                                                <td><?php echo $liData['specMM18']; ?></td>
                                                            </tr>
                                                            <tr <?php if($liData['specInch19']==''){echo"style='display:none'";} ?>>
                                                                <td><?php echo $liData['specInch19']; ?></td>
                                                                <td><?php echo $liData['specMM19']; ?></td>
                                                            </tr>
                                                            <tr <?php if($liData['specInch20']==''){echo"style='display:none'";} ?>>
                                                                <td><?php echo $liData['specInch20']; ?></td>
                                                                <td><?php echo $liData['specMM20']; ?></td>
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
                     <div class="row justify-content-center">
                        <div class="col-md-12">
                           <p class="text-center">uPVC SWR FITTINGS WITH RINGS (AS PER IS:14735)</p>
                        </div>
                        <?php
                           $liQuery = "SELECT * FROM productTabContent WHERE productTab='Fittings' AND productSubTab='SWR FITTINGS WITH RINGS (AS PER IS - 14735)' ";
                           $liSql = mysqli_query($conn, $liQuery);
                                    $sr = 1000000000000;
                                    while($liData=mysqli_fetch_array($liSql)){
                                        $num = $sr++;
                                    ?>    
                                    <div class="col-md-2" data-aos="zoom-in">
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
                                                                <th>Size</th>
                                                                <th rowspan="2" class="align-middle">Standard Packaging Quantity</th>
                                                            </tr>
                                                            <tr>
                                                                <th>mm</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td><?php echo $liData['specInch1']; ?></td>
                                                                <td><?php echo $liData['specMM1']; ?></td>
                                                            </tr>
                                                            <tr <?php if($liData['specInch2']==''){echo"style='display:none'";} ?>>
                                                                <td><?php echo $liData['specInch2']; ?></td>
                                                                <td><?php echo $liData['specMM2']; ?></td>
                                                            </tr>
                                                            <tr <?php if($liData['specInch3']==''){echo"style='display:none'";} ?>>
                                                                <td><?php echo $liData['specInch3']; ?></td>
                                                                <td><?php echo $liData['specMM3']; ?></td>
                                                            </tr>
                                                            <tr <?php if($liData['specInch4']==''){echo"style='display:none'";} ?>>
                                                                <td><?php echo $liData['specInch4']; ?></td>
                                                                <td><?php echo $liData['specMM4']; ?></td>
                                                            </tr>
                                                            <tr <?php if($liData['specInch5']==''){echo"style='display:none'";} ?>>
                                                                <td><?php echo $liData['specInch5']; ?></td>
                                                                <td><?php echo $liData['specMM5']; ?></td>
                                                            </tr>
                                                            <tr <?php if($liData['specInch6']==''){echo"style='display:none'";} ?>>
                                                                <td><?php echo $liData['specInch6']; ?></td>
                                                                <td><?php echo $liData['specMM6']; ?></td>
                                                            </tr>
                                                            <tr <?php if($liData['specInch7']==''){echo"style='display:none'";} ?>>
                                                                <td><?php echo $liData['specInch7']; ?></td>
                                                                <td><?php echo $liData['specMM7']; ?></td>
                                                            </tr>
                                                            <tr <?php if($liData['specInch8']==''){echo"style='display:none'";} ?>>
                                                                <td><?php echo $liData['specInch8']; ?></td>
                                                                <td><?php echo $liData['specMM8']; ?></td>
                                                            </tr>
                                                            <tr <?php if($liData['specInch9']==''){echo"style='display:none'";} ?>>
                                                                <td><?php echo $liData['specInch9']; ?></td>
                                                                <td><?php echo $liData['specMM9']; ?></td>
                                                            </tr>
                                                            <tr <?php if($liData['specInch10']==''){echo"style='display:none'";} ?>>
                                                                <td><?php echo $liData['specInch10']; ?></td>
                                                                <td><?php echo $liData['specMM10']; ?></td>
                                                            </tr>
                                                            <tr <?php if($liData['specInch11']==''){echo"style='display:none'";} ?>>
                                                                <td><?php echo $liData['specInch11']; ?></td>
                                                                <td><?php echo $liData['specMM11']; ?></td>
                                                            </tr>
                                                            <tr <?php if($liData['specInch12']==''){echo"style='display:none'";} ?>>
                                                                <td><?php echo $liData['specInch12']; ?></td>
                                                                <td><?php echo $liData['specMM12']; ?></td>
                                                            </tr>
                                                            <tr <?php if($liData['specInch13']==''){echo"style='display:none'";} ?>>
                                                                <td><?php echo $liData['specInch13']; ?></td>
                                                                <td><?php echo $liData['specMM13']; ?></td>
                                                                
                                                            </tr>
                                                            <tr <?php if($liData['specInch14']==''){echo"style='display:none'";} ?>>
                                                                <td><?php echo $liData['specInch14']; ?></td>
                                                                <td><?php echo $liData['specMM14']; ?></td>
                                                            </tr>
                                                            <tr <?php if($liData['specInch15']==''){echo"style='display:none'";} ?>>
                                                                <td><?php echo $liData['specInch15']; ?></td>
                                                                <td><?php echo $liData['specMM15']; ?></td>
                                                            </tr>
                                                            <tr <?php if($liData['specInch16']==''){echo"style='display:none'";} ?>>
                                                                <td><?php echo $liData['specInch16']; ?></td>
                                                                <td><?php echo $liData['specMM16']; ?></td>
                                                            </tr>
                                                            <tr <?php if($liData['specInch17']==''){echo"style='display:none'";} ?>>
                                                                <td><?php echo $liData['specInch17']; ?></td>
                                                                <td><?php echo $liData['specMM17']; ?></td>
                                                            </tr>
                                                            <tr <?php if($liData['specInch18']==''){echo"style='display:none'";} ?>>
                                                                <td><?php echo $liData['specInch18']; ?></td>
                                                                <td><?php echo $liData['specMM18']; ?></td>
                                                            </tr>
                                                            <tr <?php if($liData['specInch19']==''){echo"style='display:none'";} ?>>
                                                                <td><?php echo $liData['specInch19']; ?></td>
                                                                <td><?php echo $liData['specMM19']; ?></td>
                                                            </tr>
                                                            <tr <?php if($liData['specInch20']==''){echo"style='display:none'";} ?>>
                                                                <td><?php echo $liData['specInch20']; ?></td>
                                                                <td><?php echo $liData['specMM20']; ?></td>
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
      <section class="<?php if($id != '10'){echo 'd-none';} ?>">
         <div class="container">
            <div class="col-md-12">
               <ul class="tabul">
                  <li class="clickme"><a href="javascript:void();" data-tag="tab13" class="activelink">Cisterns</a></li>
               </ul>
               <div style="clear: both;"></div>
               <div id="container">
                  <div class="list mb-5" id="tab13" style="max-height: 600px;overflow: scroll;">
                     <div class="row justify-content-center">
                        <div class="col-md-12">
                           <p class="text-center active">CREST CISTERN</p>
                        </div>
                        <?php
                           $liQuery = "SELECT * FROM productTabContent WHERE productTab='Cisterns' AND productSubTab='Crest-Cisterns' ";
                           $liSql = mysqli_query($conn, $liQuery);
                                    $sr = 1001209300;
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
                           <p class="text-center active">DRIZZLE CISTERN</p>
                        </div>
                        <?php
                           $liQuery = "SELECT * FROM productTabContent WHERE productTab='Cisterns' AND productSubTab='Drizzle-Cisterns' ";
                           $liSql = mysqli_query($conn, $liQuery);
                                    $sr = 1009000201;
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
                           <p class="text-center active">SPLASH CISTERN</p>
                        </div>
                        <?php
                           $liQuery = "SELECT * FROM productTabContent WHERE productTab='Cisterns' AND productSubTab='Splash-Cisterns' ";
                           $liSql = mysqli_query($conn, $liQuery);
                                    $sr = 10073958;
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
                           <p class="text-center active">WAVE CISTERN</p>
                        </div>
                        <?php
                           $liQuery = "SELECT * FROM productTabContent WHERE productTab='Cisterns' AND productSubTab='Wave-Cisterns' ";
                           $liSql = mysqli_query($conn, $liQuery);
                                    $sr = 100083074;
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
      <section class="<?php if($id != '11'){echo 'd-none';} ?>">
         <div class="container">
            <div class="col-md-12">
               <ul class="tabul">
                  <li class="clickme"><a href="javascript:void();" data-tag="tab16" class="activelink">Bright Series</a></li>
                  <li class="clickme ml-md-5"><a href="javascript:void();" data-tag="tab17">Charcoal SERIES</a></li>
                  <li class="clickme ml-md-5"><a href="javascript:void();" data-tag="tab18">Crystal Series</a></li>
               </ul>
               <div style="clear: both;"></div>
               <div id="container">
                  <div class="list mb-5" id="tab16" style="max-height: 600px;overflow: scroll;">
                     <div class="row justify-content-center">
                        <div class="col-md-12">
                           <p class="text-center text-uppercase active">Bright Series</p>
                        </div>
                        <?php
                           $liQuery = "SELECT * FROM productTabContent WHERE productTab='BA Bright Series' ";
                           $liSql = mysqli_query($conn, $liQuery);
                                    $sr = 100890183;
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
                  <div class="list hide mb-5" id="tab17" style="max-height: 600px;overflow: scroll;">
                     <div class="row justify-content-center">
                        <div class="col-md-12">
                           <p class="text-center text-uppercase">Charcoal Series</p>
                        </div>
                        <?php
                           $liQuery = "SELECT * FROM productTabContent WHERE productTab='BA Charcoal S' ";
                           $liSql = mysqli_query($conn, $liQuery);
                                    $sr = 100949488;
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
                  <div class="list hide mb-5" id="tab18" style="max-height: 600px;overflow: scroll;">
                     <div class="row justify-content-center">
                        <div class="col-md-12">
                           <p class="text-center text-uppercase active">Crystal Series</p>
                        </div>
                        <?php
                           $liQuery = "SELECT * FROM productTabContent WHERE productTab='BA Crystal Series' ";
                           $liSql = mysqli_query($conn, $liQuery);
                                    $sr = 100948751;
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
      <section class="<?php if($id != '13'){echo 'd-none';} ?>">
         <div class="container">
            <div class="col-md-12">
               <ul class="tabul">
                  <li class="clickme"><a href="javascript:void();" data-tag="tab22" class="activelink">Classic</a></li>
                  <li class="clickme ml-md-5"><a href="javascript:void();" data-tag="tab23">Edge</a></li>
               </ul>
               <div style="clear: both;"></div>
               <div id="container">
                  <div class="list mb-5" id="tab22" style="max-height: 600px;overflow: scroll;">
                     <div class="row justify-content-center">
                        <div class="col-md-12">
                           <p class="text-center text-uppercase active">CLASSIC SERIES KITCHEN SINKS</p>
                        </div>
                        <?php
                           $liQuery = "SELECT * FROM productTabContent WHERE productTab='Classic Kitchen Sink' ";
                           $liSql = mysqli_query($conn, $liQuery);
                                    $sr = 10003829018;
                                    while($liData=mysqli_fetch_array($liSql)){
                                        $num = $sr++;
                                    ?>    
                                    <div class="col-md-2" data-aos="zoom-in">
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
                                                                <th>Item Code</th>
                                                                <th>Size</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td><?php echo $liData['specInch1']; ?></td>
                                                                <td><?php echo $liData['specMM1'].'"'; ?></td>
                                                            </tr>
                                                            <tr <?php if($liData['specInch2']==''){echo"style='display:none'";} ?>>
                                                                <td><?php echo $liData['specInch2']; ?></td>
                                                                <td><?php echo $liData['specMM2'].'"'; ?></td>
                                                            </tr>
                                                            <tr <?php if($liData['specInch3']==''){echo"style='display:none'";} ?>>
                                                                <td><?php echo $liData['specInch3']; ?></td>
                                                                <td><?php echo $liData['specMM3'].'"'; ?></td>
                                                            </tr>
                                                            <tr <?php if($liData['specInch4']==''){echo"style='display:none'";} ?>>
                                                                <td><?php echo $liData['specInch4']; ?></td>
                                                                <td><?php echo $liData['specMM4'].'"'; ?></td>
                                                            </tr>
                                                            <tr <?php if($liData['specInch5']==''){echo"style='display:none'";} ?>>
                                                                <td><?php echo $liData['specInch5']; ?></td>
                                                                <td><?php echo $liData['specMM5'].'"'; ?></td>
                                                            </tr>
                                                            <tr <?php if($liData['specInch6']==''){echo"style='display:none'";} ?>>
                                                                <td><?php echo $liData['specInch6']; ?></td>
                                                                <td><?php echo $liData['specMM6'].'"'; ?></td>
                                                            </tr>
                                                            <tr <?php if($liData['specInch7']==''){echo"style='display:none'";} ?>>
                                                                <td><?php echo $liData['specInch7'].'"'; ?></td>
                                                                <td><?php echo $liData['specMM7']; ?></td>
                                                            </tr>
                                                            <tr <?php if($liData['specInch8']==''){echo"style='display:none'";} ?>>
                                                                <td><?php echo $liData['specInch8'].'"'; ?></td>
                                                                <td><?php echo $liData['specMM8']; ?></td>
                                                            </tr>
                                                            <tr <?php if($liData['specInch9']==''){echo"style='display:none'";} ?>>
                                                                <td><?php echo $liData['specInch9'].'"'; ?></td>
                                                                <td><?php echo $liData['specMM9']; ?></td>
                                                            </tr>
                                                            <tr <?php if($liData['specInch10']==''){echo"style='display:none'";} ?>>
                                                                <td><?php echo $liData['specInch10'].'"'; ?></td>
                                                                <td><?php echo $liData['specMM10']; ?></td>
                                                            </tr>
                                                            <tr <?php if($liData['specInch11']==''){echo"style='display:none'";} ?>>
                                                                <td><?php echo $liData['specInch11'].'"'; ?></td>
                                                                <td><?php echo $liData['specMM11']; ?></td>
                                                            </tr>
                                                            <tr <?php if($liData['specInch12']==''){echo"style='display:none'";} ?>>
                                                                <td><?php echo $liData['specInch12'].'"'; ?></td>
                                                                <td><?php echo $liData['specMM12']; ?></td>
                                                            </tr>
                                                            <tr <?php if($liData['specInch13']==''){echo"style='display:none'";} ?>>
                                                                <td><?php echo $liData['specInch13'].'"'; ?></td>
                                                                <td><?php echo $liData['specMM13']; ?></td>
                                                                
                                                            </tr>
                                                            <tr <?php if($liData['specInch14']==''){echo"style='display:none'";} ?>>
                                                                <td><?php echo $liData['specInch14'].'"'; ?></td>
                                                                <td><?php echo $liData['specMM14']; ?></td>
                                                            </tr>
                                                            <tr <?php if($liData['specInch15']==''){echo"style='display:none'";} ?>>
                                                                <td><?php echo $liData['specInch15'].'"'; ?></td>
                                                                <td><?php echo $liData['specMM15']; ?></td>
                                                            </tr>
                                                            <tr <?php if($liData['specInch16']==''){echo"style='display:none'";} ?>>
                                                                <td><?php echo $liData['specInch16'].'"'; ?></td>
                                                                <td><?php echo $liData['specMM16']; ?></td>
                                                            </tr>
                                                            <tr <?php if($liData['specInch17']==''){echo"style='display:none'";} ?>>
                                                                <td><?php echo $liData['specInch17'].'"'; ?></td>
                                                                <td><?php echo $liData['specMM17']; ?></td>
                                                            </tr>
                                                            <tr <?php if($liData['specInch18']==''){echo"style='display:none'";} ?>>
                                                                <td><?php echo $liData['specInch18'].'"'; ?></td>
                                                                <td><?php echo $liData['specMM18']; ?></td>
                                                            </tr>
                                                            <tr <?php if($liData['specInch19']==''){echo"style='display:none'";} ?>>
                                                                <td><?php echo $liData['specInch19'].'"'; ?></td>
                                                                <td><?php echo $liData['specMM19']; ?></td>
                                                            </tr>
                                                            <tr <?php if($liData['specInch20']==''){echo"style='display:none'";} ?>>
                                                                <td><?php echo $liData['specInch20'].'"'; ?></td>
                                                                <td><?php echo $liData['specMM20']; ?></td>
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
                  <div class="list hide mb-5" id="tab23" style="max-height: 600px;overflow: scroll;">
                     <div class="row justify-content-center">
                        <div class="col-md-12">
                           <p class="text-center text-uppercase">Edge SERIES Kitchen Sink</p>
                        </div>
                        <?php
                           $liQuery = "SELECT * FROM productTabContent WHERE productTab='Edge Kitchen Sink' ";
                           $liSql = mysqli_query($conn, $liQuery);
                                    $sr = 10012402823788;
                                    while($liData=mysqli_fetch_array($liSql)){
                                        $num = $sr++;
                                    ?>    
                                    <div class="col-md-2" data-aos="zoom-in">
                                        <div class="overlay-container" style="background-image: url('sadmin/product-images/<?php echo $liData['productImg']; ?>')">
                                            <div class="overlay-button"><a href="#" class="btn btn-info" data-toggle="modal" data-target="#<?php echo 'product'.$num; ?>">Know More</a></div>
                                        </div>
                                        <p class="overlay-caption"><?php echo $liData['productName']; ?></p>
                                    </div>
                                    
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
                                                                <th>Item Code</th>
                                                                <th>Size</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td><?php echo $liData['specInch1']; ?></td>
                                                                <td><?php echo $liData['specMM1'].'"'; ?></td>
                                                            </tr>
                                                            <tr <?php if($liData['specInch2']==''){echo"style='display:none'";} ?>>
                                                                <td><?php echo $liData['specInch2']; ?></td>
                                                                <td><?php echo $liData['specMM2'].'"'; ?></td>
                                                            </tr>
                                                            <tr <?php if($liData['specInch3']==''){echo"style='display:none'";} ?>>
                                                                <td><?php echo $liData['specInch3']; ?></td>
                                                                <td><?php echo $liData['specMM3'].'"'; ?></td>
                                                            </tr>
                                                            <tr <?php if($liData['specInch4']==''){echo"style='display:none'";} ?>>
                                                                <td><?php echo $liData['specInch4']; ?></td>
                                                                <td><?php echo $liData['specMM4'].'"'; ?></td>
                                                            </tr>
                                                            <tr <?php if($liData['specInch5']==''){echo"style='display:none'";} ?>>
                                                                <td><?php echo $liData['specInch5']; ?></td>
                                                                <td><?php echo $liData['specMM5'].'"'; ?></td>
                                                            </tr>
                                                            <tr <?php if($liData['specInch6']==''){echo"style='display:none'";} ?>>
                                                                <td><?php echo $liData['specInch6']; ?></td>
                                                                <td><?php echo $liData['specMM6'].'"'; ?></td>
                                                            </tr>
                                                            <tr <?php if($liData['specInch7']==''){echo"style='display:none'";} ?>>
                                                                <td><?php echo $liData['specInch7'].'"'; ?></td>
                                                                <td><?php echo $liData['specMM7']; ?></td>
                                                            </tr>
                                                            <tr <?php if($liData['specInch8']==''){echo"style='display:none'";} ?>>
                                                                <td><?php echo $liData['specInch8'].'"'; ?></td>
                                                                <td><?php echo $liData['specMM8']; ?></td>
                                                            </tr>
                                                            <tr <?php if($liData['specInch9']==''){echo"style='display:none'";} ?>>
                                                                <td><?php echo $liData['specInch9'].'"'; ?></td>
                                                                <td><?php echo $liData['specMM9']; ?></td>
                                                            </tr>
                                                            <tr <?php if($liData['specInch10']==''){echo"style='display:none'";} ?>>
                                                                <td><?php echo $liData['specInch10'].'"'; ?></td>
                                                                <td><?php echo $liData['specMM10']; ?></td>
                                                            </tr>
                                                            <tr <?php if($liData['specInch11']==''){echo"style='display:none'";} ?>>
                                                                <td><?php echo $liData['specInch11'].'"'; ?></td>
                                                                <td><?php echo $liData['specMM11']; ?></td>
                                                            </tr>
                                                            <tr <?php if($liData['specInch12']==''){echo"style='display:none'";} ?>>
                                                                <td><?php echo $liData['specInch12'].'"'; ?></td>
                                                                <td><?php echo $liData['specMM12']; ?></td>
                                                            </tr>
                                                            <tr <?php if($liData['specInch13']==''){echo"style='display:none'";} ?>>
                                                                <td><?php echo $liData['specInch13'].'"'; ?></td>
                                                                <td><?php echo $liData['specMM13']; ?></td>
                                                                
                                                            </tr>
                                                            <tr <?php if($liData['specInch14']==''){echo"style='display:none'";} ?>>
                                                                <td><?php echo $liData['specInch14'].'"'; ?></td>
                                                                <td><?php echo $liData['specMM14']; ?></td>
                                                            </tr>
                                                            <tr <?php if($liData['specInch15']==''){echo"style='display:none'";} ?>>
                                                                <td><?php echo $liData['specInch15'].'"'; ?></td>
                                                                <td><?php echo $liData['specMM15']; ?></td>
                                                            </tr>
                                                            <tr <?php if($liData['specInch16']==''){echo"style='display:none'";} ?>>
                                                                <td><?php echo $liData['specInch16'].'"'; ?></td>
                                                                <td><?php echo $liData['specMM16']; ?></td>
                                                            </tr>
                                                            <tr <?php if($liData['specInch17']==''){echo"style='display:none'";} ?>>
                                                                <td><?php echo $liData['specInch17'].'"'; ?></td>
                                                                <td><?php echo $liData['specMM17']; ?></td>
                                                            </tr>
                                                            <tr <?php if($liData['specInch18']==''){echo"style='display:none'";} ?>>
                                                                <td><?php echo $liData['specInch18'].'"'; ?></td>
                                                                <td><?php echo $liData['specMM18']; ?></td>
                                                            </tr>
                                                            <tr <?php if($liData['specInch19']==''){echo"style='display:none'";} ?>>
                                                                <td><?php echo $liData['specInch19'].'"'; ?></td>
                                                                <td><?php echo $liData['specMM19']; ?></td>
                                                            </tr>
                                                            <tr <?php if($liData['specInch20']==''){echo"style='display:none'";} ?>>
                                                                <td><?php echo $liData['specInch20'].'"'; ?></td>
                                                                <td><?php echo $liData['specMM20']; ?></td>
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
      
      <section class="<?php if($id != '18'){echo 'd-none';} ?>">
         <div class="container">
            <div class="col-md-12">
               <div style="clear: both;"></div>
               <div id="container">
                  <div class="list mb-5" id="tab9" style="max-height: 600px;overflow: scroll;">
                     <div class="row justify-content-center">
                        <div class="col-md-12">
                           <p class="text-center active">SOLVENT CEMENT</p>
                        </div> 
                                     <div class="col-md-2">
                                        <div class="overlay-container" style="background-image: url('img/solvent-cement-1.jpg')">
                                            <div class="overlay-button"><a href="#" class="btn btn-info" data-toggle="modal" data-target="#SolventCement1">Know More</a></div>
                                            
                                        </div>
                                        <p class="overlay-caption">CPVC SOLVENT CEMENT - TIN</p>
                                    </div> 
                                    <div class="col-md-2">
                                        <div class="overlay-container" style="background-image: url('img/solvent-cement-2.jpg')">
                                            <div class="overlay-button"><a href="#" class="btn btn-info" data-toggle="modal" data-target="#SolventCement2">Know More</a></div>
                                            
                                        </div>
                                        <p class="overlay-caption"><span class="text-lowercase">u</span>PVC SOLVENT CEMENT - TIN</p>
                                    </div> 
                                    <div class="col-md-2">
                                        <div class="overlay-container" style="background-image: url('img/solvent-cement-3.jpg')">
                                            <div class="overlay-button"><a href="#" class="btn btn-info" data-toggle="modal" data-target="#SolventCement3">Know More</a></div>
                                            
                                        </div>
                                        <p class="overlay-caption">PVC SOLVENT CEMENT - TIN</p>
                                    </div> 
                                    <div class="col-md-2">
                                        <div class="overlay-container" style="background-image: url('img/solvent-cement-4.jpg')">
                                            <div class="overlay-button"><a href="#" class="btn btn-info" data-toggle="modal" data-target="#SolventCement4">Know More</a></div>
                                            
                                        </div>
                                        <p class="overlay-caption">PVC SOLVENT CEMENT -PLASTIC BOTTLE</p>
                                    </div> 
                                    
                                    <div class="modal fade" id="SolventCement1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle"> CPVC SOLVENT CEMENT - TIN</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-3">
                        <img src="img/solvent-cement-1.jpg" width="100%"/>
                    </div>
                    <div class="col-md-9">
                        <table class="table table-bordered table-striped">
                            <thead class="thead-dark">
                                <tr>
                                    <th>QTY.</th>
                                    <th>Standard Packaging Quantity</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>25 ml in Tube</td>
                                    <td>600</td>
                                </tr>
                                <tr>
                                    <td>59 ml Tin</td>
                                    <td>288</td>
                                </tr>
                                <tr>
                                    <td>118 ml Tin</td>
                                    <td>144</td>
                                </tr>
                                <tr>
                                    <td>237 ml Tin</td>
                                    <td>96</td>
                                </tr>
                                <tr>
                                    <td>473 ml Tin</td>
                                    <td>12</td>
                                </tr>
                                <tr>
                                    <td>946 ml Tin</td>
                                    <td>6</td>
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

<div class="modal fade" id="SolventCement2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle"> <span class="text-lowercase">u</span>PVC SOLVENT CEMENT - TIN</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-3">
                        <img src="img/solvent-cement-2.jpg" width="100%"/>
                    </div>
                    <div class="col-md-9">
                        <table class="table table-bordered table-striped">
                            <thead class="thead-dark">
                                <tr>
                                    <th>QTY.</th>
                                    <th>Standard Packaging Quantity</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>25 ml in Tube</td>
                                    <td>600</td>
                                </tr>
                                <tr>
                                    <td>59 ml Tin</td>
                                    <td>288</td>
                                </tr>
                                <tr>
                                    <td>118 ml Tin</td>
                                    <td>144</td>
                                </tr>
                                <tr>
                                    <td>237 ml Tin</td>
                                    <td>96</td>
                                </tr>
                                <tr>
                                    <td>473 ml Tin</td>
                                    <td>12</td>
                                </tr>
                                <tr>
                                    <td>946 ml Tin</td>
                                    <td>24</td>
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
          
          <div class="modal fade" id="SolventCement3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle"> PVC SOLVENT CEMENT - TIN</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-3">
                        <img src="img/solvent-cement-3.jpg" width="100%"/>
                    </div>
                    <div class="col-md-9">
                        <table class="table table-bordered table-striped">
                            <thead class="thead-dark">
                                <tr>
                                    <th>QTY.</th>
                                    <th>Standard Packaging Quantity</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>25 ml in Tube</td>
                                    <td>600</td>
                                </tr>
                                <tr>
                                    <td>50 ml Tin</td>
                                    <td>300</td>
                                </tr>
                                <tr>
                                    <td>100 ml Tin</td>
                                    <td>192</td>
                                </tr>
                                <tr>
                                    <td>250 ml Tin</td>
                                    <td>96</td>
                                </tr>
                                <tr>
                                    <td>500 ml Tin</td>
                                    <td>40</td>
                                </tr>
                                <tr>
                                    <td>1000 ml Tin</td>
                                    <td>24</td>
                                </tr>
                                <tr>
                                    <td>5000 ml Tin</td>
                                    <td>1</td>
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

<div class="modal fade" id="SolventCement4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">PVC SOLVENT CEMENT - PLASTIC BOTTLE</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-3">
                        <img src="img/solvent-cement-4.jpg" width="100%"/>
                    </div>
                    <div class="col-md-9">
                        <table class="table table-bordered table-striped">
                            <thead class="thead-dark">
                                <tr>
                                    <th>QTY.</th>
                                    <th>Standard Packaging Quantity</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>100 ml</td>
                                    <td>200</td>
                                </tr>
                                <tr>
                                    <td>250 ml</td>
                                    <td>160</td>
                                </tr>
                                <tr>
                                    <td>500 ml</td>
                                    <td>40</td>
                                </tr>
                                <tr>
                                    <td>1000 ml</td>
                                    <td>20</td>
                                </tr>
                                <tr>
                                    <td>5000 ml</td>
                                    <td>1</td>
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
                  
               </div>
            </div>
         </div>
      </section>
      
      
      <section class="<?php if($id != '20'){echo 'd-none';} ?>">
         <div class="container">
            <div class="col-md-12">
               <ul class="tabul">
                  <li class="clickme"><a href="javascript:void();" data-tag="tab24" class="activelink">Hand Shower</a></li>
                  <li class="clickme ml-md-5"><a href="javascript:void();" data-tag="tab25">Head Shower</a></li>
               </ul>
               <div style="clear: both;"></div>
               <div id="container">
                  <div class="list mb-5 active" id="tab24" style="max-height: 600px;overflow: scroll;">
                     <div class="row justify-content-center">
                        <div class="col-md-12">
                           <p class="text-center">CAP - HAND SHOWER</p>
                        </div>
                        <?php
                           $liQuery = "SELECT * FROM productTabContent WHERE productTab='Hand Shower' AND productSubTab='Cap-Hand Shower' ";
                           $liSql = mysqli_query($conn, $liQuery);
                                    $sr = 10390399239;
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
                           <p class="text-center">CLASSIC - HAND SHOWER</p>
                        </div>
                        <?php
                           $liQuery = "SELECT * FROM productTabContent WHERE productTab='Hand Shower' AND productSubTab='Classic-Hand Shower' ";
                           $liSql = mysqli_query($conn, $liQuery);
                                    $sr = 1010383190;
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
                  <div class="list hide mb-5" id="tab25" style="max-height: 600px;overflow: scroll;">
                     <div class="row justify-content-center">
                        <div class="col-md-12">
                           <p class="text-center active">ALEX - HEAD SHOWER</p>
                        </div>
                        <?php
                           $liQuery = "SELECT * FROM productTabContent WHERE productTab='Head Shower' AND productSubTab='Alex-Head Shower' ";
                           $liSql = mysqli_query($conn, $liQuery);
                                    $sr = 10001000388;
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
                           <p class="text-center active">ALPHA - HEAD SHOWER</p>
                        </div>
                        <?php
                           $liQuery = "SELECT * FROM productTabContent WHERE productTab='Head Shower' AND productSubTab='Alpha-Head Shower' ";
                           $liSql = mysqli_query($conn, $liQuery);
                                    $sr = 20012893892;
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
                           <p class="text-center active">CAPERI - HEAD SHOWER</p>
                        </div>
                        <?php
                           $liQuery = "SELECT * FROM productTabContent WHERE productTab='Head Shower' AND productSubTab='Caperi-Head Shower' ";
                           $liSql = mysqli_query($conn, $liQuery);
                                    $sr = 100930948320;
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
                           <p class="text-center active">CODE - HEAD SHOWER</p>
                        </div>
                        <?php
                           $liQuery = "SELECT * FROM productTabContent WHERE productTab='Head Shower' AND productSubTab='Code-Head Shower' ";
                           $liSql = mysqli_query($conn, $liQuery);
                                    $sr = 109404930;
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
                           <p class="text-center active">EDEN - HEAD SHOWER</p>
                        </div>
                        <?php
                           $liQuery = "SELECT * FROM productTabContent WHERE productTab='Head Shower' AND productSubTab='Eden-Head Shower' ";
                           $liSql = mysqli_query($conn, $liQuery);
                                    $sr = 109201094;
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
                           <!--<p class="text-center active">EDOO - HEAD SHOWER</p>-->
                        </div>
                        <?php
                           $liQuery = "SELECT * FROM productTabContent WHERE productTab='Head Shower' AND productSubTab='Edoo-Head Shower' ";
                           $liSql = mysqli_query($conn, $liQuery);
                                    $sr = 1001084898;
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
                           <p class="text-center active">ELDO - HEAD SHOWER</p>
                        </div>
                        <?php
                           $liQuery = "SELECT * FROM productTabContent WHERE productTab='Head Shower' AND productSubTab='Eldo-Head Shower' ";
                           $liSql = mysqli_query($conn, $liQuery);
                                    $sr = 2009548981;
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
                           <p class="text-center active">ROCH - HEAD SHOWER</p>
                        </div>
                        <?php
                           $liQuery = "SELECT * FROM productTabContent WHERE productTab='Head Shower' AND productSubTab='Roch-Head Shower' ";
                           $liSql = mysqli_query($conn, $liQuery);
                                    $sr = 20020391101;
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
      <section class="<?php if($id != '21'){echo 'd-none';} ?>">
         <div class="container">
            <div class="col-md-12">
               <ul class="tabul">
                  <li class="clickme"><a href="javascript:void();" data-tag="tab24" class="activelink">Health Faucets</a></li>
               </ul>
               <div style="clear: both;"></div>
               <div id="container">
                  <div class="list mb-5 active" id="tab24" style="max-height: 600px;overflow: scroll;">
                     <div class="row justify-content-center">
                        <div class="col-md-12">
                           <p class="text-center">HEALTH FAUCETS ALFA</p>
                        </div>
                        <?php
                           
                           $liQuery = "SELECT * FROM productTabContent WHERE productTab='Health Faucets' AND productSubTab='Alpha-Health Faucets' ";
                           $liSql = mysqli_query($conn, $liQuery);
                                    $sr = 41094019;
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
                           <p class="text-center">HEALTH FAUCETS ALFA PLUS</p>
                        </div>
                        <?php
                           $liQuery = "SELECT * FROM productTabContent WHERE productTab='Health Faucets' AND productSubTab='Alpha Plus-Health Faucets' ";
                           $liSql = mysqli_query($conn, $liQuery);
                                    $sr = 23403001;
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
                           <p class="text-center">HEALTH FAUCETS FAB</p>
                        </div>
                        <?php
                           $liQuery = "SELECT * FROM productTabContent WHERE productTab='Health Faucets' AND productSubTab='Fab-Health Faucets' ";
                           $liSql = mysqli_query($conn, $liQuery);
                                    $sr = 2094039309109;
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
                           <p class="text-center text-uppercase text-uppercase">Health Faucets Nor</p>
                        </div>
                        <?php
                           $liQuery = "SELECT * FROM productTabContent WHERE productTab='Health Faucets' AND productSubTab='Nor-Health Faucets' ";
                           $liSql = mysqli_query($conn, $liQuery);
                                    $sr = 39483948918;
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
                           <p class="text-center text-uppercase">Health Faucets Pame</p>
                        </div>
                        <?php
                           $liQuery = "SELECT * FROM productTabContent WHERE productTab='Health Faucets' AND productSubTab='Pame-Health Faucets' ";
                           $liSql = mysqli_query($conn, $liQuery);
                                    $sr = 10930290;
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
                           <p class="text-center text-uppercase">Health Faucets Prime</p>
                        </div>
                        <?php
                           $liQuery = "SELECT * FROM productTabContent WHERE productTab='Health Faucets' AND productSubTab='Prime-Health Faucets' ";
                           $liSql = mysqli_query($conn, $liQuery);
                                    $sr = 100187481;
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
      <section class="<?php if($id != '22'){echo 'd-none';} ?>">
         <div class="container">
            <div class="col-md-12">
               <ul class="tabul">
                  <li class="clickme ml-md-5"><a href="javascript:void();" data-tag="tab15" class="activelink">Seat Covers</a></li>
                  <li class="clickme ml-md-5"><a href="javascript:void();" data-tag="tab14">Jet Sprays</a></li>
               </ul>
               <div style="clear: both;"></div>
               <div id="container">
                  <div class="list mb-5" id="tab15" style="max-height: 600px;overflow: scroll;">
                     <div class="row justify-content-center">
                        <div class="col-md-12">
                           <p class="text-center text-uppercase active">EWC Seat Covers</p>
                        </div>
                        <?php
                           $liQuery = "SELECT * FROM productTabContent WHERE productTab='Seat Covers' AND productSubTab='EWC-Seat Covers' ";
                           $liSql = mysqli_query($conn, $liQuery);
                                    $sr = 4000128493;
                                    while($liData=mysqli_fetch_array($liSql)){
                                        $num = $sr++;
                                    ?>    
                                    <div class="col-md-2">
                                        <div class="overlay-container" style="background-image: url('sadmin/product-images/<?php echo $liData['productImg']; ?>')">
                                        </div>
                                        <p class="overlay-caption"><?php echo $liData['productName']; ?></p>
                                    </div>
                                    <!-- Modal -->
                                    <div class="modal fade" id="<?php echo 'product'.$num; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                    </div>
                                    <?php
                                    }
                                ?>   
                     </div>
                     <div class="row justify-content-center">
                        <div class="col-md-12">
                           <p class="text-center text-uppercase active">Soft Close Seat Covers</p>
                        </div>
                        <?php
                           $liQuery = "SELECT * FROM productTabContent WHERE productTab='Seat Covers' AND productSubTab='Soft Close-Seat Covers' ";
                           $liSql = mysqli_query($conn, $liQuery);
                                    $sr = 12101891;
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
                  <div class="list hide mb-5" id="tab14" style="max-height: 600px;overflow: scroll;">
                     <div class="row justify-content-center">
                        <div class="col-md-12">
                           <p class="text-center text-uppercase">Multi Jet Sprays</p>
                        </div>
                        <?php
                           $liQuery = "SELECT * FROM productTabContent WHERE productTab='Jet Sprays' AND productSubTab='Multi Jet Sprays' ";
                           $liSql = mysqli_query($conn, $liQuery);
                                    $sr = 100121891;
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
                           <p class="text-center text-uppercase">Straight Jet Sprays</p>
                        </div>
                        <?php
                           $liQuery = "SELECT * FROM productTabContent WHERE productTab='Jet Sprays' AND productSubTab='Straight Jet Sprays' ";
                           $liSql = mysqli_query($conn, $liQuery);
                                    $sr = 121010211;
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
                           <p class="text-center text-uppercase">Uni Jet Sprays</p>
                        </div>
                        <?php
                           $liQuery = "SELECT * FROM productTabContent WHERE productTab='Jet Sprays' AND productSubTab='Uni Jet Sprays' ";
                           $liSql = mysqli_query($conn, $liQuery);
                                    $sr = 10012001211;
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
                           <p class="text-center text-uppercase">PTMT JET SPRAYS</p>
                        </div>
                        <?php
                           $liQuery = "SELECT * FROM productTabContent WHERE productTab='Jet Sprays' AND productSubTab='PMT Jet Spray' ";
                           $liSql = mysqli_query($conn, $liQuery);
                                    $sr = 102101011011;
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
      <?php include('footer.php'); ?>
      <script>
         $('#bologna-list a').on('click', function (e) {
         e.preventDefault()
         $(this).tab('show')
         })
      </script>
   </body>
</html>