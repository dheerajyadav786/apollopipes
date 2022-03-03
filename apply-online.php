<?php
include('sadmin/connection.php');
// $url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
// if (strpos($url,'car') !== false) {echo 'Car exists.';}

if(isset($_POST['submit'])){
    $position = $_POST['position'];
    $jobTitle = $_POST['jobTitle'];
    $fullName = $_POST['fullName'];
    $dob = $_POST['dob'];
    $contactNo = $_POST['contactNo'];
    $email = $_POST['email'];
    $education = $_POST['education'];
    $address = $_POST['address'];
    $companyName = $_POST['companyName'];
    $years = $_POST['years'];
    $resumeFile = $_FILES['resumeFile']['name'];
    $file_tmp1 = $_FILES['resumeFile']['tmp_name'];
    move_uploaded_file($file_tmp1,"resumes/".$resumeFile);

    $query = "INSERT INTO careerForm (position, jobTitle, fullName, dob, contactNo, email, education, address, companyName, years, resumeFile) VALUES ('$position', '$jobTitle', '$fullName', '$dob', '$contactNo', '$email', '$education', '$address', '$companyName', '$years', '$resumeFile')";
    $sql = mysqli_query($conn, $query);
    // echo mysqli_error($conn);
    // die();
    if($sql){
        $to      = "careers@apollopipes.com";
        $subject = "Website - Entry received from Enquiry Page";
        $message = 'Hello Admin, Here are the details of enquiry we received:
            <table class="email-table" width="70%" style="border:1px #676767 solid">
                <tr>
                   <td style="padding: 15px 20px;">Position:</td> <td style="padding: 15px 20px;">'.$position.',</td>
                </tr>
                <tr style="background-color: #f7f7f7;">
                   <td style="padding: 15px 20px;">Job Title: </td> <td style="padding: 15px 20px;">'.$jobTitle.',</td>
                </tr>
                <tr>
                   <td style="padding: 15px 20px;">Name: </td> <td style="padding: 15px 20px;">'.$fullName.',</td>
                </tr>
                <tr style="background-color: #f7f7f7;">
                   <td style="padding: 15px 20px;">DOB:</td> <td style="padding: 15px 20px;"> '.$dob.',</td>
                </tr>
                <tr>
                   <td style="padding: 15px 20px;">Contact Number: </td> <td style="padding: 15px 20px;">'.$contactNo.',</td>
                </tr> 
                <tr style="background-color: #f7f7f7;">
                   <td style="padding: 15px 20px;">Email: </td> <td style="padding: 15px 20px;">'.$email.',</td>
                </tr> 
                <tr>
                   <td style="padding: 15px 20px;">Education: </td> <td style="padding: 15px 20px;">'.$education.',</td>
                </tr> 
                <tr style="background-color: #f7f7f7;">
                   <td style="padding: 15px 20px;">Company Name:</td> <td style="padding: 15px 20px;"> '.$companyName.',</td>
                </tr>
                <tr>
                   <td style="padding: 15px 20px;">Years:</td> <td style="padding: 15px 20px;"> '.$years.'.</td>
                </tr>
                </table>
                Thanks';
        $headers = "From: noreply@apollopipes.com" . "\r\n" . "BCC: dheeraj.brandbazooka@gmail.com" . "\r\n" . "MIME-Version: 1.0" . "\r\n" . "Content-type: text/html;charset=UTF-8";
        if(mail($to, $subject, $message, $headers)){
            echo '<script>alert("Thank You! We received your request and will revert you soon.");</script>';
        }else{
            echo '<script>alert("Thank You! We received your request.");</script>';
        }
    }else{
        echo'<script>alert("Some error occurred, please try again later.");</script>';
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
                  <img src="img/career.jpg" alt="Apply Online" width="1100" height="500" class="aos-init aos-animate" data-aos="fade-down">
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
                        <a href="apply-online.php#career"><button data-aos="fade-up" data-aos-delay="100" class="<?php if (strpos($url,'apply-online') !== yes) {echo 'news-media-active';} ?> aos-init aos-animate">Apply Online</button></a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-8 offset-md-2 offset-lg-2">
                  <p class="text-center mt-4">We offer high growth potential to qualified personnel willing to make career with Apollo Pipes Limited. Deserving candidates may send their resumes to: <span class="email-hl"> careers@apollopipes.com<span></p>
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
                           <a href="">News & Media</a>
                        </li>
                     </ol>
                  </nav>
               </div>
            </div>
         </div>
      </section>
      <section>
         <div class="row">
            <div class="col-md-8 offset-md-2 offset-lg-2 mt-5 text-center enquery mb-5">
               <div class="">
                  <p class="indicate"><span class="indicate-red">*</span> Required</p>
               </div>
               <form action="#" method="POST" enctype="multipart/form-data">
                  <div class="row">
                     <div class="col-md-12">
                        <div class="form-group text-left" data-aos="fade-right" data-aos-delay="250">
                           <label for="exampleFormControlSelect1">*Position</label>
                           <select class="form-control" id="exampleFormControlSelect1" name="position" required="">
                              <option>Select Position</option>
                              <option value="Manufacturing">Manufacturing</option>
                              <option value="Sales & Marketing">Sales & Marketing</option>
                              <option value="Finance & Accounts">Finance & Accounts</option>
                              <option value="Procurement">Procurement</option>
                              <option value="Procurement">Information Technology</option>
                           </select>
                        </div>
                        <div class="form-group text-left" data-aos="fade-right" data-aos-delay="350">
                           <label for="exampleFormControlInput1">* Job title/Functional area applying for :</label>
                           <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" placeholder="Required Field" name="jobTitle" required=""></textarea>
                        </div>
                        <div class="form-group text-left" data-aos="fade-right" data-aos-delay="50">
                           <label for="exampleFormControlInput1">* Your Name</label>
                           <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Your Name" name="fullName" required=""/>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="form-group text-left" data-aos="fade-right" data-aos-delay="100">
                           <label for="exampleFormControlInput1">* Date of Birth (DD/MM/YY)</label>
                           <input type="date" class="form-control" id="exampleFormControlInput1" placeholder="Required Field" name="dob" required="" />
                        </div>
                        <div class="form-group text-left" data-aos="fade-right" data-aos-delay="100">
                           <label for="exampleFormControlInput1">*Contact No.</label>
                           <input type="phone" class="form-control" id="exampleFormControlInput1" placeholder="+91 1234 567890" name="contactNo" required="" />
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="form-group text-left" data-aos="fade-right" data-aos-delay="150">
                           <label for="exampleFormControlInput1">* Your E-Mail</label>
                           <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Required Field" name="email" required="" />
                        </div>
                        <div class="form-group text-left" data-aos="fade-right" data-aos-delay="100">
                           <label for="exampleFormControlInput1">* Education</label>
                           <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="(Highest pro. qualification / degree)" name="education" required="" />
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="form-group text-left" data-aos="fade-right" data-aos-delay="200">
                           <label for="exampleFormControlInput1">* Address</label>
                           <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Required Field" name="address" required="" />
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="form-group text-left" data-aos="fade-right" data-aos-delay="150">
                           <label for="exampleFormControlInput1">* Work Experience <span style="font-size: 6px">(Write Fresher In case of no experience)</span></label>
                           <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Company Name" name="companyName" required="" />
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="form-group text-left" data-aos="fade-right" data-aos-delay="100">
                           <label for="exampleFormControlInput1">* No. of Years</label>
                           <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Required Field" name="years" required="" />
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="form-group text-left" data-aos="fade-right" data-aos-delay="200">
                           <label for="exampleFormControlInput1">* Upload Resume (Upload in doc, docx, pdf format only)</label>
                           <input type="file" class="form-control" id="exampleFormControlInput1" placeholder="Required Field" name="resumeFile" required="" />
                        </div>
                        <div class="g-recaptcha mt-5" data-sitekey="6Lc7zGYcAAAAAPe9t4aJnbizR3BtgHMlkIM36Sys"></div>
                        <div class="form-group mt-5" data-aos="fade-right" data-aos-delay="400">
                           <input type="submit" name="submit" value="Submit" class="form-submit">
                        </div>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </section>
      <?php include('footer.php'); ?>
   </body>
</html>