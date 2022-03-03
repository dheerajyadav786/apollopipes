<?php
include('connection.php');
session_start();
if(!($_SESSION['username'])){
  header('Location: login');
}

if($_GET['action']){
  $action = $_GET['action'];
}
if($_GET['id']){
  $pid = $_GET['id'];
}
if($action == 'delete'){
  $dquery = "DELETE FROM productTabContent WHERE id='$pid' ";
  $dSql = mysqli_query($conn, $dquery);
  if($dSql){
    echo '<script>alert("Tab content deleted successfully.");</script>';
    //header('Location: products');
  }else{
    echo '<script>alert("Tab content deleted error.");</script>';
  }
}
if($action == 'edit'){
  $equery = "SELECT * FROM productTabContent WHERE id='$pid' ";
  $eSql = mysqli_query($conn, $equery);
  $eData = mysqli_fetch_assoc($eSql);
}

if(isset($_POST['signin'])){
  $productId = $_POST['productId'];
  $productTab = $_POST['productTab'];
  $productSubTab = $_POST['productsubTab'];
  $productTitle = $_POST['productTitle'];
  $productImage = $_FILES['productImage']['name'];

  if($productImage != ''){
    $file_tmp1 = $_FILES['productImage']['tmp_name'];
    move_uploaded_file($file_tmp1,"product-images/".$productImage);
  }else{
    $productImage = $eData['productImg'];
  }

  if($action == 'edit'){
    $query = "UPDATE productTabContent SET productName='$productTitle', productImg='$productImage', productTab='$productTab', productSubTab='$productSubTab', productId='$productId' WHERE id='$pid' ";
    //echo $query;
    $sql = mysqli_query($conn, $query);
    if($sql){
      echo '<script>alert("Tab content updated successfully.");</script>';
    }else{
      echo '<script>alert("Tab content update failed.");</script>';
    }
  }else{
    $query = "INSERT INTO productTabContent (productName, productImg, productTab, productSubTab, productId) VALUES ('$productTitle', '$productImage', '$productTab', '$productSubTab', '$productId')";
    $sql = mysqli_query($conn, $query);
    if($sql){
      echo '<script>alert("Tab content added successfully.");</script>';
    }else{
      echo '<script>alert("Tab content added failed.");</script>';
    }
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
  <title>Products Tabs Content</title>
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
          <form role="form" action="#" method="POST" class="main-form" enctype="multipart/form-data">
            <div class="row">
              <div class="col-md-6">
                <label>Select tab</label>
                <select class="form-select form-control" aria-label="Default select example" name="productId" required="">
                  <?php
                    $psQuery = "SELECT * FROM products";
                    $psSql = mysqli_query($conn, $psQuery);
                    $x = $eData['productId'];
                    while($psData = mysqli_fetch_array($psSql)){
                      $y = $psData['id'];
                      if($x == $y){
                        $productSelect = 'selected';
                      }else{
                        $productSelect = '';
                      }
                      echo '<option value="'.$psData['id'].'"'.$productSelect.'>'.$psData['productTitle'].'</option>';
                    }
                  ?>
                </select>
              </div>
              <div class="col-md-6">
                <label>Select tab</label>
                <select class="form-select form-control" aria-label="Default select example" name="productTab" required="">
                  <option <?php if($eData['productTab'] == 'Select'){ echo 'selected';} ?> >Select</option>
                  <option <?php if($eData['productTab'] == 'Pipes'){ echo 'selected';} ?> value="Pipes">Pipes</option>
                  <option <?php if($eData['productTab'] == 'Fittings'){ echo 'selected';} ?> value="Fittings">Fittings</option>
                  <option <?php if($eData['productTab'] == 'Faucets'){ echo 'selected';} ?> value="Faucets">Faucets</option>
                  <option <?php if($eData['productTab'] == 'Hand Shower'){ echo 'selected';} ?> value="Hand Shower">Hand Shower</option>
                  <option <?php if($eData['productTab'] == 'Head Shower'){ echo 'selected';} ?> value="Head Shower">Head Shower</option>
                  <option <?php if($eData['productTab'] == 'Health Faucets'){ echo 'selected';} ?> value="Health Faucets">Health Faucets</option>
                  <option <?php if($eData['productTab'] == 'Cisterns'){ echo 'selected';} ?> value="Cisterns">Cisterns</option>
                  <option <?php if($eData['productTab'] == 'Jet Sprays'){ echo 'selected';} ?> value="Jet Sprays">Jet Sprays</option>
                  <option <?php if($eData['productTab'] == 'Seat Covers'){ echo 'selected';} ?> value="Seat Covers">Seat Covers</option>
                  <option <?php if($eData['productTab'] == 'BA Bright Series'){ echo 'selected';} ?> value="BA Bright Series">BA Bright Series</option>
                  <option <?php if($eData['productTab'] == 'BA Charcoal S'){ echo 'selected';} ?> value="BA Charcoal S">BA Charcoal S</option>
                  <option <?php if($eData['productTab'] == 'BA Crystal Series'){ echo 'selected';} ?> value="BA Crystal Series">BA Crystal Series</option>
                  <option <?php if($eData['productTab'] == 'Grand-Water Storage'){ echo 'selected';} ?> value="Grand-Water Storage">Grand - Water Storage</option>
                  <option <?php if($eData['productTab'] == 'Life-Water Storage'){ echo 'selected';} ?> value="Life-Water Storage">Life - Water Storage</option>
                  <option <?php if($eData['productTab'] == 'Star-Water Storage'){ echo 'selected';} ?> value="Star-Water Storage">Star - Water Storage</option>
                  <option <?php if($eData['productTab'] == 'Classic Kitchen Sink'){ echo 'selected';} ?> value="Classic Kitchen Sink">Classic Kitchen Sink</option>
                  <option <?php if($eData['productTab'] == 'Edge Kitchen Sink'){ echo 'selected';} ?> value="Edge Kitchen Sink">Edge Kitchen Sink</option>
                </select>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-6">
                <label>Select sub tab (if any)</label>
                <select class="form-select form-control" aria-label="Default select example" name="productsubTab">
                  <option <?php if($eData['productSubTab'] == 'Select'){ echo 'selected';} ?> >Select</option>
                  <option <?php if($eData['productSubTab'] == 'cPVC FITTINGS IN SDR 11 AS PER ASTM D-2846'){ echo 'selected';} ?> value="cPVC FITTINGS IN SDR 11 AS PER ASTM D-2846">cPVC FITTINGS IN SDR 11 AS PER ASTM D-2846</option>
                  <option <?php if($eData['productSubTab'] == 'cPVC FITTINGS IN SCH 40 AS PER ASTM F- 438'){ echo 'selected';} ?> value="cPVC FITTINGS IN SCH 40 AS PER ASTM F- 438">cPVC FITTINGS IN SCH 40 AS PER ASTM F- 438</option>
                  <option <?php if($eData['productSubTab'] == 'uPVC PLUMBING FITTINGS IN SCH 40 AS PER ASTM D - 2466'){ echo 'selected';} ?> value="uPVC PLUMBING FITTINGS IN SCH 40 AS PER ASTM D - 2466">uPVC PLUMBING FITTINGS IN SCH 40 AS PER ASTM D- 2466</option>
                  <option <?php if($eData['productSubTab'] == 'uPVC PLUMBING FITTINGS IN SCH-80 AS PER ASTM D - 2467'){ echo 'selected';} ?> value="uPVC PLUMBING FITTINGS IN SCH-80 AS PER ASTM D - 2467">uPVC PLUMBING FITTINGS IN SCH-80 AS PER ASTM D-2467</option>
                  <option <?php if($eData['productSubTab'] == 'PRESSURE FITTINGS AS PER IS - 7834'){ echo 'selected';} ?> value="PRESSURE FITTINGS AS PER IS - 7834">PRESSURE FITTINGS AS PER IS - 7834</option>
                  <option <?php if($eData['productSubTab'] == 'AGRICULTURE FITTINGS (AS PER IS - 7834)'){ echo 'selected';} ?> value="AGRICULTURE FITTINGS (AS PER IS - 7834)">AGRICULTURE FITTINGS (AS PER IS-7834) - uPVC SWR Drainage System</option>
                  <option <?php if($eData['productSubTab'] == 'SWR FITTINGS SELF FIT (AS PER IS - 14735)'){ echo 'selected';} ?> value="SWR FITTINGS SELF FIT (AS PER IS - 14735)">SWR FITTINGS SELF FIT (AS PER IS-14735)</option>
                  <option <?php if($eData['productSubTab'] == 'SWR FITTINGS WITH RINGS (AS PER IS - 14735)'){ echo 'selected';} ?> value="SWR FITTINGS WITH RINGS (AS PER IS - 14735)">SWR FITTINGS WITH RINGS (AS PER IS-14735)</option>
                  <option <?php if($eData['productSubTab'] == 'Faucets Bloom'){ echo 'selected';} ?> value="Faucets Bloom">Faucets Bloom</option>
                  <option <?php if($eData['productSubTab'] == 'Faucets Extreme'){ echo 'selected';} ?> value="Faucets Extreme">Faucets Extreme</option>
                  <option <?php if($eData['productSubTab'] == 'Faucets Classic'){ echo 'selected';} ?> value="Faucets Classic">Faucets Classic</option>
                  <option <?php if($eData['productSubTab'] == 'Faucets Continental'){ echo 'selected';} ?> value="Faucets Continental">Faucets Continental</option>
                  <option <?php if($eData['productSubTab'] == 'Faucets Coral'){ echo 'selected';} ?> value="Faucets Coral">Faucets Coral</option>
                  <option <?php if($eData['productSubTab'] == 'Faucets Cornet'){ echo 'selected';} ?> value="Faucets Cornet">Faucets Cornet</option>
                  <option <?php if($eData['productSubTab'] == 'Faucets Edge'){ echo 'selected';} ?> value="Faucets Edge">Faucets Edge</option>
                  <option <?php if($eData['productSubTab'] == 'Faucets Fusion'){ echo 'selected';} ?> value="Faucets Fusion">Faucets Fusion</option>
                  <option <?php if($eData['productSubTab'] == 'Faucets Fusion-2'){ echo 'selected';} ?> value="Faucets Fusion-2">Faucets Fusion-2</option>
                  <option <?php if($eData['productSubTab'] == 'Faucets Quadro'){ echo 'selected';} ?> value="Faucets Quadro">Faucets Quadro</option>
                  <option <?php if($eData['productSubTab'] == 'Faucets Royal'){ echo 'selected';} ?> value="Faucets Royal">Faucets Royal</option>
                  <option <?php if($eData['productSubTab'] == 'Faucets Spark'){ echo 'selected';} ?> value="Faucets Spark">Faucets Spark</option>
                  <option <?php if($eData['productSubTab'] == 'Faucets Venus'){ echo 'selected';} ?> value="Faucets Venus">Faucets Venus</option>
                  <option <?php if($eData['productSubTab'] == 'Cap-Hand Shower'){ echo 'selected';} ?> value="Cap-Hand Shower">Cap - Hand Shower</option>
                  <option <?php if($eData['productSubTab'] == 'Classic-Hand Shower'){ echo 'selected';} ?> value="Classic-Hand Shower">Classic - Hand Shower</option>
                  <option <?php if($eData['productSubTab'] == 'Alex-Head Shower'){ echo 'selected';} ?> value="Alex-Head Shower">Alex - Head Shower</option>
                  <option <?php if($eData['productSubTab'] == 'Alpha-Head Shower'){ echo 'selected';} ?> value="Alpha-Head Shower">Alpha - Head Shower</option>
                  <option <?php if($eData['productSubTab'] == 'Caperi-Head Shower'){ echo 'selected';} ?> value="Caperi-Head Shower">Caperi - Head Shower</option>
                  <option <?php if($eData['productSubTab'] == 'Code-Head Shower'){ echo 'selected';} ?> value="Code-Head Shower">Code - Head Shower</option>
                  <option <?php if($eData['productSubTab'] == 'Eden-Head Shower'){ echo 'selected';} ?> value="Eden-Head Shower">Eden - Head Shower</option>
                  <option <?php if($eData['productSubTab'] == 'Edoo-Head Shower'){ echo 'selected';} ?> value="Edoo-Head Shower">Edoo - Head Shower</option>
                  <option <?php if($eData['productSubTab'] == 'Eldo-Head Shower'){ echo 'selected';} ?> value="Eldo-Head Shower">Eldo - Head Shower</option>
                  <option <?php if($eData['productSubTab'] == 'Roch-Head Shower'){ echo 'selected';} ?> value="Roch-Head Shower">Roch - Head Shower</option>
                  <option <?php if($eData['productSubTab'] == 'Alpha-Health Faucets'){ echo 'selected';} ?> value="Alpha-Health Faucets">Alpha - Health Faucets</option>
                  <option <?php if($eData['productSubTab'] == 'Alpha Plus-Health Faucets'){ echo 'selected';} ?> value="Alpha Plus-Health Faucets">Aplha Plus - Health Faucets</option>
                  <option <?php if($eData['productSubTab'] == 'Fab-Health Faucets'){ echo 'selected';} ?> value="Fab-Health Faucets">Fab - Health Faucets</option>
                  <option <?php if($eData['productSubTab'] == 'Nor-Health Faucets'){ echo 'selected';} ?> value="Nor-Health Faucets">Nor - Health Faucets</option>
                  <option <?php if($eData['productSubTab'] == 'Pame-Health Faucets'){ echo 'selected';} ?> value="Pame-Health Faucets">Pame - Health Faucets</option>
                  <option <?php if($eData['productSubTab'] == 'Prime-Health Faucets'){ echo 'selected';} ?> value="Prime-Health Faucets">Prime - Health Faucets</option>
                  <option <?php if($eData['productSubTab'] == 'Crest-Cisterns'){ echo 'selected';} ?> value="Crest-Cisterns">Crest - Cisterns</option>
                  <option <?php if($eData['productSubTab'] == 'Drizzle-Cisterns'){ echo 'selected';} ?> value="Drizzle-Cisterns">Drizzle - Cisterns</option>
                  <option <?php if($eData['productSubTab'] == 'Splash-Cisterns'){ echo 'selected';} ?> value="Splash-Cisterns">Splash - Cisterns</option>
                  <option <?php if($eData['productSubTab'] == 'Wave-Cisterns'){ echo 'selected';} ?> value="Wave-Cisterns">Wave - Cisterns</option>
                  <option <?php if($eData['productSubTab'] == 'Multi Jet Sprays'){ echo 'selected';} ?> value="Multi Jet Sprays">Multi Jet Sprays</option>
                  <option <?php if($eData['productSubTab'] == 'Straight Jet Sprays'){ echo 'selected';} ?> value="Straight Jet Sprays">Straight Jet Sprays</option>
                  <option <?php if($eData['productSubTab'] == 'Uni Jet Sprays'){ echo 'selected';} ?> value="Uni Jet Sprays">Uni Jet Sprays</option>
                  <option <?php if($eData['productSubTab'] == 'PMT Jet Spray'){ echo 'selected';} ?> value="PMT Jet Spray">PMT Jet Spray</option>
                  <option <?php if($eData['productSubTab'] == 'EWC-Seat Covers'){ echo 'selected';} ?> value="EWC-Seat Covers">EWC - Seat Covers</option>
                  <option <?php if($eData['productSubTab'] == 'Soft Close-Seat Covers'){ echo 'selected';} ?> value="Soft Close-Seat Covers">Soft Close - Seat Covers</option>
                </select>
              </div>
              <div class="col-md-6">
                <label>Product title</label>
                <input type="text" class="form-control" name="productTitle" placeholder="Product Title" value="<?php echo $eData['productName']; ?>">
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-12">
                <label>Product image</label>
                <input type="file" class="form-control" name="productImage">
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
    </div>
    <div class="container-fluid mt--6">
      <div class="row">
        <div class="col">
          <div class="card">
            <!-- Card header -->
            <div class="card-header border-0">
              <h3 class="mb-0">List of Products</h3>
            </div>
            <!-- Light table -->
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th>S. No</th>
                    <th>Product Name</th>
                    <th>Product Image</th>
                    <th>Product Tab</th>
                    <th>Product Sub Tab</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody class="list">
                  <?php
                    $getSr = 1;
                    $getQuery = "SELECT * FROM productTabContent";
                    $getSql = mysqli_query($conn, $getQuery);
                    while($getData = mysqli_fetch_array($getSql)){
                      echo'<tr>
                            <td>'.$getSr++.'</td>
                            <td>'.$getData['productName'].'</td>
                            <td><img src="product-images/'.$getData['productImg'].'" width="15%"></td>
                            <td>'.$getData['productTab'].'</td>
                            <td>'.$getData['productSubTab'].'</td>
                            <td><a href="product-content?action=edit&id='.$getData['id'].'" class="btn btn-info">Edit</a> <a href="product-content?action=delete&id='.$getData['id'].'" class="btn btn-danger">Delete</a></td>
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