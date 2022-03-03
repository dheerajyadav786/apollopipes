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
               <h1 class="intro mb-2" data-aos="fade-up">Introduction</h1>
               <p class="intro-p">APL Apollo CPVC Plumbing System Pipes are manufactured as per the standards given below:</p>
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
                  <a href="sadmin/product-catalogue/<?php echo $data['catalogueFile']; ?>" target="_blank"><button class="download-catalog">Download catalog</button></a>
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
                                    <p class="text-center active">cPVC PIPES, for specification <a href="#" target="_blank">click here</a></p>
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
                                    <p class="text-center">cPVC FITTINGS IN SCH 40 AS PER ASTM F- 438, for specification <a href="#" target="_blank">click here</a></p>
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
                                    <p class="text-center">cPVC FITTINGS IN SDR 11 AS PER ASTM D-2846, for specification <a href="#" target="_blank">click here</a></p>
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
                           <p class="text-center active">uPVC Pipes, for specification <a href="#" target="_blank">click here</a></p>
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
                     </div>
                  </div>
                  <div class="list hide mb-5" id="four" style="max-height: 600px;overflow: scroll;">
                     <div class="row justify-content-center">
                        <div class="col-md-12">
                           <p class="text-center">uPVC PLUMBING FITTINGS IN SCH 40 AS PER ASTM D- 2466, for specification <a href="#" target="_blank">click here</a></p>
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
                           <p class="text-center">uPVC PLUMBING FITTINGS IN SCH-80 AS PER ASTM D-2467, for specification <a href="#" target="_blank">click here</a></p>
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
                           <p class="text-center active">uPVC PRESSURE PIPES, for specification <a href="#" target="_blank">click here</a></p>
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
                  <div class="list hide mb-5" id="six" style="max-height: 600px;overflow: scroll;">
                     <div class="row justify-content-center">
                        <div class="col-md-12">
                           <p class="text-center">uPVC Pressure fittings as per IS - 7834, for specification <a href="#" target="_blank">click here</a></p>
                        </div>
                        <?php
                           $liQuery = "SELECT * FROM productTabContent WHERE productTab='Fittings' AND productSubTab='PRESSURE FITTINGS AS PER IS - 7834' ";
                           $liSql = mysqli_query($conn, $liQuery);
                                    $sr = 100000000;
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
                           <p class="text-center active">SWR pipes as per IS:13592, for specification <a href="#" target="_blank">click here</a></p>
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
                  <div class="list hide mb-5" id="eight" style="max-height: 600px;overflow: scroll;">
                     <div class="row justify-content-center">
                        <div class="col-md-12">
                           <p class="text-center">uPVC SWR AGRICULTURE FITTINGS (AS PER IS-7834), for specification <a href="#" target="_blank">click here</a></p>
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
                           <p class="text-center">uPVC SWR FITTINGS SELF FIT (AS PER IS-14735), for specification <a href="#" target="_blank">click here</a></p>
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
                           <p class="text-center">uPVC SWR FITTINGS WITH RINGS (AS PER IS-14735), for specification <a href="#" target="_blank">click here</a></p>
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
                           <p class="text-center active">Bloom Series, for specification <a href="#" target="_blank">click here</a></p>
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
                           <p class="text-center active">Extreme Series, for specification <a href="#" target="_blank">click here</a></p>
                        </div>
                        <?php
                           $liQuery = "SELECT * FROM productTabContent WHERE productTab='Faucets' AND productSubTab='Faucets Extreme' ";
                           $liSql = mysqli_query($conn, $liQuery);
                                    $sr = 100000000000000;
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
                     <div class="row justify-content-center">
                        <div class="col-md-12">
                           <p class="text-center active"> Classic Series, for specification <a href="#" target="_blank">click here</a></p>
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
                           <p class="text-center active">Continental Series, for specification <a href="#" target="_blank">click here</a></p>
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
                           <p class="text-center active">Coral Series, for specification <a href="#" target="_blank">click here</a></p>
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
                           <p class="text-center active">Cornet Series, for specification <a href="#" target="_blank">click here</a></p>
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
                           <p class="text-center active">Edge Series, for specification <a href="#" target="_blank">click here</a></p>
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
                           <p class="text-center active">Fusion Series, for specification <a href="#" target="_blank">click here</a></p>
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
                           <p class="text-center active">Quadro Series, for specification <a href="#" target="_blank">click here</a></p>
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
                           <p class="text-center active">Royal Series, for specification <a href="#" target="_blank">click here</a></p>
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
                           <p class="text-center active">Spark Series, for specification <a href="#" target="_blank">click here</a></p>
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
                           <p class="text-center active">Venus Series, for specification <a href="#" target="_blank">click here</a></p>
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
                           <p class="text-center active">Crest Cistern, for specification <a href="#" target="_blank">click here</a></p>
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
                           <p class="text-center active">Drizzle Cistern, for specification <a href="#" target="_blank">click here</a></p>
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
                           <p class="text-center active">Splash Cistern, for specification <a href="#" target="_blank">click here</a></p>
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
                           <p class="text-center active">Wave Cistern, for specification <a href="#" target="_blank">click here</a></p>
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
      <section class="<?php if($id != '11'){echo 'd-none';} ?>">
         <div class="container">
            <div class="col-md-12">
               <ul class="tabul">
                  <li class="clickme"><a href="javascript:void();" data-tag="tab16" class="activelink">Bright Series</a></li>
                  <li class="clickme ml-md-5"><a href="javascript:void();" data-tag="tab17">Charcoal S</a></li>
                  <li class="clickme ml-md-5"><a href="javascript:void();" data-tag="tab18">Crystal Series</a></li>
               </ul>
               <div style="clear: both;"></div>
               <div id="container">
                  <div class="list mb-5" id="tab16" style="max-height: 600px;overflow: scroll;">
                     <div class="row justify-content-center">
                        <div class="col-md-12">
                           <p class="text-center active">BA Bright Series, for specification <a href="#" target="_blank">click here</a></p>
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
                  <div class="list hide mb-5" id="tab17" style="max-height: 600px;overflow: scroll;">
                     <div class="row justify-content-center">
                        <div class="col-md-12">
                           <p class="text-center">BA Charcoal S, for specification <a href="#" target="_blank">click here</a></p>
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
                  <div class="list hide mb-5" id="tab18" style="max-height: 600px;overflow: scroll;">
                     <div class="row justify-content-center">
                        <div class="col-md-12">
                           <p class="text-center active">BA Crystal Series, for specification <a href="#" target="_blank">click here</a></p>
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
                        <div class="col-md-12 text-center">
                           <p class="product-tank-p">For Water Storage Tanks specification, <a href="">Click Here</a></p>
                        </div>
                     </div>
                  </div>
                  <div class="list hide mb-5" id="tab20" style="max-height: 600px;overflow: scroll;">
                     <div class="row">
                        <div class="col-md-12">
                           <p class="text-center">Life Water Storage, for specification <a href="#" target="_blank">click here</a></p>
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
                           <p class="text-center active">Star Water Storage, for specification <a href="#" target="_blank">click here</a></p>
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
                           <p class="text-center active">Classic Kitchen Sink, for specification <a href="#" target="_blank">click here</a></p>
                        </div>
                        <?php
                           $liQuery = "SELECT * FROM productTabContent WHERE productTab='Classic Kitchen Sink' ";
                           $liSql = mysqli_query($conn, $liQuery);
                                    $sr = 100038588;
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
                  <div class="list hide mb-5" id="tab23" style="max-height: 600px;overflow: scroll;">
                     <div class="row justify-content-center">
                        <div class="col-md-12">
                           <p class="text-center">Edge Kitchen Sink, for specification <a href="#" target="_blank">click here</a></p>
                        </div>
                        <?php
                           $liQuery = "SELECT * FROM productTabContent WHERE productTab='Edge Kitchen Sink' ";
                           $liSql = mysqli_query($conn, $liQuery);
                                    $sr = 1027384028;
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
                           <p class="text-center">Cap - Hand Shower, for specification <a href="#" target="_blank">click here</a></p>
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
                           <p class="text-center">Classic - Hand Shower, for specification <a href="#" target="_blank">click here</a></p>
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
                  <div class="list hide mb-5" id="tab25" style="max-height: 600px;overflow: scroll;">
                     <div class="row justify-content-center">
                        <div class="col-md-12">
                           <p class="text-center active">Alex - Head Shower, for specification <a href="#" target="_blank">click here</a></p>
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
                           <p class="text-center active">Alpha - Head Shower, for specification <a href="#" target="_blank">click here</a></p>
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
                           <p class="text-center active">Caperi - Head Shower, for specification <a href="#" target="_blank">click here</a></p>
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
                           <p class="text-center active">Code - Head Shower, for specification <a href="#" target="_blank">click here</a></p>
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
                           <p class="text-center active">Eden - Head Shower, for specification <a href="#" target="_blank">click here</a></p>
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
                           <p class="text-center active">Edoo - Head Shower, for specification <a href="#" target="_blank">click here</a></p>
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
                           <p class="text-center active">Eldo - Head Shower, for specification <a href="#" target="_blank">click here</a></p>
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
                           <p class="text-center active">Roch - Head Shower, for specification <a href="#" target="_blank">click here</a></p>
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
                           <p class="text-center">Health Faucets Alfa, for specification <a href="#" target="_blank">click here</a></p>
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
                           <p class="text-center">Health Faucets Alfa Plus, for specification <a href="#" target="_blank">click here</a></p>
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
                           <p class="text-center">Health Faucets Fab, for specification <a href="#" target="_blank">click here</a></p>
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
                           <p class="text-center">Health Faucets Nor, for specification <a href="#" target="_blank">click here</a></p>
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
                           <p class="text-center">Health Faucets Pame, for specification <a href="#" target="_blank">click here</a></p>
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
                           <p class="text-center">Health Faucets Prime, for specification <a href="#" target="_blank">click here</a></p>
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
                           <p class="text-center active">EWC Seat Covers, for specification <a href="#" target="_blank">click here</a></p>
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
                           <p class="text-center active">Soft Close Seat Covers, for specification <a href="#" target="_blank">click here</a></p>
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
                  <div class="list hide mb-5" id="tab14" style="max-height: 600px;overflow: scroll;">
                     <div class="row justify-content-center">
                        <div class="col-md-12">
                           <p class="text-center">Multi Jet Sprays, for specification <a href="#" target="_blank">click here</a></p>
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
                           <p class="text-center">Straight Jet Sprays, for specification <a href="#" target="_blank">click here</a></p>
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
                           <p class="text-center">Uni Jet Sprays, for specification <a href="#" target="_blank">click here</a></p>
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
                           <p class="text-center">PMT Jet Spray, for specification <a href="#" target="_blank">click here</a></p>
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
                  <h1 class="intro">request a callback</h1>
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
                  <p class="introduction-p">
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