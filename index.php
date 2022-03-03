<?php

include 'sadmin/connection.php';
if (isset($_POST['newsSubmit'])) {
    $newsEmail = $_POST['newsEmail'];

    $insert = "INSERT newsletter (email) VALUES ('$newsEmail')";
    $sql = mysqli_query($conn, $insert);
    if ($sql) {
        echo '<script>alert("Thank You! We received your request.");</script>';
    } else {
        echo '<script>alert("Some error occurred, please try again later.");</script>';
    }
}
header('Content-Type: text/html; charset=ANSI');
?>
<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>APL Apollo - PVC Pipes & Fittings Manufacturers in India</title>
      <meta name="description" content="APL Apollo - India's Leading Pipes & Fittings Manufacturers in India. We makes Pipes and Fittings for Agriculture, Industries, Sewage and Housing "/>
      <meta name="keywords" content="Pipes & Fittings Manufacturers, Pipes & Fittings Manufacturers in India, PVC Pipes & Fittings Manufacturers, PVC Pipes & Fittings Manufacturers in India" />
      <link rel="canonical" href="https://www.apollopipes.com/" />
      <meta name="robots" content="index, follow"/>
      <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">  
      <link rel="stylesheet" href="css/bootstrap.min.css" />
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous" />
      <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" />
      <link href="https://fonts.googleapis.com/css2?family=Crimson+Pro:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" />
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
      <?php include 'header.php'; ?>
      <div id="main-content" style="overflow: hidden;">
      <section class="d-none d-sm-none d-md-block d-lg-block">
         <div id="demo" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="img/apollo-award-banner.jpg" alt="Best Brand Award" width="1100" height="500" class="animate__animated animate__pulse" />
                  <div class="carousel-caption text-left" style="top: 25%; !important">
                     <h1 class="animate__animated animate__backInDown" style="font-size: 3rem; line-height: 45px;">THE QUALITY<BR> THAT'S TESTED</h1>
                     <h1 class="animate__animated animate__backInDown pt-2" style="font-size: 3rem; line-height: 45px;">THE PERFORMANCE <BR>THAT'S  TRUSTED</h1>
                     <h1 class="animate__animated animate__backInDown pt-2" style="font-size: 3rem; line-height: 45px;">THE BRAND<BR> THAT'S AWARDED!</h1>
                  </div>
               </div>
               <div class="carousel-item">
                  <img src="img/welcome-banner-raveena.jpg" alt="Introducing Ravina Tandon as Our Brand Ambassador" width="1100" height="500" class="animate__animated animate__pulse" />
                  <div class="carousel-caption">
                     
                  </div>
               </div>
               <div class="carousel-item">
                  <img src="img/slider1.jpg" alt="Apollo TOUGH AND TESTED" width="1100" height="500" class="animate__animated animate__pulse" />
                  <div class="carousel-caption">
                     <h1 class="animate__animated animate__backInDown">TOUGH AND TESTED</h1>
                     <h3 class="animate__animated animate__backInRight">The strength behind every creation</h3>
                     <p class="animate__animated animate__backInUp">#BuildToLast</p>
                  </div>
               </div>
               <div class="carousel-item">
                  <img src="img/cpvc.jpg" alt="Apollo PERFORMANCE & SAFETY" width="1100" height="500" class="animate__animated animate__pulse" />
                  <div class="carousel-caption text-left mt-5">
                     <h1 class="animate__animated animate__backInDown">PERFORMANCE <br>& SAFETY</h1>
                     <h3 class="animate__animated animate__backInRight">One solution for hot and cold water distribution</h3>
                     <p class="animate__animated animate__backInUp">#BuildToLast</p>
                  </div>
               </div>
               <div class="carousel-item">
                  <img src="img/slider2.jpg" alt="Apollo Strength & Safety" width="1100" height="500" class="animate__animated animate__pulse" />
                  <div class="carousel-caption text-left mt-5">
                     <h1 class="animate__animated animate__backInDown">STRENGTH &<br> SAFETY</h1>
                     <h3 class="animate__animated animate__backInRight">Safe for  Drinking Water</h3>
                     <p class="animate__animated animate__backInUp">#BuildToLast</p>
                  </div>
               </div>
               <div class="carousel-item">
                  <img src="img/slider5.jpg" alt="Apollo Strong and Flexible" width="1100" height="500" class="animate__animated animate__pulse" />
                  <div class="carousel-caption">
                     <h1 class="animate__animated animate__backInDown">STRONG AND FLEXIBLE</h1>
                     <h3 class="animate__animated animate__backInRight">Add strength and longevity to every place</h3>
                     <p class="animate__animated animate__backInUp">#BuildToLast</p>
                  </div>
               </div>
               <div class="carousel-item">
                  <img src="img/taps-banner.jpg" alt="Beautiful People Make Beautiful Choices" width="1100" height="500" class="animate__animated animate__pulse" />
                  <div class="carousel-caption">
                  </div>
               </div>
               <div class="carousel-item">
                  <img src="img/showers-banner-raveena.jpg" alt="Stylish and Durable" width="1100" height="500" class="animate__animated animate__pulse" />
                  <div class="carousel-caption">
                     <div class="col-md-8 text-left" style="margin-top: 7%; margin-left: 22%;">
                        <h1 class="animate__animated animate__backInDown text-white">
                           STYLISH AND <br />DURABLE
                        </h1>
                        <h3 class="animate__animated animate__backInRight">The beauty your bathroom deserves</h3>
                        <p class="animate__animated animate__backInUp">#AmazingEveryday</p>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <img src="img/cisters-banner-raveena.jpg" alt="Elegant and Comfortable" width="1100" height="500" class="animate__animated animate__pulse" />
                  <div class="carousel-caption">
                     <div class="col-md-8 text-left" style="margin-top: 16%; margin-left: 10%;">
                        <h1 class="text-black animate__animated animate__backInDown" style="font-size: 3.313rem;">
                           ELEGANT AND<br /> COMFORTABLE
                        </h1>
                        <h3 class="animate__animated animate__backInRight" style="color: #000 !important;">Add sophistication to functionality</h3>
                        <p class="text-black animate__animated animate__backInUp">#AmazingEveryday</p>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <img src="img/kitchen-sink-banner-raveena.jpg" alt="Premium and Classy" width="1100" height="500" class="animate__animated animate__pulse" />
                  <div class="carousel-caption">
                      <div class="row">
                      <div class="col-md-2">&nbsp;</div>
                     <div class="col-md-6 text-left" style="margin-top: 5%; margin-left: 6%;">
                        <h1 class="text-black animate__animated animate__backInDown">
                           PREMIUM <br />AND CLASSY
                        </h1>
                        <h3 class="animate__animated animate__backInRight" style="color: #000;">Now turn every kitchen modern</h3>
                        <p class="text-black animate__animated animate__backInUp">#AmazingEveryday</p>
                     </div>
                  </div>
                  </div>
               </div>
               
            </div>
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <img src="img/slider-left.png" />
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
            <img src="img/slider-right.png" />
            </a>
         </div>
      </section>
      <section class="d-block d-sm-block d-md-none d-lg-none">
         <div id="demo1" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="img/apollo-award-banner-res.jpg" alt="Best Brand Award" width="1100" height="500" class="animate__animated animate__pulse" />
                  <div class="carousel-caption">
                     <h1 class="animate__animated animate__backInDown">THE QUALITY<BR> THAT'S TESTED</h1>
                     <h1 class="animate__animated animate__backInDown">THE PERFORMANCE <BR>THAT'S  TRUSTED</h1>
                     <h1 class="animate__animated animate__backInDown">THE BRAND<BR> THAT'S AWARDED!</h1>
                  </div>
               </div>
               <div class="carousel-item">
                  <img src="img/welcome-banner-raveena-mobile.jpg" alt="Los Angeles" width="1100" height="500" class="animate__animated animate__pulse" />
                  <div class="carousel-caption">
                  </div>
               </div>
               <div class="carousel-item">
                  <img src="img/slider1-mobile.jpg" alt="Tough and Tested" width="1100" height="500" class="animate__animated animate__pulse" />
                  <div class="carousel-caption">
                     <h1 class="animate__animated animate__backInDown">TOUGH AND TESTED</h1>
                     <h3 class="animate__animated animate__backInRight">The strength behind every creation</h3>
                     <p class="animate__animated animate__backInUp">#BuildToLast</p>
                  </div>
               </div>
               <div class="carousel-item">
                  <img src="img/cpvc-mobile.jpg" alt="Performance & Safety" width="1100" height="500" class="animate__animated animate__pulse" />
                  <div class="carousel-caption text-left" style="top: 0px;">
                     <h1 class="animate__animated animate__backInDown">PERFORMANCE <br>& SAFETY</h1>
                     <h3 class="animate__animated animate__backInRight">One solution for<br> hot and cold <br>water distribution</h3>
                     <p class="animate__animated animate__backInUp">#BuildToLast</p>
                  </div>
               </div>
               <div class="carousel-item">
                  <img src="img/slider2-mobile.jpg" alt="Protection and Purity" width="1100" height="500" class="animate__animated animate__pulse" />
                  <div class="carousel-caption">
                     <h1 class="animate__animated animate__backInDown">PROTECTION AND PURITY</h1>
                     <h3 class="animate__animated animate__backInRight">A promise of safety and cool water</h3>
                     <p class="animate__animated animate__backInUp">#BuildToLast</p>
                  </div>
               </div>
               <div class="carousel-item">
                  <img src="img/slider5-mobile.jpg" alt="Strong and Flexible" width="1100" height="500" class="animate__animated animate__pulse" />
                  <div class="carousel-caption">
                     <h1 class="animate__animated animate__backInDown">STRONG AND FLEXIBLE</h1>
                     <h3 class="animate__animated animate__backInRight">Add strength and longevity to every place</h3>
                     <p class="animate__animated animate__backInUp">#BuildToLast</p>
                  </div>
               </div>
               <div class="carousel-item">
                  <img src="img/taps-banner-mobile.jpg" alt="Beautiful People Make Beautiful Choices" width="1100" height="500" class="animate__animated animate__pulse" />
                  <div class="carousel-caption">
                  </div>
               </div>
               <div class="carousel-item">
                  <img src="img/showers-banner-raveena-mobile.jpg" alt="Stylish and Durable" width="1100" height="500" class="animate__animated animate__pulse" />
                  <div class="carousel-caption">
                     <div class="col-md-8 text-center top-banner">
                        <h1 class="animate__animated animate__backInDown">
                           STYLISH AND <br />DURABLE
                        </h1>
                        <h3 class="animate__animated animate__backInRight">The beauty your bathroom deserves</h3>
                        <p class="animate__animated animate__backInUp">#AmazingEveryday</p>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <img src="img/cisters-banner-raveena-mobile.jpg" alt="Elegant and Comfortable" width="1100" height="500" class="animate__animated animate__pulse" />
                  <div class="carousel-caption">
                     <div class="col-md-8 text-center top-banner">
                        <h1 class="text-black animate__animated animate__backInDown">
                           ELEGANT AND<br /> COMFORTABLE
                        </h1>
                        <h3 class="animate__animated animate__backInRight" style="color: #000 !important;">Add sophistication to functionality</h3>
                        <p class="text-black animate__animated animate__backInUp">#BuildToLast</p>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <img src="img/kitchen-sink-banner-raveena-mobile.jpg" alt="Premium and Classy" width="1100" height="500" class="animate__animated animate__pulse" />
                  <div class="carousel-caption">
                     <div class="col-md-6 text-center top-banner">
                        <h1 class="text-black animate__animated animate__backInDown">
                           PREMIUM <br>AND CLASSY
                        </h1>
                        <h3 class="animate__animated animate__backInRight">Now turn every kitchen modern</h3>
                        <p class="text-black animate__animated animate__backInUp">#AmazingEveryday</p>
                     </div>
                     <div class="col-md-6">&nbsp;</div>
                  </div>
               </div>
            </div>
            <a class="carousel-control-prev" href="#demo1" data-slide="prev">
            <img src="img/slider-left.png" />
            </a>
            <a class="carousel-control-next" href="#demo1" data-slide="next">
            <img src="img/slider-right.png" />
            </a>
         </div>
      </section>
      <section class="about-apollo pt-5 pb-5">
         <div class="container">
            <div class="row">
               <div class="col-md-10 offset-md-1 offset-lg-1 text-center" style="z-index: 99;">
                  <h1 class="apollo-h1 mt-4">About Apollo Pipes Ltd</h1>
                  <p class="mt-4 text-center pr-0" style="text-align-last: center; text-align: justify !important;">
                     We are a company known for the high quality of our pipes & fittings products and our reliable distribution and retail networks. Started over 35 years, APL APOLLO has over the years used new and emerging technologies to serve the needs of civil infrastructure, industrial and agricultural sectors of the country. We cater to multiple sectors across the country, such as Agriculture, Water Management, and Infrastructure. Our commitment is to provide the best products for plumbing, agriculture, and sanitary applications, making us a name to rely upon. Even though we have one of the largest product portfolios, we don’t believe in resting on our laurels. At APL APOLLO, you will always find a buzz of creativity and the development of new and innovative products is constantly underway. In our journey towards excellence, we are mindful of the interests of all our stakeholders, and it is our endeavour and dream to increase corporate excellence, customer satisfaction and strengthen investors’ trust in <br><b> APL APOLLO</b>.
                  </p>
                  <div class="mt-5">
                     <a href="about.php"><button>READ MORE</button></a>
                  </div>
               </div>
            </div>
         </div>
         <div class="container-fluid why-us p-0">
            <div class="row">
               <div class="col-md-6">
                  <img src="img/pipe-left.png" />
               </div>
               <div class="col-md-6 text-right">
                  <img src="img/right-pipe.png" />
               </div>
            </div>
         </div>
         <div class="container-fluid why-us1 p-0">
            <div class="container">
               <div class="row">
                  <div class="col-md-12 text-center">
                     <h1 class="apollo-h1">Why us?</h1>
                     <h3>Think quality! Think APL Apollo!</h3>
                     <p class="mt-3 text-center" style="text-align:center !important">As one among the Top leading PVC pipe manufacturers in India, <b>APL APOLLO</b> is a name you can trust and rely on to meet all your needs. Please have a look at some of our biggest strengths.</p>
                  </div>
               </div>
            </div>
         </div>
         <div class="container-fluid years p-0">
            <div class="row">
               <div class="col-md-10 ml-md-5 pl-md-5">
                  <div class="div div1">
                     <div data-aos="fade-up" data-aos-duration="500">
                        <div class="gross-text">Over 35 years’ experience in the Pipes and Fittings Industry</div>
                        <div class="gross-cercle m-auto"></div>
                        <div class="gross-line m-auto"></div>
                     </div>
                  </div>
                  <div class="div div2">
                     <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="200">
                        <div class="gross-text">*5 manufacturing units spread across the country by *Q1 FY’22</div>
                        <div class="gross-cercle m-auto"></div>
                        <div class="gross-line-long m-auto"></div>
                     </div>
                  </div>
                  <div class="div div3">
                     <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="300">
                        <div class="gross-text">Largest manufacturing unit at a single location under one roof in North India</div>
                        <div class="gross-cercle m-auto"></div>
                        <div class="gross-line m-auto"></div>
                     </div>
                  </div>
                  <div class="div div4">
                     <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="400">
                        <div class="gross-text">*33 extrusion lines worth producing *60,000 tons of polymers annually</div>
                        <div class="gross-cercle m-auto"></div>
                        <div class="gross-line-long m-auto"></div>
                     </div>
                  </div>
                  <div class="div div5">
                     <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="500">
                        <div class="gross-text">PAN India Sales &amp; Support presence</div>
                        <div class="gross-cercle m-auto"></div>
                        <div class="gross-line m-auto"></div>
                     </div>
                  </div>
                  <div class="div div6">
                     <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="600">
                        <div class="gross-text">*1,25000 MTPA production capacity</div>
                        <div class="gross-cercle m-auto"></div>
                        <div class="gross-line-long m-auto"></div>
                     </div>
                  </div>
                  <div class="div div7">
                     <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="700">
                        <div class="gross-text">One of the largest company owned /operated network of Warehouses-cum-Sales offices in India</div>
                        <div class="gross-cercle m-auto"></div>
                        <div class="gross-line m-auto"></div>
                     </div>
                  </div>
                  <div class="div div8">
                     <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="800">
                        <div class="gross-text">Prestigious clients in the private and public sectors.</div>
                        <div class="gross-cercle m-auto"></div>
                        <div class="gross-line-long m-auto"></div>
                     </div>
                  </div>
                  <div class="div div9">
                     <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="900">
                        <div class="gross-text">Highest satisfaction rate registered among esteemed private &amp; public section clients</div>
                        <div class="gross-cercle m-auto"></div>
                        <div class="gross-line m-auto"></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section>
         <div class="container-fluid top">
            <div class="row">
               <div class="col-md-12">
                  <img src="img/why-us.png" class="img-fluid" alt="Think quality! Think APL Apollo!" />
               </div>
            </div>
         </div>
      </section>
      
      <section style="background-image: url('img/raveena-bg.jpg'); background-size: cover; padding-top:50px">
      <div class="container">
          <div class="row">
              <div class="col-md-6 pt-5 mt-5">
                  <p class="raveena-p1"><img src="img/v-left-raveena.png"></p><p class="raveena-p text-white"> Hi everyone – I’m Raveena Tandon, and I’m so excited to announce that I&#39;ll be joining the APL Apollo family as their brand ambassador. It is an honour to represent an organization that represents quality and integrity above all else. That has made them India’s most preferred piping solutions brand. I look forward to a long relationship with the brand and writing our story together. <span><img src="img/v-right-raveena.png" class="test-p"></span>
                  
                  <span class="d-block mt-5"><img src="img/raveena-sign.png"></span>
                  </p>
                  
              </div>
              <div class="col-md-6 text-center">
                  <img src="img/raveena-tondon.png" class="img-fluid" alt="Raveena Tondon">
              </div>
          </div>
          </div>
      </section>
      
      <section class="product-range">
         <div class="container">
            <div class="row">
               <div class="col-md-6 offset-md-3 offset-lg-3">
                  <h1 class="text-center apollo-h1 pt-5">PRODUCT RANGE</h1>
                  <p class="text-center">With over *1000+ SKUs in its inventory, APL Apollo has one of the largest product portfolio spread in different categories –</p>
               </div>
            </div>
         </div>
         <div class="trigger section gutter-horizontal bg-gray gutter-vertical--m gutter-horizontal" style="padding:0px 50px">
            <div class="customer-logos slider pt-5 pb-5">
               <div class="slide-in-right slide text-center product pt-5 pb-5">
                  <a href='products.php?cat=1'>
                     <div><img src="img/product1.png" class="img-fluid" alt="Pipes and Fittings"/></div>
                     <p class="product-text mt-5">PIPES AND<br> FITTINGS</p>
                     <div class="border"></div>
                  </a>
               </div>
               <div class="slide-in-right slide text-center product pb-5">
                  <a href='products.php?cat=4'>
                      <div><img src="img/product2.png" class="img-fluid" alt="Water Storage Tanks"/></div>
                      <p class="product-text mt-5">WATER STORAGE<br> TANKS</p>
                      <div class="border"></div>
                  </a>    
               </div>
               <div class="slide-in-right slide text-center product pb-5">
                  <a href='products.php?cat=3'>
                      <div><img src="img/product3.png" class="img-fluid" alt="Bathroom Fittings and Accessories" /></div>
                      <p class="product-text mt-5">BATHROOM FITTINGS AND ACCESSORIES</p>
                      <div class="border"></div>
                  </a>    
               </div>
               <div class="slide-in-right slide text-center product pb-5">
                  <a href="products.php?cat=2">
                     <div><img src="img/solvent.png" class="img-fluid" alt="Adhesives - Solvent Cement" /></div>
                     <p class="product-text mt-5">ADHESIVES – SOLVENT CEMENT</p>
                     <div class="border"></div>
                  </a>   
               </div>
               <div class="slide-in-right slide text-center product pb-5">
                  <a href="products.php?cat=5">
                      <div>
                         <img src="img/kitchen-sink.png" class="img-fluid" alt="Home Solutions" />
                      </div>
                      <p class="product-text mt-5">HOME SOLUTIONS</p>
                      <div class="border"></div>
                  </a>    
               </div>
            </div>
         </div>
      </section>

      <section class="product-application position-relative">
                <div class="container-fluid product-us p-0" style="z-index: 9999999;">
         <div class="row">
            <div class="col-md-6">
               <img src="img/pipe-left.png" alt="Pipes" />
            </div>
            <div class="col-md-6 text-right">
               <img src="img/right-pipe.png" alt="Pipes" />
            </div>
         </div>
      </div>
         <div class="container">
            <div class="row">
               <div class="col-md-8 offset-md-2 offset-lg-2 mt-4 pt-3">
                  <h1 class="text-center apollo-h1 pt-5 text-white">Product Applications</h1>
               </div>
               <div class="col-md-12 mt-5 mb-4 d-none d-sm-none d-md-block d-lg-block">
                  <p class="text-center"><img id="eye-cursor" draggable="true" ondragstart="drag(event)" ondragend="dragCancel(event)" class="animate__animated animate__bounce animate__infinite margin" src="img/eye.png" /></p>
               </div>
            </div>
            <div class="row text-center text-white mt-2">
               <div class="product-application-div">
                  <div data-link-highlight ondrop="drop(event)" data-href="plumbing.php" ondragover="allowDrop(event)" onclick="drop(event)">
                    <img src="img/plumbing.png" alt="plumbing" data-href="plumbing.php" /></div>
                  <p class="mt-4">PLUMBING</p>
               </div>
               <div class="product-application-div">
                  <div data-link-highlight ondrop="drop(event)" data-href="agriculture.php" ondragover="allowDrop(event)" onclick="drop(event)">
                     <img src="img/agricultural.png" alt="Agriculture" data-href="agriculture.php"/>
                  </div>
                  <p class="mt-4">AGRICULTURE</p>
               </div>
               <div class="product-application-div">
                  <div data-link-highlight ondrop="drop(event)" data-href="industrial.php" ondragover="allowDrop(event)" onclick="drop(event)">
                    <img src="img/industrial.png" alt="Industrial" data-href="industrial.php"/></div>
                  <p class="mt-4">INDUSTRIAL</p>
               </div>
               <div class="product-application-div">
                  <div data-link-highlight ondrop="drop(event)" data-href="sewerage.php" ondragover="allowDrop(event)" onclick="drop(event)">
                    <img src="img/severage.png" alt="Severage" data-href="sewerage.php"/></div>
                  <p class="mt-4">SEWERAGE</p>
               </div>
               <div class="product-application-div">
                  <div data-link-highlight ondrop="drop(event)" data-href="borewell-system.php" ondragover="allowDrop(event)" onclick="drop(event)"><img src="img/borewell-system.png" alt="Borewell System"  data-href="borewell-system.php"/></div>
                  <p class="mt-4">Borewell System</p>
               </div>
               <div class="product-application-div">
                  <div data-link-highlight ondrop="drop(event)" data-href="water-solutions.php" ondragover="allowDrop(event)" onclick="drop(event)"><img src="img/water-solutions.png" alt="Water Solutions"  data-href="water-solutions.php"/></div>
                  <p class="mt-4">Water Solutions</p>
               </div>
               <div class="product-application-div">
                  <div data-link-highlight ondrop="drop(event)" data-href="bath-fittings.php" ondragover="allowDrop(event)" onclick="drop(event)"><img src="img/bath-fitting.png" alt="Bath Fittings" data-href="bath-fittings.php"/></div>
                  <p class="mt-4">Bath Fittings</p>
               </div>
               <div class="product-application-div d-none">
                  <div data-link-highlight ondrop="drop(event)" data-href="home-solutions.php" ondragover="allowDrop(event)" onclick="drop(event)"><img src="img/interior.png" alt="Interior" data-href="home-solutions.php"/></div>
                  <p class="mt-4">Home Solutions</p>
               </div>
            </div>
         </div>
      </section>
      <section class="our-clientele mt-5">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-8 text-center offset-md-2 offset-lg-2">
                  <h1 class="apollo-h1">Our Clientele</h1>
                  <p class="apollo-p">
                     Over the last three decades, APL Apollo has created a unique presence in the pipe market and gained several dedicated clients. Our clients vouch highly for the quality of our products and our excellent
                     customer service. With the largest plant in North India, we are able to provide large quantities of pipes & fittings and other supplies in a timely manner, which is why the vendors who purchase from us never
                     have to worry about delays in deliveries. Our product portfolio has a wide variety of products at different price ranges, which is why we are able to cater to all sorts of clients, from small shops to big
                     showrooms, to traders, exporters, distributors, etc.
                  </p>
               </div>
               <div class="col-md-8 text-center offset-md-2 offset-lg-2 mb-3">
                  <img src="img/clientslogo.jpg" width="100%"/>
               </div>
            </div>
         </div>
      </section>
      <section class="testimonials pt-5">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-8 text-center offset-md-2 offset-lg-2">
                  <h3 class="apollo-h3">Testimonials from</h3>
                  <h1 class="apollo-h1">clients</h1>
               </div>
               <div class="col-md-8 offset-md-2 offset-lg-2">
                  <div class="testimonials-text position-relative mb-5">
                     <p class="sign"><img src="img/v-left.png" /></p>
                     <div id="demo2" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                           <div class="carousel-item active">
                              <p class="mb-0 testimonial-p">
                                 “APL Apollo is our regular supplier of All types of Pipes and Fittings, Water Tanks, sanitary products and we are very happy with their products and service. Their products are not very expensive and do well in the market. We always get good feedback from customers whenever they buy anything with the brand APL Apollo on it.
                              </p>
                              <div>
                                 <p class="mb-0">
                                    <img src="img/dharam-kirti.png" alt="Dharam Kirti" width="150" />
                                 </p>
                                 <p class="author">Mr. Harish</p>
                              </div>
                           </div>
                           <div class="carousel-item">
                              <p class="mb-0 testimonial-p">
                                 “APL Apollo sells quality pipes in different varieties. It also sells solvent cement to make the joints of the
