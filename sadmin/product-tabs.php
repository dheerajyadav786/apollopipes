<?php
include('connection.php');
session_start();
if(!($_SESSION['username'])){
  header('Location: login');
}
if(isset($_POST['signin'])){
  $productId = $_POST['productId'];
  $tabTitle = $_POST['tabTitle'];
  $tabInsideTitle = $_POST['tabInsideTitle'];
  $tabSpecification = $_FILES['tabSpecification']['name'];
  $file_tmp1 = $_FILES['tabSpecification']['tmp_name'];
  move_uploaded_file($file_tmp1,"../specifications/".$tabSpecification);
  
  $query = "INSERT INTO productTabs (tabTitle, productId, tabInsideTitle, specificationFile) VALUES ('$tabTitle', '$productId', '$tabInsideTitle', '$tabSpecification')";
  $sql = mysqli_query($conn, $query);
  if($sql){
    echo '<script>alert("Tab added successfully.");</script>';
  }else{
    echo '<script>alert("Tab added failed.");</script>';
  }  
}
if(isset($_POST['subtab'])){
  $tabId = $_POST['productSubTab'];
  $subTabTitle = $_POST['subTabTitle'];
  $subTabInsideTitle = $_POST['subTabInsideTitle'];
  $subTabSpecification = $_FILES['subTabSpecification']['name'];
  $file_tmp2 = $_FILES['subTabSpecification']['tmp_name'];
  move_uploaded_file($file_tmp1,"../specifications/".$subTabSpecification);
  
  $query = "INSERT INTO productSubTabs (subTabTitle, tabId, subTabInsideTitle, subSpecificationFile) VALUES ('$subTabTitle', '$tabId', '$subTabInsideTitle', '$subTabSpecification')";
  //echo $query;

  $sql = mysqli_query($conn, $query);
  if($sql){
    echo '<script>alert("Sub Tab added successfully.");</script>';
  }else{
    echo '<script>alert("Sub Tab added failed.");</script>';
  }  
}
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Apollo Pipes">
  <meta name="author" content="Apollo Pipes">
  <title>Products Tabs</title>
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
    <!-- Page content -->
    <div class="container mt-3 pb-5">
      <div class="row justify-content-center">
        <div class="col-lg-12 col-md-12">
          <p class="text-center">Product Main Tabs</p>
          <form role="form" action="#" method="POST" class="main-form product-tabs-form" enctype="multipart/form-data">
            <div class="row">
              <div class="col-md-6">
                <label>Select product</label>
                <select class="form-select form-control" aria-label="Default select example" name="productId" required="">
                  <?php
                    $pQuery = "SELECT id, productTitle FROM products";
                    $pSql = mysqli_query($conn, $pQuery);
                    while($pData = mysqli_fetch_array($pSql)){
                      echo '<option value="'.$pData['id'].'">'.$pData['productTitle'].'</option>';
                    }
                  ?>
                </select>
              </div>
              <div class="col-md-6">
                <label>Tab title</label>
                <input type="text" class="form-control" name="tabTitle" placeholder="Tab Title" required="">
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-6">
                <label>Tab inside title</label>
                <input type="text" class="form-control" name="tabInsideTitle" placeholder="Tab Inside Title">
              </div>
              <div class="col-md-6">
                <label>Tab specification file</label>
                <input type="file" class="form-control" name="tabSpecification">
              </div>
            </div>
            <div class="row text-center">
              <div class="col-md-12">  
                <input type="submit" class="btn btn-primary my-4" name="signin" value="Submit" style="width: 100%;">
              </div>  
            </div>
          </form>
        </div>
      </div>
      <div class="row justify-content-center mb-5">
        <div class="col-lg-12 col-md-12">
          <p class="text-center">Product Sub Tabs</p>
          <form role="form" action="#" method="POST" class="main-form" enctype="multipart/form-data">
            <div class="row">
              <div class="col-md-6">
                <label>Select tab</label>
                <select class="form-select form-control" aria-label="Default select example" name="productSubTab" required="">
                  <?php
                    $psQuery = "SELECT a.*, b.* FROM products as a, productTabs as b WHERE a.id=b.productId";
                    $psSql = mysqli_query($conn, $psQuery);
                    while($psData = mysqli_fetch_array($psSql)){
                      echo '<option value="'.$psData['id'].'">'.$psData['tabTitle'].' ('.$psData['productTitle'].')</option>';
                    }
                  ?>
                </select>
              </div>
              <div class="col-md-6">
                <label>Sub Tab title</label>
                <input type="text" class="form-control" name="subTabTitle" placeholder="Sub Tab Title" required="">
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-6">
                <label>Sub Tab inside title</label>
                <input type="text" class="form-control" name="subTabInsideTitle" placeholder="Sub Tab Inside Title">
              </div>
              <div class="col-md-6">
                <label>Sub Tab specification file</label>
                <input type="file" class="form-control" name="subTabSpecification">
              </div>
            </div>
            <div class="row text-center">
              <div class="col-md-12">  
                <input type="submit" class="btn btn-primary my-4" name="subtab" value="Submit" style="width: 100%;">
              </div>  
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="container-fluid mt--6">
      <div class="row">
        <div class="col">
          <div class="card">
            <!-- Card header -->
            <div class="card-header border-0">
              <h3 class="mb-0">List of Tabs</h3>
            </div>
            <!-- Light table -->
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th>S. No</th>
                    <th>Tab Title</th>
                    <th>Product Name</th>
                    <th>Tab indise title</th>
                  </tr>
                </thead>
                <tbody class="list">
                  <?php
                    $getSr = 1;
                    $getQuery = "SELECT a.*, b.* FROM products as a, productTabs as b WHERE a.id=b.productId";
                    $getSql = mysqli_query($conn, $getQuery);
                    while($getData = mysqli_fetch_array($getSql)){
                      echo'<tr>
                            <td>'.$getSr++.'</td>
                            <td>'.$getData['tabTitle'].'</td>
                            <td>'.$getData['productTitle'].'</td>
                            <td>'.$getData['tabInsideTitle'].'</td>
                          </tr>';
                    }
                  ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <div class="card">
            <!-- Card header -->
            <div class="card-header border-0">
              <h3 class="mb-0">List of Sub Tabs</h3>
            </div>
            <!-- Light table -->
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th>S. No</th>
                    <th>Tab Title</th>
                    <th>Product Name</th>
                    <th>Tab indise title</th>
                  </tr>
                </thead>
                <tbody class="list">
                  <?php
                    $getSr = 1;
                    $getQuery = "SELECT a.*, b.*, c.* FROM products as a, productTabs as b, productSubTabs as c WHERE a.id=b.productId AND b.id=c.tabId";
                    $getSql = mysqli_query($conn, $getQuery);
                    while($getData = mysqli_fetch_array($getSql)){
                      echo'<tr>
                            <td>'.$getSr++.'</td>
                            <td>'.$getData['subTabTitle'].'</td>
                            <td>'.$getData['tabTitle'].'</td>
                            <td>'.$getData['subTabInsideTitle'].'</td>
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
              Copyright @ APLAPOLLO 2021
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