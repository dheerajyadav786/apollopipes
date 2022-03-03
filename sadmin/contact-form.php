<?php
include('connection.php');
session_start();
if(!($_SESSION['username'])){
  header('Location: login');
}

?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Apollo Pipes admin panel created by Rajat Kumar">
  <meta name="author" content="Apollo Pipes">
  <title>Newsletter</title>
  <?php include('head.php'); ?>
  <style>
    .ck-rounded-corners .ck.ck-editor__main>.ck-editor__editable, .ck.ck-editor__main>.ck-editor__editable.ck-rounded-corners{
      height: 250px;
    }
    label{
      font-weight: 700;
    }
  </style>
</head>

<body>
  <?php include('sidenav.php'); ?>
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    <?php include('topnav.php'); ?>
    <div class="container-fluid mt--6">
      <div class="row">
        <div class="col">
          <div class="card">
            <!-- Card header -->
            <div class="card-header border-0">
              <h3 class="mb-0">List of Contact Form Entries</h3>
            </div>
            <!-- Light table -->
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th>S. No</th>
                    <th>Name</th>
                    <th>Company</th>
                    <th>Contact No</th>
                    <th>Email</th>
                    <th>Location</th>
                    <th>Message</th>
                    <th>Time</th>
                  </tr>
                </thead>
                <tbody class="list">
                  <?php
                    $getSr = 1;
                    $getQuery = "SELECT * from contactForm";
                    $getSql = mysqli_query($conn, $getQuery);
                    while($getData = mysqli_fetch_array($getSql)){
                      echo'<tr>
                            <td>'.$getSr++.'</td>
                            <td>'.$getData['fullName'].'</td>
                            <td>'.$getData['companyName'].'</td>
                            <td>'.$getData['contactNo'].'</td>
                            <td>'.$getData['email'].'</td>
                            <td>'.$getData['location'].'</td>
                            <td>'.$getData['message'].'</td>
                            <td>'.$getData['timestamp'].'</td>
                          </tr>';
                    }
                  ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>  
      <!-- Footer -->
      <footer class="footer pt-0">
        <div class="row align-items-center justify-content-lg-between">
          <div class="col-lg-6">
            <div class="copyright text-center  text-lg-left  text-muted">
             © Copyright @ APLAPOLLO 2021
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!-- Argon Scripts -->
  <?php include('footer-scripts.php'); ?>
</body>

</html>