pipes strong and leak-proof. The company has come up with a new segment of water tank which is
being highly appreciated in the market. I am very happy with all of the products in APL Apollo’s
portfolio. Delivery is very good because there is a big plant in North India”
                              </p>
                              <div>
                                 <p class="mb-0">
                                    <img src="img/vishnu.png" alt="Vishnu" width="150" />
                                 </p>
                                 <p class="author">MR. VISHNU AREON (CHANNEL PARTNER)</p>
                              </div>
                           </div>
                           <div class="carousel-item">
                              <p class="mb-0 testimonial-p">
                                 “We have a very good vendor-customer relationship with APL Apollo and we have never
faced any problems in their products or service. The pipes are of good quality and more
affordable than the competitors. I will continue to source my supplies from APL Apollo in
the future also.”
                              </p>
                              <div>
                                 <p class="mb-0">
                                    <img src="img/praveen-mittal.png" alt="Praveen Mittal" width="150" />
                                 </p>
                                 <p class="author">MR. PRAVEEN MITTAL (CHANNEL PARTNER)</p>
                              </div>
                           </div>
                           <div class="carousel-item">
                              <p class="mb-0 testimonial-p">
                                 “Not many companies, which have such a large portfolio of products including Pipes and
Fittings, water tank and Bathroom Fittings, have good distribution chains in Ranchi.
APL Apollo has a strong distribution network in Central India and you can always expect
them to deliver goods on time and in good condition. Their variety of products also gives
customers a lot of choices at affordable rates. I am a happy client of APL Apollo”
                              </p>
                              <div>
                                 <p class="mb-0">
                                    <img src="img/saket.png" alt="Saket" width="150" />
                                 </p>
                                 <p class="author">MR. SAKET AGARWAL (CHANNEL PARTNER)</p>
                              </div>
                           </div>
                           <div class="carousel-item">
                              <p class="mb-0 testimonial-p">
                                “In our line of business, we have found that customers are looking for products which are
