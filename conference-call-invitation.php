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
      <section class="d-none d-sm-none d-md-block d-lg-block">
         <div id="demo" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <img src="img/investors-relations.jpg" alt="Los Angeles" width="1100" height="500" class="" data-aos="fade-down" />
                  <div class="carousel-caption">
                     <div class="col-md-12 mt-5">
                        <h1 class="text-black" data-aos="fade-up">Investors Relations</h1>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="d-block d-sm-block d-md-none d-lg-none">
         <div id="demo" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <img src="img/investors-relations-mobile.jpg" alt="Los Angeles" width="1100" height="500" data-aos="fade-in" />
                  <div class="carousel-caption">
                     <div class="col-md-12 mt-5">
                        <h1 class="text-black">Investors Relations</h1>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="pt-5 pb-5 bg-white" id="investor">
         <div class="container">
            <div class="row">
               <div class="col-md-8">
                  <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                     <ol class="breadcrumb bg-white">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item"><a href="index.html">Investors</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Financial Results</li>
                     </ol>
                  </nav>
               </div>
            </div>
            <div class="row">
               <div class="col-md-4 text-center">
                  <div class="product-left-menu pt-0">
                     <div id="accordion" class="accordion">
                        <div class="investor-accordion" data-aos="fade-right" data-aos-delay="50">
                           <div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
                              <a class="card-title">
                              Announcement
                              </a>
                           </div>
                           <div id="collapseFour" class="collapse" data-parent="#accordion">
                              <div class="card-body p-0 bg-none">
                                 <ul class="text-left pl-3">
                                    <a href="investor-relations.php#investor">
                                       <li>Press / Stock Exchange Release</li>
                                    </a>
                                    <a href="closure-of-trading-window.php#investor">
                                       <li>Closure of Trading Window</li>
                                    </a>
                                    <a href="extract-of-annual-return.php#investor">
                                       <li>Annual Return</li>
                                    </a>
                                    <a href="board-meetings.php#investor">
                                       <li>Board Meetings</li>
                                    </a>
                                    <a href="agm.php#investor">
                                       <li>AGM</li>
                                    </a>
                                    <a href="newspaper-advertisement.php#investor">
                                       <li>Newspaper Advertisement</li>
                                    </a>
                                    <a href="others.php#investor">
                                       <li>Others</li>
                                    </a>
                                 </ul>
                              </div>
                           </div>
                        </div>
                        <div class="investor-accordion" data-aos="fade-left" data-aos-delay="100">
                           <div class="card-header " data-toggle="collapse" data-parent="#accordion" href="#collapseFive" area-expanded="true">
                              <a class="card-title">
                              Financial
                              </a>
                           </div>
                           <div id="collapseFive" class="collapse show" data-parent="#accordion">
                              <div class="card-body p-0">
                                 <ul class="text-left pl-3">
                                    <a href="financial-results.php#investor">
                                       <li>Financial Results</li>
                                    </a>
                                    <a href="annual-report.php#investor">
                                       <li>Annual Report</li>
                                    </a>
                                    <a href="postal-ballot-results.php#investor">
                                       <li>Postal Ballot results</li>
                                    </a>
                                    <a href="conference-call-transcript.php#investor">
                                       <li>Conference Call Transcript</li>
                                    </a>
                                    <a href="conference-call-invitation.php#investor" class="active">
                                       <li>Conference Call Invitation</li>
                                    </a>
                                 </ul>
                              </div>
                           </div>
                        </div>
                        <div class="investor-accordion" data-aos="fade-right" data-aos-delay="150">
                           <div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSix">
                              <a class="card-title">
                              Presentation
                              </a>
                           </div>
                           <div id="collapseSix" class="collapse" data-parent="#accordion">
                              <div class="card-body p-0">
                                 <ul class="text-left pl-3">
                                    <a href="investor-presentations.php#investor">
                                       <li>Investor Presentations</li>
                                    </a>
                                 </ul>
                              </div>
                           </div>
                        </div>
                        <div class="investor-accordion" data-aos="fade-left" data-aos-delay="200">
                           <div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven">
                              <a class="card-title">
                              General information
                              </a>
                           </div>
                           <div id="collapseSeven" class="collapse" data-parent="#accordion">
                              <div class="card-body p-0">
                                 <ul class="text-left pl-3">
                                    <a href="shareholding-pattern.php#investor">
                                       <li>Shareholding Pattern</li>
                                    </a>
                                    <a href="committees-composition.php#investor">
                                       <li>Committees Composition</li>
                                    </a>
                                    <a href="related-party-transactions.php#investor">
                                       <li>Related Party Transactions</li>
                                    </a>
                                    <a href="unpaid-and-unclaimed-amount.php#investor">
                                       <li>Unpaid and Unclaimed Amount</li>
                                    </a>
                                    <a href="grievance-management.php#investor">
                                       <li>Grievance Management</li>
                                    </a>
                                    <a href="amalgamation-merger.php#investor">
                                       <li>Amalgamation/Merger</li>
                                    </a>
                                    <a href="company-policies.php#investor">
                                       <li>Company Policies</li>
                                    </a>
                                    <a href="secretarial-compliance-report.php#investor">
                                       <li>Secretarial Compliance Report</li>
                                    </a>
                                 </ul>
                              </div>
                           </div>
                        </div>
                        <div class="investor-accordion" data-aos="fade-right" data-aos-delay="250">
                           <div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseEight">
                              <a class="card-title">
                              Downloads
                              </a>
                           </div>
                           <div id="collapseEight" class="collapse" data-parent="#accordion">
                              <div class="card-body p-0">
                                 <ul class="text-left pl-3">
                                    <a href="moa-and-aoa.php#investor">
                                       <li>Moa and AoA</li>
                                    </a>
                                    <a href="credit-ratings.php#investor">
                                       <li>Credit Ratings</li>
                                    </a>
                                    <a href="insider-trading-general-notice.php#investor#investor">
                                       <li>Insider Trading General Notice</li>
                                    </a>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-7 product-border">
                  <ul class="nav nav-tabs" role="tablist" data-aos="fade-down">
                     <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab">FY 2021-22</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab">FY 2020-21</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab">FY 2019-20</a>
                     </li>
                  </ul>
                  <!-- Tab panes -->
                  <div class="tab-content">
                     <div class="tab-pane active" id="tabs-1" role="tabpanel" data-aos="fade-up">
                        <?php
                           $q1 = "SELECT * FROM investorRelation WHERE year='FY 2021-22' AND type='Conference Call Invitation' ";
                           $sql1 = mysqli_query($conn, $q1);
                           while($q1data=mysqli_fetch_array($sql1)){
                              echo '<div class="download-files">
                                       <div class="press-release">
                                          <div class="pull-left press-text">'.$q1data['title'].'</div>
                                          <div class="pull-right">
                                             <a href="media/product/'.$q1data['document'].'" target="_blank"><button class="download">Download <i class="fa fa-download" aria-hidden="true"></i></button></a>
                                          </div>
                                       </div>
                                    </div>';
                           }
                        ?>  
                     </div>
                     <div class="tab-pane" id="tabs-2" role="tabpanel" data-aos="fade-right">
                        <?php
                           $q2 = "SELECT * FROM investorRelation WHERE year='FY 2020-21' AND type='Conference Call Invitation' ";
                           $sql2 = mysqli_query($conn, $q2);
                           while($q2data=mysqli_fetch_array($sql2)){
                              echo '<div class="download-files">
                                       <div class="press-release">
                                          <div class="pull-left press-text">'.$q2data['title'].'</div>
                                          <div class="pull-right">
                                             <a href="media/product/'.$q2data['document'].'" target="_blank"><button class="download">Download <i class="fa fa-download" aria-hidden="true"></i></button></a>
                                          </div>
                                       </div>
                                    </div>';
                           }
                        ?>
                     </div>
                     <div class="tab-pane" id="tabs-3" role="tabpanel">
                        <?php
                           $q3 = "SELECT * FROM investorRelation WHERE year='FY 2019-20' AND type='Conference Call Invitation' ";
                           $sql3 = mysqli_query($conn, $q3);
                           while($q3data=mysqli_fetch_array($sql3)){
                              echo '<div class="download-files">
                                       <div class="press-release">
                                          <div class="pull-left press-text">'.$q3data['title'].'</div>
                                          <div class="pull-right">
                                             <a href="media/product/'.$q3data['document'].'" target="_blank"><button class="download">Download <i class="fa fa-download" aria-hidden="true"></i></button></a>
                                          </div>
                                       </div>
                                    </div>';
                           }
                        ?>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="container-fluid">
            <div class="d-none d-sm-none d-md-block d-lg-block">
               <div class="row">
                  <div class="col-md-8 offset-md-2 offset-lg-2 mt-5 pt-3">
                     <p class="intro-p text-center">Ready to start a conversation</p>
                     <h1 class="intro-tollfree pt-3 text-center">
                        <span class="pr-3"><img src="img/phone.png" /></span>Toll Free No. : 1800 121 3737
                     </h1>
                  </div>
               </div>
            </div>
            <div class="d-block d-sm-block d-md-none d-lg-none">
               <div class="row">
                  <div class="col-md-8 offset-md-2 offset-lg-2 mt-5 pt-3">
                     <p class="intro-p text-center">Ready to start a conversation</p>
                     <h1 class="intro-tollfree pt-3 text-center">
                        <span class="pr-3"><img src="img/phone.png" /></span>Toll Free No. :<br />
                        1800 121 3737
                     </h1>
                  </div>
               </div>
            </div>
            <div class="col-md-12 mt-5">
               <img src="img/illustration.png" class="img-fluid" />
            </div>
         </div>
      </section>
      <?php include('footer.php'); ?>
   </body>
</html>