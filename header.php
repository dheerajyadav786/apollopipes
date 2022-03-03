<?php
if ($_SERVER['HTTPS'] != "on") {
    header("Location: https://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
}

?>

<style>
    .product-image img{
            border: 1px #000 solid;
    }
</style>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-210097947-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-210097947-1');
</script>


<div id="navbar-container">
    <section class="top-header menu-desktop">
        <div class="container">
            <div class="row text-center text-md-left text-lg-left">
                <div class="col-md-4 text-uppercase text-white">
                    <span><a href="search.php"><i class="fa fa-search orange" aria-hidden="true"></i> Search</a></span>
                    <span class="tollleft"><i class="fa fa-phone orange" aria-hidden="true"></i> Toll Free: <a href="tel:18001213737">1800-121-3737</a></span>
                </div>
                <div class="col-md-2"></div>
                <div class="col-md-6 text-uppercase text-white">
                    <ul>
                        <li><a href="https://api.whatsapp.com/send?phone=918130098024&text=Hey, We're interested in your products." target="_blank"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>
                        <li><a href="https://www.facebook.com/APLAPOLLO/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="https://www.youtube.com/channel/UC_VuCZ7Nr4VsfoS81V063Ig?view_as=subscriber" target="_blank"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                        <li><a href="https://www.instagram.com/apl_apollo/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        <li><a href="https://twitter.com/ApolloPipes" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="https://www.linkedin.com/company/2387993" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        <!--<li class="" class="dropdown btn btn-primary dropdown-toggle" data-toggle="dropdown">-->
                        <!--    ENG <i class="fa fa-chevron-down" aria-hidden="true"></i>-->
                        <!--    <div class="dropdown-menu language-dropdown">-->
                        <!--        <a class="dropdown-item" href="#">Hindi</a>-->
                        <!--        <a class="dropdown-item" href="#">Marathi</a>-->
                        <!--        <a class="dropdown-item" href="#">Gujarati</a>-->
                        <!--        <a class="dropdown-item" href="#">Bengali</a>-->
                        <!--        <a class="dropdown-item" href="#">Karnataka</a>-->
                        <!--    </div>-->
                        <!--</li>-->
                        <li><a href="https://www.bseindia.com/stock-share-price/apollo-pipes-ltd/apollopipes/531761/" target="_blank">BSE</a></li>
                        <li><a href="https://www.nseindia.com/get-quotes/equity?symbol=APOLLOPIPE" target="_blank">NSE</a></li>
                        <li><a class="nav-link p-0" href="contact.php">CONTACT US</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white menu-desktop">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light p-0">
                <a class="navbar-brand animate__animated animate__heartBeat" href="index.php"><img src="img/35-yrs-logo.png" /></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="navbar navbar-expand-md collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav m-auto">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="index.php">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">ABOUT US</a>
                        </li>
                        <li class="nav-item dropdown has-mega-menu">
                            <a class="nav-item dropdown has-mega-menu nav-link text-body p-0" href="#">
                                <a class="nav-link text-body" href="products.php" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">PRODUCTS</a>
                            </a>
                            <div class="dropdown-menu">
                                <div class="px-0 top-m">
                                    <div class="row">
                                        <div class="col-md-4">

                                          <div>
                                            <p class="menu-title">Plumbing</p>
                                            <a class="dropdown-item" href="cpvc-plumbing-system.php">
                                                CPVC Plumbing System
                                            </a>
                                            <a class="dropdown-item" href="upvc-plumbing-system.php"> <span class="text-lowercase pr-0">u</span>PVC Plumbing System </a>

                                          </div>
                                            <div class="mt-3 mb-3">
                                                <p class="menu-title">Borewell System</p>
                                            <a class="dropdown-item" href="column-pipes.php">
                                                  COLUMN PIPES
                                            </a>
                                            <a class="dropdown-item" href="casing-pipes.php">
                                                Casing PIPES
                                            </a>
                                          </div>
                                        </div>
                                        <div class="col-md-4">
                                          <div>
                                            <p class="menu-title">Agriculture System</p>
                                            <a class="dropdown-item" href="pressure-pipes-and-fittings.php">
                                                Pressure PIPES & FITTINGS
                                            </a>
                                            <a class="dropdown-item" href="hdpe-pipes-and-coils.php">
                                                HDPE Pipes AND COILS
                                            </a>
                                            <a class="dropdown-item" href="sprinkler-system.php">
                                                Sprinkler System
                                            </a>
                                            </div>

                                              
                                        </div>
                                        <div class="col-md-4">
                                            <div>
                                            <p class="menu-title">Sewerage</p>
                                            <a class="dropdown-item" href="swr-drainage-system.php">
                                                 SWR Drainage System
                                            </a>
                                            <a class="dropdown-item" href="underground-drainage-system.php">
                                                 Underground Drainage System
                                            </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <p class="menu-title">Bath fittings</p>
                                            <a class="dropdown-item" href="faucets.php">
                                                Faucets
                                            </a>
                                            <a class="dropdown-item" href="showers.php">
                                                Showers
                                            </a>
                                            <a class="dropdown-item" href="health-faucets.php">
                                                Health Faucets
                                            </a>
                                            <a class="dropdown-item" href="cisterns.php">
                                                Cisterns
                                            </a>
                                            <a class="dropdown-item" href="seat-covers.php">
                                                Seat Covers
                                            </a>
                                            <a class="dropdown-item" href="allied.php">
                                                Allied Products
                                            </a>
                                            <a class="dropdown-item" href="bathroom-accessories.php">
                                                Accessories
                                            </a>
                                        </div>
                                        <div class="col-md-4">
                                            <p class="menu-title">Water Storage</p>
                                            <a class="dropdown-item" href="water-tanks.php">
                                                Water Tanks
                                            </a>
                                        </div>
                                        <div class="col-md-4">
                                            <div>
                                            <p class="menu-title">Adhesives</p>
                                            <a class="dropdown-item" href="solvent-cement.php">
                                                Solvent Cement
                                            </a>
                                            </div>
                                            <div class="mt-5" style="padding-top:42px">
                                            <p class="menu-title">Home Solutions</p>
                                            <a class="dropdown-item" href="kitchen-sinks.php">
                                                Kitchen Sinks
                                            </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="nav-item">
                            <div class="dropdown">
                                <a class="nav-link dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" href="">PRODUCT APPLICATIONS</a>
                                <div class="dropdown-menu application" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="plumbing.php">PLUMBING</a>
                                    <a class="dropdown-item" href="agriculture.php">AGRICULTURE</a>
                                    <a class="dropdown-item" href="industrial.php">INDUSTRIAL</a>
                                    <a class="dropdown-item" href="sewerage.php">SEWERAGE</a>
                                    <a class="dropdown-item" href="borewell-system.php">BOREWALL SYSTEM</a>
                                    <a class="dropdown-item" href="water-solutions.php">WATER SOLUTIONS</a>
                                    <a class="dropdown-item" href="bath-fittings.php">BATH FITTINGS</a>
                                    <a class="dropdown-item d-none" href="home-solutions.php">HOME SOLUTIONS</a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="investor-relations.php">INVESTOR RELATIONS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="news-media.php">NEWS & MEDIA</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="current-openings.php">CAREERS</a>
                        </li>
                    </ul>
                </div>
                <a class="navbar-brand" href="#">
                    <img src="img/apl-apollo-logo.png" />
                </a>
            </nav>
        </div>
    </section>
</div>

<div id="navbar-container" class="sticky">
    <section class="top-header menu-mobile">
        <div class="container">
            <div class="row text-center text-md-left text-lg-left">
                <div class="col-md-4 text-uppercase text-white">
                    <span><i class="fa fa-search orange" aria-hidden="true"></i>Search</span>
                    <span class="ml-4"><i class="fa fa-phone orange" aria-hidden="true"></i> Toll Free: 1800-121-3737</span>
                </div>
                <div class="col-md-3"></div>
                <div class="col-9 m-auto text-uppercase text-white pt-2 pb-2">
                    <ul>
                        <li class="ml-0"><i class="fa fa-whatsapp" aria-hidden="true"></i></li>
                        <li><i class="fa fa-facebook" aria-hidden="true"></i></li>
                        <li><i class="fa fa-youtube-play" aria-hidden="true"></i></li>
                        <li><i class="fa fa-instagram" aria-hidden="true"></i></li>
                        <li><i class="fa fa-twitter" aria-hidden="true"></i></li>
                        <li><i class="fa fa-linkedin" aria-hidden="true"></i></li>
                    </ul>
                </div>
                </div>
                <div class="row">
                <div class="col-8 m-auto">
                    <ul>
                        <li class="nav-item ml-0">BSE</li>
                        <li class="nav-item">NSE</li>
                        <li class="nav-item">
                        <a class="nav-link p-0 text-white" href="contact.php">CONTACT US</a>
                    </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="menu-mobile">
        <nav class="navbar navbar-expand-md navbar-dark" style="background: #fff;">
            <a class="navbar-brand animate__animated animate__heartBeat" href="index.php">
                <img src="img/35-yrs-logo.png" /> <span class="ml-5"><img src="img/apl-apollo-logo.png" width="120" /></span>
            </a>
            <button class="navbar-toggler mr-1" type="button" data-toggle="collapse" data-target="#collapsibleNavbar" style="background: #000 !important;">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav m-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">ABOUT US</a>
                    </li>
                    <li class="nav-item dropdown has-mega-menu">
                        <a class="nav-item dropdown has-mega-menu nav-link text-body p-0" href="#">
                            <a class="nav-link text-body" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">PRODUCTS</a>
                        </a>
                        <div class="dropdown-menu">
                                <div class="px-0 top-m">
                                    <div class="row">
                                        <div class="col-md-4">

                                          <div>
                                            <p class="menu-title">Plumbing</p>
                                            <a class="dropdown-item" href="single-product.php?id=1">
                                                CPVC Plumbing System
                                            </a>
                                            <a class="dropdown-item" href="single-product.php?id=2"> <span class="text-lowercase pr-0">u</span>PVC Plumbing System </a>

                                          </div>
                                            <div class="mt-2">
                                                <p class="menu-title">Borewell System</p>
                                            <a class="dropdown-item" href="column-pipes.php">
                                                  COLUMN PIPES
                                            </a>
                                            <a class="dropdown-item" href="casing-pipes.php">
                                                Casing PIPES
                                            </a>
                                          </div>
                                        </div>
                                        <div class="col-md-4">
                                          <div>
                                            <p class="menu-title">Agriculture System</p>
                                            <a class="dropdown-item" href="pressure-pipes-and-fittings.php">
                                                Pressure PIPES & FITTINGS
                                            </a>
                                            <a class="dropdown-item" href="hdpe-pipes-and-coils.php">
                                                HDPE Pipes
                                            </a>
                                            <a class="dropdown-item" href="sprinkler-system.php">
                                                Sprinkler System
                                            </a>
                                            </div>

                                              
                                        </div>
                                        <div class="col-md-4">
                                            <p class="menu-title">Sewerage</p>
                                            <a class="dropdown-item" href="swr-drainage-system.php">
                                                 SWR Drainage System
                                            </a>
                                            <a class="dropdown-item" href="underground-drainage-system.php">
                                                Underground Drainage System
                                            </a>
                                        </div>
                                    </div>

                                    <div class="row mt-1">
                                        <div class="col-md-4">
                                            <p class="menu-title">Bath fittings</p>
                                            <a class="dropdown-item" href="faucets.php">
                                                Faucets
                                            </a>
                                            <a class="dropdown-item" href="showers.php">
                                                Showers
                                            </a>
                                            <a class="dropdown-item" href="health-faucets.php">
                                                Health Faucets
                                            </a>
                                            <a class="dropdown-item" href="cisterns.php">
                                                Cisterns
                                            </a>
                                            <a class="dropdown-item" href="seat-covers.php">
                                                Seat Covers
                                            </a>
                                            <a class="dropdown-item" href="allied.php">
                                                Alied Products
                                            </a>
                                            <a class="dropdown-item" href="bathroom-accessories.php">
                                                Accessories
                                            </a>
                                        </div>
                                        <div class="col-md-4">
                                            <p class="menu-title">Water Storage</p>
                                            <a class="dropdown-item" href="water-tanks.php">
                                                Water Tanks
                                            </a>
                                        </div>
                                        <div class="col-md-4">
                                            <div>
                                            <p class="menu-title">Adhesives</p>
                                            <a class="dropdown-item" href="solvent-cement.php">
                                                Solvent Cement
                                            </a>
                                            </div>
                                            <div class="mt-3 pt-2">
                                            <p class="menu-title">Home Solutions</p>
                                            <a class="dropdown-item" href="kitchen-sinks.php">
                                                Kitchen Sinks
                                            </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </li>
                    <li class="nav-item">
                        <div class="dropdown">
                            <a class="nav-link dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" href="">PRODUCT APPLICATIONS</a>
                            <div class="dropdown-menu application" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="plumbing.php">PLUMBING</a>
                                <a class="dropdown-item" href="agriculture.php">AGRICULTURE</a>
                                <a class="dropdown-item" href="industrial.php">INDUSTRIAL</a>
                                <a class="dropdown-item" href="sewerage.php">SEWERAGE</a>
                                <a class="dropdown-item" href="borewell-system.php">BOREWALL SYSTEM</a>
                                <a class="dropdown-item" href="water-solutions.php">WATER SOLUTIONS</a>
                                <a class="dropdown-item" href="">BATH FITTINGS</a>
                                <a class="dropdown-item d-none" href="home-solutions.php">HOME SOLUTIONS</a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="investor-relations.php">INVESTOR RELATIONS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="news-media.php">NEWS & MEDIA</a>
                    </li>
                    <li class="nav-item">
                            <a class="nav-link" href="current-openings.php">CAREERS</a>
                        </li>
                </ul>
            </div>
        </nav>
    </section>
</div>