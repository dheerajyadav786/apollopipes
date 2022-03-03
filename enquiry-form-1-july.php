<?php
include('sadmin/connection.php');
if(isset($_POST['submit'])){
    $fullName = $_POST['fullName'];
    $contactNo = $_POST['contactNo'];
    $email = $_POST['email'];
    $city = $_POST['city'];
    $requirement = $_POST['requirement'];
    $product = $_POST['product'];
    $message = $_POST['message'];

    $query = "INSERT INTO enquiryForm (fullName, contactNo, email, city, requirement, product, message) VALUES ('$fullName', '$contactNo', '$email', '$city', '$requirement', '$product', '$message')";
    $sql = mysqli_query($conn, $query);
    if($sql){
      echo '<script>alert("Thank You! We received your request.");</script>';
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
        <section class="product-top-header blue">
            <div class="container-fuid">
                <div class="row">
                    <div class="col-md-12 text-center animate__animated animate__backInDown">
                        <h1>Reach out to us for any query</h1>
                    </div>
                </div>
            </div>
        </section>

        <section class="pt-2 pb-2 bg-white">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                            <ol class="breadcrumb bg-white ml-0">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    <a href="">Enquiry Form</a>
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="col-md-8 offset-md-2 offset-lg-2 mt-5 text-center enquery mb-5">
                <div class="">
                    <p class="intro-p" data-aos="fade-right" data-aos-delay="50">Talk to us</p>
                    <h1 class="intro text-black" data-aos="fade-left" data-aos-delay="100">
                        <span class="pr-3"><img src="img/phone.png" /></span>Toll Free No. : 1800 121 3737
                    </h1>
                    <p class="intro-p enquery-p" data-aos="fade-right" data-aos-delay="150">
                        <span class="pr-3"><img src="img/whatsapp-icon.png" /></span> +91 81300 98024
                    </p>
                    <p class="intro-p enquery-p" data-aos="fade-left" data-aos-delay="200">
                        <span class="pr-3"><img src="img/email-icon.png" /></span> wecare@apollopipes.com
                    </p>
                </div>

                <form action="#" method="POST">
                    <div class="form-group text-left" data-aos="fade-right" data-aos-delay="50">
                        <label for="exampleFormControlInput1">Full Name</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Required Field" name="fullName" required="" />
                    </div>
                    <div class="form-group text-left" data-aos="fade-right" data-aos-delay="100">
                        <label for="exampleFormControlInput1">Contact No.</label>
                        <input type="phone" class="form-control" id="exampleFormControlInput1" placeholder="Required Field" name="contactNo" required="" />
                    </div>
                    <div class="form-group text-left" data-aos="fade-right" data-aos-delay="150">
                        <label for="exampleFormControlInput1">Email address</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Required Field" name="email" required="" />
                    </div>

                    <div class="form-group text-left" data-aos="fade-right" data-aos-delay="200">
                        <label for="exampleFormControlInput1">City</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Required Field" name="city" required="" />
                    </div>
                    <div class="form-group text-left" data-aos="fade-right" data-aos-delay="250">
                        <label for="exampleFormControlSelect1">Requirement</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="requirement" required="">
                            <option value="Distribution Partner">Distribution Partner</option>
                            <option value="Distribution Partner">Distribution Partner</option>
                        </select>
                    </div>

                    <div class="form-group text-left" data-aos="fade-right" data-aos-delay="300">
                        <label for="exampleFormControlSelect1">Products</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="product" required="">
                            <option value="CPVC Pipes & Fittings">CPVC Pipes & Fittings</option>
                            <option value="CPVC Pipes & Fittings">CPVC Pipes & Fittings</option>
                        </select>
                    </div>
                    <div class="form-group" data-aos="fade-right" data-aos-delay="350">
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="7" placeholder="Message" name="message"></textarea>
                    </div>
                    <div class="g-recaptcha" data-sitekey="6LdlM-EUAAAAADHwV7FHxPUa6Qmt4SdSP_lcBEY9"></div>
                    <div class="form-group mt-5" data-aos="fade-right" data-aos-delay="400">
                        <input type="submit" class="form-submit" name="submit" value="Submit">
                    </div>
                </form>
            </div>
        </section>

        <?php include('footer.php'); ?>


</body>

</html>