<?php
include('sadmin/connection.php');
if(isset($_POST['submit'])){
    $fullName = $_POST['fullName'];
    $companyName = $_POST['companyName'];
    $contactNo = $_POST['contactNo'];
    $email = $_POST['email'];
    $location = $_POST['location'];
    $message = $_POST['message'];

    $query = "INSERT INTO contactForm (fullName, companyName, contactNo, email, location, message) VALUES ('$fullName', '$companyName', '$contactNo', '$email', '$location', '$message')";
    $sql = mysqli_query($conn, $query);
    if($sql){
        $to      = "wecare@apollopipes.com";
        $subject = "Website - Entry received from Contact Page";
            $message = 'Hello Admin, Here are the details of enquiry we received:<br>
            <table class="email-table" width="70%" style="border:1px #676767 solid">
                <tr>
                    <td style="padding: 15px 20px;">Name:</td>
                    <td style="padding: 15px 20px;">'.$fullName.',</td>
                </tr>
                <tr style="background-color: #f7f7f7;">
                    <td style="padding: 15px 20px;">Company Name:</td>
                    <td style="padding: 15px 20px;">'.$companyName.',</td>
                </tr>
                <tr>
                    <td style="padding: 15px 20px;">Contact Number:</td>
                    <td style="padding: 15px 20px;">'.$contactNo.',</td>
                </tr>
            
                <tr style="background-color: #f7f7f7;">
                    <td style="padding: 15px 20px;">Email:</td>
                    <td style="padding: 15px 20px;">'.$email.',</td>
                </tr>
            
                <tr>
                    <td style="padding: 15px 20px;">Location:</td>
                    <td style="padding: 15px 20px;">'.$location.',</td>
                </tr>
            
                <tr style="background-color: #f7f7f7;">
                    <td style="padding: 15px 20px;">Message:</td>
                    <td style="padding: 15px 20px;">'.$message.'.</td>
                </tr>
            </table>

            Thanks';
        $headers = "From: noreply@apollopipes.com" . "\r\n" . "BCC: dheeraj.brandbazooka@gmail.com" . "\r\n" . "MIME-Version: 1.0" . "\r\n" . "Content-type: text/html;charset=UTF-8";
        if(mail($to, $subject, $message, $headers)){
            echo '<script>alert("Thank You! We received your request and will revert you soon.");</script>';
        }else{
            echo '<script>alert("Thank You! We received your request and will revert you soon.");</script>';
        }
    }else{
      echo '<script>alert("Some error occurred, please try again later.");</script>';
    }
}
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
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>

</head>

