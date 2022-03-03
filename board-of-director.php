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
            <section class="video">
                <div class="col-md-12 p-0">
                    <video width="100%" autoplay="autoplay" loop muted>
                        <source src="video/about-revised.mp4" type="video/mp4" />
                        <source src="video/about-revised.ogg" type="video/ogg" />
                        Your browser does not support HTML5 video.
                    </video>
                </div>
            </section>

            <section class="about-apollo" id="about">
                <div class="container-fuid">
                    
                    <?php include('about-nav-mobile.php'); ?>

                    <div class="col-md-12 text-center" data-aos="fade-down">
                        <h1 class="apollo-h1">board of Directors</h1>
                    </div>
                    <div class="row">
                        
                        <div class="col-md-9 offset-md-1 offset-lg-1 text-center">
                            <div class="row mt-5" data-aos="fade-down">
                                
                                <div class="col-md-4">
                                    <div class="director-div">
                                        <div><img src="img/board-of-director-sanjay-gupta.jpg" alt="Sanjay Gupta" class="image-cercle"></div>
                                        <div class="board-member mt-4">Sanjay Gupta</div>
                                        <div class="md-desi text-center">Chairman, Non-Executive</div>
                                        <div class="md-desi text-center">DIN: 00233188</div>
                                        
                                        <div class="board-read-more" data-toggle="modal" data-target="#sanjay-gupta">Read More</div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="director-div">
                                        <div><img src="img/board-of-director-sameer-gupta.jpg" alt="SAMEER GUPTA" class="image-cercle"></div>
                                        <div class="board-member mt-4">SAMEER GUPTA</div>
                                        <div class="md-desi text-center">Managing Director</div>
                                        <div class="md-desi text-center">DIN: 00005209</div>
                                        
                                        <div class="board-read-more" data-toggle="modal" data-target="#sameer-gupta">Read More</div>
                                    </div>
                                </div>
                                
                                <div class="col-md-4">
                                    <div class="director-div">
                                        <div><img src="img/board-of-director-saket-agarwal.jpg" alt="Saket Agarwal" class="image-cercle"></div>
                                        <div class="board-member mt-4">Saket Agarwal</div>
                                        <div class="md-desi text-center">Non-Executive Director</div>
                                        <div class="md-desi text-center">DIN: 00203084</div>
                                        
                                        <div class="board-read-more" data-toggle="modal" data-target="#saket-agarwal">Read More</div>
                                    </div>
                                </div>
                                
                                </div>
                                
                                
                                <div class="row mt-4 pt-2" data-aos="fade-up">
                                <div class="col-md-4">
                                    <div class="director-div">
                                        <div><img src="img/board-of-director-neeru-abrol.jpg" alt="Neeru Abrol" class="image-cercle"></div>
                                        <div class="board-member mt-4">Neeru Abrol</div>
                                        <div class="md-desi text-center">Independent Director</div>
                                        <div class="md-desi text-center">DIN: 01279485</div>
                                        
                                        <div class="board-read-more" data-toggle="modal" data-target="#neeru-abrol">Read More</div>
                                    </div>
                                </div>
                                
                                <div class="col-md-4">
                                    <div class="director-div">
                                        <div><img src="img/board-of-director-pradeep-jain.jpg" alt="Pradeep Kumar Jain" class="image-cercle"></div>
                                        <div class="board-member mt-4">Pradeep Kumar Jain</div>
                                        <div class="md-desi text-center">Independent Director</div>
                                        <div class="md-desi text-center">DIN: 08063400</div>
                                        
                                        <div class="board-read-more" data-toggle="modal" data-target="#pradeep-jain">Read More</div>
                                    </div>
                                </div>
                                
                                <div class="col-md-4">
                                    <div class="director-div">
                                        <div><img src="img/board-of-director-abhilash-lal.jpg" alt="Abhilash Lal" class="image-cercle"></div>
                                        <div class="board-member mt-4">Abhilash Lal</div>
                                        <div class="md-desi text-center">Independent Director</div>
                                        <div class="md-desi text-center">DIN: 03203177</div>
                                        
                                        <div class="board-read-more" data-toggle="modal" data-target="#abhilash-lal">Read More</div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>

                        <div class="col-md-2 li-text" data-aos="fade-down">
                            <div class="d-none d-sm-none d-md-block d-lg-block">
                                <aside class="callout miles-top">
                                    <b> </b>
                                </aside>
                                <a href="about.php#about">
                                    <aside class="callout">
                                        <b>
                                            Company<br />
                                            Overview
                                        </b>
                                    </aside>
                                </a>

                                <a href="about-mission.php#about">
                                    <aside class="callout warning">
                                        <b>
                                            Mission/<br />
                                            Vision
                                        </b>
                                    </aside>
                                </a>
                                <a href="success-milestone.php#about">
                                    <aside class="callout success">
                                        <b> Milestones</b>
                                    </aside>
                                </a>
                                
                                <a href="board-of-director.php#about">
                                    <aside class="callout success about-active">
                                        <b> BOARD OF<br> DIRECTORS</b>
                                    </aside>
                                </a>
                                
                                <a href="director-message.php#about">
                                    <aside class="callout success pb-5">
                                        <b> MD<span class="text-lowercase">'s</span> Desk </b>
                                    </aside>
                                </a>
                                <aside class="callout bottom">
                                    <b> </b>
                                </aside>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
            
            <div class="modal" id="sanjay-gupta">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header text-left">
          <div class="board-member">SANJAY GUPTA<br> <span class="md-desi">Chairman, Non-Executive</span></div>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <p class="about-director">Mr. Sanjay Gupta is an entrepreneur with an experience over three decades in various steel industry segments and he has spearheaded the Company’s growth. He is serving as Chairman and Managing Director of APL Apollo Tubes Limited, one of the leading manufacturing Companies in Steel & Iron Pipe segment of India.
            </p>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>