stylish and durable but also affordable. With products from APL Apollo, one gets all
these qualities at a good price which is why their products do well in the market. Also,
because they have the largest plant in North India, availability of stock is never a
problem.”
                              </p>
                              <div>
                                 <p class="mb-0">
                                    <img src="img/devendra-singh.png" alt="Devendra Singh" width="150" />
                                 </p>
                                 <p class="author">MR. DEVENDRA SINGH MEHRA (CHANNEL PARTNER)</p>
                              </div>
                           </div>
                           <div class="carousel-item">
                              <p class="mb-0 testimonial-p">
                                 “I rely heavily on APL Apollo for their good-quality products and their timely deliveries.
Whether you are a big or small company, APL Apollo gives each client the same level of
excellent service. I am very happy with my association with them.”
                              </p>
                              <div>
                                 <p class="mb-0">
                                    <img src="img/akhil-bansal.png" alt="Akhil Bansal" width="150" />
                                 </p>
                                 <p class="author">MR. AKHIL BANSAL</p>
                              </div>
                           </div>
                           
                        </div>
                        <ul class="carousel-indicators">
                           <li data-target="#demo2" data-slide-to="0" class="active">1</li>
                           <li data-target="#demo2" data-slide-to="1">2</li>
                           <li data-target="#demo2" data-slide-to="2">3</li>
                           <li data-target="#demo2" data-slide-to="3">4</li>
                           <li data-target="#demo2" data-slide-to="4">5</li>
                           <li data-target="#demo2" data-slide-to="5">6</li>
                        </ul>
                     </div>
                     <p class="sign1"><img src="img/v-right.png" /></p>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="subscribe">
         <div class="container">
            <form action="#" method="POST">
               <div class="row">
                  <div class="col-md-1"></div>
                  <div class="col-md-8 mb-3">
                     <input type="text" placeholder="Sign up for our newsletter" name="newsEmail" style="background: #0057a1; color: #ffffff; width: 100%; border: none; border-bottom: 1px #fff solid;" required="" />
                  </div>
                  <div class="col-md-2 text-center">
                     <input type="submit" class="btn submit-btn" name="newsSubmit" value="Submit">
                  </div>
                  <div class="col-md-1"></div>
               </div>
            </form>
         </div>
      </section>
      <?php include 'footer.php'; ?>
   </body>
</html>