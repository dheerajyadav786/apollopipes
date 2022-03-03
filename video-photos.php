<!DOCTYPE html>
<html>
<head>
    <title>Videos & Photos</title>
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
        <section>
            <div id="demo" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/news-media.jpg" alt="Los Angeles" width="1100" height="500" class="animate__animated animate__pulse" />
                        <div class="carousel-caption">
                            <div class="col-md-12 mt-5">
                                <h1 class="text-black animate__animated animate__backInDown">News & Media</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <div class="container">

                <div class="row mt-5">
                    <div class="col-md-8 offset-md-2 offset-lg-2 mb-4">
                        <div class="row text-center news-media">
                        <div class="col-md-12 p-0">
                        <a href="upcoming-event.php"><button data-aos="fade-up" data-aos-delay="50">Upcoming Events</button></a>
                        <a href="news-media.php"><button data-aos="fade-up" data-aos-delay="100">Press Release</button></a>
                        <a href="video-photos.php"><button data-aos="fade-up" data-aos-delay="150" class="news-media-active">Video / photos</button></a>
                    </div>
                </div>
                </div>
            </div>
        </div>

        <section class="video-section">
            <div class="container">

                <div class="row">
                    <div class="col-md-12 text-center">
                        <h1>No videos available for now</h1>
                    </div>
                </div>
            </div>
        </section>

        
<?php include('footer.php'); ?>


</body>

</html>