<div class="modal" id="sameer-gupta">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header text-left">
          <div class="board-member">SAMEER GUPTA<br> <span class="md-desi">Managing Director</span></div>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <p class="about-director">Mr. Sameer Gupta has graduated from Shri Ram College of Commerce, Delhi University. He joined the family business in an early age and established the PVC Pipes unit business. Under his able leadership, the Company continues to reach newer heights, nurturing the values of hard work, commitment to quality, excellence & growth.
            </p>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
  <div class="modal" id="saket-agarwal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header text-left">
          <div class="board-member">Saket Agarwal<br> <span class="md-desi">Non-Executive Director</span></div>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <p class="about-director">Mr. Saket Agarwal has more than 20 years of experience in Steel & Pipes Industry. A commerce graduate, he has held key managerial positions in various corporates.
            </p>
        </div>
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        </div>
        </div>
        </div>
  
  <div class="modal" id="neeru-abrol">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header text-left">
          <div class="board-member">Neeru Abrol<br> <span class="md-desi">Independent Director</span></div>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <p class="about-director">A Chartered Accountant by profession, Ms. Abrol has about four decades of rich professional experience in various sectors and positions. She worked for 26 years with Steel Authority of India Ltd at various critical management positions which have provided her with in-depth knowledge of the steel industry and its work flow. She is also the former Chairperson and Managing Director and Director Finance of National Fertilizers Ltd. Ms. Abrol is currently serving as Director at TCNS Clothing Co Limited, APL APOLLO Tubes Ltd, Apollo Tricoat Tubes Ltd. and other companies. She is also associated with a couple of NGOS. She is recipient of multiple awards over her illustrious career including twice ‘Business Achiever‘ by ICAI, ’Outstanding Woman Manager in Public Sector Enterprises‘ by SCOPE.
            </p>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
  <div class="modal" id="pradeep-jain">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header text-left">
          <div class="board-member">PRADEEP KUMAR JAIN<br> <span class="md-desi">Independent Director</span></div>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <p class="about-director">Mr. Pradeep Kumar Jain was the Executive Director in Oil and Natural Gas Corporation Limited (ONGC), an Indian national oil and gas company, i.e., Public Sector Undertaking (PSU) of the Government of India. He is a Postgraduate in Petroleum Technology and has graduated (B. Tech) from Indian School of Mines, Dhanbad (Now IIT, Dhanbad). Degree in Leadership Development Programme from Indian School of Business (ISB), Hyderabad.
            </p>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
  <div class="modal" id="abhilash-lal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header text-left">
          <div class="board-member">Abhilash Lal<br> <span class="md-desi">Independent Director</span></div>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <p class="about-director">A mechanical engineer and postgraduate from IIM Bangalore, Mr. Abhilash Lal has 31 years of professional experience in senior roles across financial services, including banking, consulting, real estate, private equity and restructuring. He has led institutions across business development, strategy as well as operations.
            </p>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
            <?php include('footer.php'); ?>


</body>

</html>