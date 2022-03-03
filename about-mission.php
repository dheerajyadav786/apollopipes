<!DOCTYPE html>
<html>
<head>
    <title>Apl Apollo - About Mission</title>
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
            
        <section class="video" data-aos="fade-down">
            <div class="col-md-12 p-0">
            <video width="100%" autoplay="autoplay" loop muted>
              <source src="video/about-revised.mp4" type="video/mp4">
              <source src="video/about-revised.ogg" type="video/ogg">
              Your browser does not support HTML5 video.
            </video>
            </div>
        </section>
        
            <section class="about-apollo" id="about">
                <div class="container-fuid">
                    
                    
                    <?php include('about-nav-mobile.php'); ?>

                    <div class="row">
                        <div class="col-md-8 offset-md-2 offset-lg-2 text-center">
                            <p class="mission-p pt-5">"What we do today leads us to the tomorrow that we dream of"</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 offset-md-2 offset-lg-2 text-center p-4">
                            <div class="row">
                                <div class="col-md-6" data-aos="fade-left">
                                    <img src="img/about-mission1.jpg" alt="Mission" class="img-fluid" />
                                    <h1 class="about-h1 text-md-left text-lg-left text-center">Mission</h1>
                                    <p class="text-md-left text-lg-left text-center mt-4">
                                        To achieve a leading position in the Global Market by providing top quality and innovative products across segments. To expand into new territories and verticals using cutting-edge technologies and follow best business practices to meet customer expectations.
                                    </p>
                                </div>
                                <div class="col-md-6" data-aos="fade-right">
                                    <img src="img/about-vision.jpg" alt="Vision" class="img-fluid" />
                                    <h1 class="about-h1 text-md-left text-lg-left text-center">Vision</h1>
                                    <p class="text-md-left text-lg-left text-center mt-4">
                                        To become a 200 million USD business by the year 2025 and to make a name in the global arena by following the three-step formula of hard work, focus on quality, and an incessant urge to innovate.
                                    </p>
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
                                    <aside class="callout warning about-active">
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
                                    <aside class="callout success">
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

            <?php include('footer.php'); ?>


</body>

</html>