<body>
    <?php include('header.php'); ?>

    <div id="main-content" style="overflow: hidden;">
        

        <section class="product-top-header">
         <div class="container-fuid">
            <div class="row">
               <div class="col-md-12 text-center aos-init aos-animate" data-aos="fade-down">
                  <h1>CONTACT US</h1>
               </div>
            </div>
         </div>
      </section>

        <!--<section class="pt-2 pb-2 bg-white">-->
        <!--    <div class="container">-->
        <!--        <div class="row">-->
        <!--            <div class="col-md-8">-->
        <!--                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">-->
        <!--                    <ol class="breadcrumb bg-white ml-0">-->
        <!--                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>-->
        <!--                        <li class="breadcrumb-item active" aria-current="page">-->
        <!--                            <a href="">Contact Us</a>-->
        <!--                        </li>-->
        <!--                    </ol>-->
        <!--                </nav>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</section>-->

        <section style="overflow: hidden;">
            <div class="container mt-5">
                <div class="five-div" data-aos="fade-right" data-aos-delay="50">
                    <img src="img/address.png" class="img-fluid" />
                    <div class="map-heading">ADDRESS</div>
                    <div class="map-text"><b>Corporate Office:</b> <br>A-140, Sector 136, Noida, Uttar Pradesh - 201301</div>
                </div>
                <a href="mailto:wecare@apollopipes.com">
                <div class="five-div" data-aos="fade-right" data-aos-delay="100">
                    <img src="img/email.png" class="img-fluid" />
                    <div class="map-heading">E-MAIL</div>
                    <div class="map-text">wecare@apollopipes.com</div>
                </div>
                </a>
                <a href="tel:18001213737">
                <div class="five-div" data-aos="fade-right" data-aos-delay="150">
                    <img src="img/phone1.png" class="img-fluid" />
                    <div class="map-heading">PHONE</div>
                    <div class="map-text">+91 0120 6587777</div>
                    <div class="map-text mt-2"> <b>Toll Free No.:</b><br>1800 121 3737</div>
                </div>
                </a>
                <a href="https://api.whatsapp.com/send?phone=918130098024&amp;text=Hey, We're interested in your products." target="_blank">
                <div class="five-div" data-aos="fade-right" data-aos-delay="200">
                    <img src="img/whatsapp-web.png" class="img-fluid" />
                    <div class="map-heading">Whatsapp</div>
                    <div class="map-text">+91 81300 98024</div>
                </div>
                </a>
                <div class="five-div " data-aos="fade-right" data-aos-delay="300">
                    <img src="img/timing.png" class="img-fluid" />
                    <div class="map-heading">TIMING</div>
                    <div class="map-text">
                        Available at<br />
                        9:30 am to 6:00 pm
                    </div>
                </div>
            </div>
        </section>

        <section class="mt-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-12" data-aos="fade-up">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15304482.477374068!2d67.5819704243225!3d20.528928175151627!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cec992077b947%3A0x98b2549231c6fa0f!2sApollo%20Pipes%20Limited!5e0!3m2!1sen!2sin!4v1619155535491!5m2!1sen!2sin"
                            width="100%"
                            height="350"
                            style="border: 0;"
                            allowfullscreen=""
                            loading="lazy"
                        ></iframe>
                    </div>
                </div>
            </div>
        </section>

        <section class="mt-5 p-3">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 contact">
                        <form action="#" method="POST">
                            <div class="form-group text-left" data-aos="fade-left" data-aos-delay="50">
                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Full Name" name="fullName" required="" />
                            </div>
                            <div class="form-group text-left" data-aos="fade-left" data-aos-delay="100">
                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Company Name" name="companyName" required="" />
                            </div>
                            <div class="form-group text-left" data-aos="fade-left" data-aos-delay="150">
                                <input type="phone" class="form-control" id="exampleFormControlInput1" placeholder="Contact No" name="contactNo" required="" />
                            </div>
                            <div class="form-group text-left" data-aos="fade-left" data-aos-delay="200">
                                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Email" name="email" required=""/>
                            </div>

                            <div class="form-group text-left" data-aos="fade-left" data-aos-delay="250">
                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Location" name="location" required=""/>
                            </div>
                            <div class="form-group" data-aos="fade-left" data-aos-delay="300">
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="7" placeholder="Message" name="message" required=""></textarea>
                            </div>
                            <div class="form-group mt-5" data-aos="fade-left" data-aos-delay="350">
                            <div class="g-recaptcha" data-sitekey="6Lc7zGYcAAAAAPe9t4aJnbizR3BtgHMlkIM36Sys"></div>
                            </div>
                            <div class="form-group mt-5">
                                <input type="submit" class="form-submit" name="submit" value="Submit">
                            </div>
                        </form>
                    </div>

                    <div class="col-md-7 location-address">
                        <h1 class="location">Manufacturing Locations</h1>

                        <div class="mt-4" data-aos="fade-right" data-aos-delay="50">
                            <div class="fa-icon"><img src="img/location.png" /></div>
                            <div class="address">
                                <p class="com-name">Apollo Pipes Ltd</p>
                                <p class="com-address">
                                    Plot (Khasra) No- 2928 & 2938 Dhoom<br />
                                    Manikpur, Dadri Distt.
                                    <span class="text-black add-bold">
                                        Gautam Budh Nagar,<br />
                                        Uttar Pradesh
                                    </span>
                                    - 203207
                                </p>
                            </div>
                        </div>

                        <div class="mt-4" data-aos="fade-right" data-aos-delay="100">
                            <div class="fa-icon"><img src="img/location.png" /></div>
                            <div class="address">
                                <p class="com-name">Apollo Pipes Ltd</p>
                                <p class="com-address">
                                    D-20 & E-6, Industrial Area.<br />
                                    Sikandrabad,<br />
                                    <span class="text-black add-bold">
                                        Bulandsahar - U.P.
                                    </span>
                                    - 203205
                                </p>
                            </div>
                        </div>

                        <div class="mt-4" data-aos="fade-right" data-aos-delay="150">
                            <div class="fa-icon"><img src="img/location.png" /></div>
                            <div class="address">
                                <p class="com-name">Apollo Pipes Ltd</p>
                                <p class="com-address">
                                    359 & 374, Off Rajkot Highway,<br />
                                    Taluka-Bavla<br />
                                    Distt -
                                    <span class="text-black add-bold">
                                        Ahemdabad
                                    </span>
                                    - 382220
                                </p>
                            </div>
                        </div>

                        <div class="mt-4" data-aos="fade-right" data-aos-delay="200">
                            <div class="fa-icon"><img src="img/location.png" /></div>
                            <div class="address">
                                <p class="com-name">Apollo Pipes Ltd</p>
                                <p class="com-address">
                                    Plot No.172B & 173A, Vasanthanaraspura<br />
                                    Industrial Area Village - Nagenahalli,<br />
                                    Kora Hobli, Tumkur, Taluk, Tumakuru<br />
                                    (Tumkur),
                                    <span class="text-black add-bold">
                                        Karnataka
                                    </span>
                                    - 572128
                                </p>
                            </div>
                        </div>
                        
                        <div class="mt-4" data-aos="fade-right" data-aos-delay="200">
                            <div class="fa-icon"><img src="img/location.png" /></div>
                            <div class="address">
                                <p class="com-name">Apollo Pipes Ltd</p>
                                <p class="com-address">
                                    P.C.98/24, Village - Sankara, Dharsiwa,<br> Bilaspur Road, Tehsil - Raipur, Raipur<br>
                                    <span class="text-black add-bold">
                                        Chhattisgarh
                                    </span>
                                    - 493221
                                </p>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </section>

        <section data-aos="fade-down" data-aos-delay="50">
            <div class="row">
                <div class="col-md-12">
                    <img src="img/contact-us-design.png" class="img-fluid" />
                </div>
            </div>
        </section>

        <?php include('footer.php'); ?>


</body>

</html>