<?php
$url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
if (strpos($url,'car') !== false) {echo 'Car exists.';}
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
      <script src='https://www.google.com/recaptcha/api.js'></script>
      <style>
         .career button{
         width: 45% !important;
         cursor: pointer;
         }
         .email-hl{
         color: #06B8C9;
         }
         .indicate{
         color: #646464;
         text-align: right;
         font-size:12px;
         }
         .indicate-red{
         color: #FC020B;
         }
         .discription{
         color: #000;
         text-transform: uppercase;
         font-size: 14px;
         font-weight: 600;
         }
         .current-opning li,p{
         color: #676767;
         font-size: 14px;
         line-height: 25px;
         margin-bottom: 0px;
         }
         .apply-button button{
         background: #06B8C9;
         display: inline;
         padding: 13px 30px;
         font-size: 12px;
         text-transform: uppercase;
         color: #fff;
         border-radius: 20px;
         border: none;
         cursor: pointer;
         }
      </style>
   </head>
   <body>
      <?php include('header.php'); ?>
      <div id="main-content" style="overflow: hidden;">
      <section class="d-none d-sm-none d-md-block d-lg-block">
         <div id="demo" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <img src="img/career.jpg" alt="Current Openings" width="1100" height="500" class="aos-init aos-animate" data-aos="fade-down">
                  <div class="carousel-caption">
                     <div class="col-md-12 mt-5">
                        <h1 class="text-black aos-init aos-animate" data-aos="fade-up">CAREER OPPORTUNITIES</h1>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section id="career">
         <div class="container mt-5">
            <div class="row">
               <div class="col-md-6 offset-md-3 offset-lg-3 mb-4">
                  <div class="row text-center news-media career">
                     <div class="col-md-12 p-0">
                        <a href="current-openings.php#career"><button data-aos="fade-up" data-aos-delay="50" class="<?php if (strpos($url,'current-openings') !== false) {echo 'news-media-active';} ?> aos-init aos-animate">Current Openings</button></a>
                        <a href="apply-online.php#career"><button data-aos="fade-up" data-aos-delay="100" class="<?php if (strpos($url,'apply-online') !== false) {echo 'news-media-active';} ?>aos-init aos-animate">Apply Online</button></a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-8 offset-md-2 offset-lg-2">
                  <p class="text-center mt-4">We offer high growth potential to qualified personnel willing to make career with Apollo Pipes Limited. Deserving candidates may send their resumes to: <span class="email-hl">careers@apollopipes.com<span></p>
               </div>
            </div>
         </div>
      </section>
      <section class="mt-5 mb-5">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div id="accordion">
                     <div class="card">
                        <div class="card-header" id="heading-1">
                           <h5 class="mb-0 pl-4 pr-4">
                              <a role="button" data-toggle="collapse" href="#collapse-1" aria-expanded="true" aria-controls="collapse-1">
                              Regional Manager-UP East
                              </a>
                           </h5>
                        </div>
                        <div id="collapse-1" class="collapse show" data-parent="#accordion" aria-labelledby="heading-1">
                           <div class="card-body">
                              <div class="row">
                                 <div class="col-md-8 current-opning">
                                    <p class="discription mb-1">Job Descriptions</p>
                                    <ol class="pl-3">
                                       <li>Identify and develop new business opportunities. </li>
                                       <li>Approach new businesses with proposals. </li>
                                       <li>Manage and maintain sales/clients database.</li>
                                       <li>Establish and maintain efficient relationship with new and existing clients. </li>
                                       <li> Generate new business opportunities in assigned territory/channel. </li>
                                       <li> Oversee and manage sales executives to achieve set targets.</li>
                                    </ol>
                                 </div>
                                 <div class="col-md-4">
                                    <div class="mb-2">
                                       <p class="discription">Qualification</p>
                                       <p>Graduation/Post Graduation</p>
                                    </div>
                                    <div class="mb-2">
                                       <p class="discription">Experience</p>
                                       <p>6-10 Years</p>
                                    </div>
                                    <div class="mb-2">
                                       <p class="discription">Location</p>
                                       <p>UP East</p>
                                    </div>
                                    <div class="mb-2">
                                       <p class="discription">No Of Post</p>
                                       <p>1</p>
                                    </div>
                                 </div>
                                 <div class="col-md-12">
                                    <div class="apply-button">
                                       <a href="apply-online.php#career"><button>Apply Now</button></a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="card">
                        <div class="card-header" id="heading-2">
                           <h5 class="mb-0 pl-4 pr-4">
                              <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
                              State Head (sales & Marketing)- Punjab & Haryana
                              </a>
                           </h5>
                        </div>
                        <div id="collapse-2" class="collapse" data-parent="#accordion" aria-labelledby="heading-2">
                           <div class="card-body">
                              <div class="row">
                                 <div class="col-md-8 current-opning">
                                    <p class="discription mb-1">Job Descriptions</p>
                                    <ol class="pl-3">
                                       <li>To achieve the sales volume and collection as per target. </li>
                                       <li>Looking after overall Sales and Marketing of PVC, CPVC, uPVC, SWR pipes, Column pipes, Underground drainage pipes, HDPE Sprinkle systems and fittings.</li>
                                       <li>Increase in sales efficiency with focus on managing performance of sales team through proper coaching, skill development and motivation.</li>
                                       <li>To build strong relationship with key customers and distributors.</li>
                                       <li>Sales Reporting</li>
                                    </ol>
                                 </div>
                                 <div class="col-md-4">
                                    <div class="mb-2">
                                       <p class="discription">Qualification</p>
                                       <p>MBA- Marketing</p>
                                    </div>
                                    <div class="mb-2">
                                       <p class="discription">Experience</p>
                                       <p>10-12 YEARS</p>
                                    </div>
                                    <div class="mb-2">
                                       <p class="discription">Location</p>
                                       <p>Punjab , Haryana</p>
                                    </div>
                                    <div class="mb-2">
                                       <p class="discription">No Of Post</p>
                                       <p>2</p>
                                    </div>
                                 </div>
                                 <div class="col-md-12">
                                    <div class="apply-button">
                                       <a href="apply-online.php#career"><button>Apply Now</button></a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!--<div class="card">-->
                     <!--   <div class="card-header" id="heading-3">-->
                     <!--      <h5 class="mb-0 pl-4 pr-4">-->
                     <!--         <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-3" aria-expanded="false" aria-controls="collapse-3">-->
                     <!--         State Head(Sales & Marketing)-Maharashtra-->
                     <!--         </a>-->
                     <!--      </h5>-->
                     <!--   </div>-->
                     <!--   <div id="collapse-3" class="collapse" data-parent="#accordion" aria-labelledby="heading-3">-->
                     <!--      <div class="card-body">-->
                     <!--         <div class="row">-->
                     <!--            <div class="col-md-8 current-opning">-->
                     <!--               <p class="discription mb-1">Job Descriptions</p>-->
                     <!--               <ol class="pl-3">-->
                     <!--                  <li>To achieve the sales volume and collection as per target.</li>-->
                     <!--                  <li>Looking after overall Sales and Marketing of PVC,CPVC,UPVC,SWR pipes,Column pipes,Underground drainage pipes, HDPE Sprinkle systems and fittings.</li>-->
                     <!--                  <li>Increase in sales efficiency with focus on managing performance of sales team through proper coaching, skill development and motivation.</li>-->
                     <!--                  <li>To build strong relationship with key customers and distributors. 5)Sales Reporting. </li>-->
                     <!--               </ol>-->
                     <!--            </div>-->
                     <!--            <div class="col-md-4">-->
                     <!--               <div class="mb-2">-->
                     <!--                  <p class="discription">Qualification</p>-->
                     <!--                  <p>MBA- Marketing</p>-->
                     <!--               </div>-->
                     <!--               <div class="mb-2">-->
                     <!--                  <p class="discription">Experience</p>-->
                     <!--                  <p>10-12 YEARS</p>-->
                     <!--               </div>-->
                     <!--               <div class="mb-2">-->
                     <!--                  <p class="discription">Location</p>-->
                     <!--                  <p>Maharashtra</p>-->
                     <!--               </div>-->
                     <!--               <div class="mb-2">-->
                     <!--                  <p class="discription">No Of Post</p>-->
                     <!--                  <p>1</p>-->
                     <!--               </div>-->
                     <!--            </div>-->
                     <!--            <div class="col-md-12">-->
                     <!--               <div class="apply-button">-->
                     <!--                  <a href="apply-online.php#career"><button>Apply Now</button></a>-->
                     <!--               </div>-->
                     <!--            </div>-->
                     <!--         </div>-->
                     <!--      </div>-->
                     <!--   </div>-->
                     <!--</div>-->
                     <div class="card">
                        <div class="card-header" id="heading-4">
                           <h5 class="mb-0 pl-4 pr-4">
                              <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-4" aria-expanded="false" aria-controls="collapse-4">
                              State Head (Sales & Marketing)- Madhya Pradesh
                              </a>
                           </h5>
                        </div>
                        <div id="collapse-4" class="collapse" data-parent="#accordion" aria-labelledby="heading-4">
                           <div class="card-body">
                              <div class="row">
                                 <div class="col-md-8 current-opning">
                                    <p class="discription mb-1">Job Descriptions</p>
                                    <ol class="pl-3">
                                       <li>To achieve the sales volume and collection as per target.</li>
                                       <li>Looking after overall Sales and Marketing of PVC, CPVC, uPVC, SWR pipes, Column pipes, Underground drainage pipes.</li>
                                       <li>HDPE Sprinkle systems and fittings.</li>
                                       <li>Increase in sales efficiency with focus on managing performance of sales team through proper coaching, skill development and motivation.</li>
                                       <li>To build strong relationship with key customers and distributors. </li>
                                       <li>Sales Reporting.</li>
                                    </ol>
                                 </div>
                                 <div class="col-md-4">
                                    <div class="mb-2">
                                       <p class="discription">Qualification</p>
                                       <p>MBA- Marketing</p>
                                    </div>
                                    <div class="mb-2">
                                       <p class="discription">Experience</p>
                                       <p>10-12 YEARS</p>
                                    </div>
                                    <div class="mb-2">
                                       <p class="discription">Location</p>
                                       <p>Madhya Pradesh</p>
                                    </div>
                                    <div class="mb-2">
                                       <p class="discription">No Of Post</p>
                                       <p>2</p>
                                    </div>
                                 </div>
                                 <div class="col-md-12">
                                    <div class="apply-button">
                                       <a href="apply-online.php#career"><button>Apply Now</button></a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="card">
                        <div class="card-header" id="heading-5">
                           <h5 class="mb-0 pl-4 pr-4">
                              <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-5" aria-expanded="false" aria-controls="collapse-5">
                              Regional Manager - UP West
                              </a>
                           </h5>
                        </div>
                        <div id="collapse-5" class="collapse" data-parent="#accordion" aria-labelledby="heading-5">
                           <div class="card-body">
                              <div class="row">
                                 <div class="col-md-8 current-opning">
                                    <p class="discription mb-1">Job Descriptions</p>
                                    <ol class="pl-3">
                                       <li>Identify and develop new business opportunities.</li>
                                       <li>Approach new businesses with proposals.</li>
                                       <li>Manage and maintain sales/clients database.</li>
                                       <li>Establish and maintain efficient relationship with new and existing clients. </li>
                                       <li>Generate new business opportunities in assigned territory/channel. </li>
                                       <li>Oversee and manage sales executives to achieve set targets.</li>
                                    </ol>
                                 </div>
                                 <div class="col-md-4">
                                    <div class="mb-2">
                                       <p class="discription">Qualification</p>
                                       <p>Graduation/Post Graduation</p>
                                    </div>
                                    <div class="mb-2">
                                       <p class="discription">Experience</p>
                                       <p>6-10 YEARS</p>
                                    </div>
                                    <div class="mb-2">
                                       <p class="discription">Location</p>
                                       <p>UP West</p>
                                    </div>
                                    <div class="mb-2">
                                       <p class="discription">No Of Post</p>
                                       <p>1</p>
                                    </div>
                                 </div>
                                 <div class="col-md-12">
                                    <div class="apply-button">
                                       <a href="apply-online.php#career"><button>Apply Now</button></a>
                                    </div>
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
      <?php include('footer.php'); ?>
      <style type="text/css">
         .mb-0 > a {
         display: block;
         position: relative;
         text-transform: uppercase;
         font-size: 16px;
         color: #000;
         font-weight: 600;
         }
         .mb-0 > a:after {
         content: "\f078"; /* fa-chevron-down */
         font-family: 'FontAwesome';
         position: absolute;
         right: 0;
         }
         .mb-0 > a[aria-expanded="true"]:after {
         content: "\f077"; /* fa-chevron-up */
         }
      </style>
   </body>
</html>