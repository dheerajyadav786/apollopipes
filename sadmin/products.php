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
  $dquery = "DELETE FROM products WHERE id='$pid' ";
  $dSql = mysqli_query($conn, $dquery);
  if($dSql){
    echo '<script>alert("Product deleted successfully.");</script>';
    //header('Location: products');
  }else{
    echo '<script>alert("Product deleted error.");</script>';
  }
}
if($action == 'edit'){
  $equery = "SELECT * FROM products WHERE id='$pid' ";
  $eSql = mysqli_query($conn, $equery);
  $eData = mysqli_fetch_assoc($eSql);
}

if(isset($_POST['signin'])){
  $productTitle = $_POST['productTitle'];

  $productMainImg = $_FILES['productMainImg']['name'];
  if($productMainImg != ''){
    $file_tmp1 = $_FILES['productMainImg']['tmp_name'];
    move_uploaded_file($file_tmp1,"product-images/".$productMainImg);
  }else{
    $productMainImg = $eData['productMainImg'];
  }

  $firstContent = $_POST['firstContent'];
  $secondContent = $_POST['secondContent'];
  $productIcon1 = $_POST['productIcon1'];

  $productIcon1Img = $_FILES['productIcon1Img']['name'];
  if($productIcon1Img != ''){
    $file_tmp2 = $_FILES['productIcon1Img']['tmp_name'];
    move_uploaded_file($file_tmp2,"product-images/".$productIcon1Img);
  }else{
    $productIcon1Img = $eData['iconImg1'];
  }  

  $productIcon2 = $_POST['productIcon2'];

  $productIcon2Img = $_FILES['productIcon2Img']['name'];
  if($productIcon2Img != ''){
    $file_tmp3 = $_FILES['productIcon2Img']['tmp_name'];
    move_uploaded_file($file_tmp3,"product-images/".$productIcon2Img);
  }else{
    $productIcon2Img = $eData['iconImg2'];
  }

  $productIcon3 = $_POST['productIcon3'];

  $productIcon3Img = $_FILES['productIcon3Img']['name'];
  if($productIcon3Img != ''){
    $file_tmp4 = $_FILES['productIcon3Img']['tmp_name'];
    move_uploaded_file($file_tmp4,"product-images/".$productIcon3Img);
  }else{
    $productIcon3Img = $eData['iconImg3'];
  }

  $productIcon4 = $_POST['productIcon4'];

  $productIcon4Img = $_FILES['productIcon4Img']['name'];
  if($productIcon4Img != ''){
    $file_tmp5 = $_FILES['productIcon4Img']['tmp_name'];
    move_uploaded_file($file_tmp5,"product-images/".$productIcon4Img);
  }else{
    $productIcon4Img = $eData['iconImg4'];
  }

  $productIcon5 = $_POST['productIcon5'];

  $productIcon5Img = $_FILES['productIcon5Img']['name'];
  if($productIcon5Img != ''){
    $file_tmp6 = $_FILES['productIcon5Img']['tmp_name'];
    move_uploaded_file($file_tmp6,"product-images/".$productIcon5Img);
  }else{
    $productIcon5Img = $eData['iconImg5'];
  }

  $productIcon6 = $_POST['productIcon6'];

  $productIcon6Img = $_FILES['productIcon6Img']['name'];
  if($productIcon6Img != ''){
    $file_tmp7 = $_FILES['productIcon6Img']['tmp_name'];
    move_uploaded_file($file_tmp7,"product-images/".$productIcon6Img);
  }else{
    $productIcon6Img = $eData['iconImg6'];
  }

  $productIcon7 = $_POST['productIcon7'];

  $productIcon7Img = $_FILES['productIcon7Img']['name'];
  if($productIcon7Img != ''){
    $file_tmp8 = $_FILES['productIcon7Img']['tmp_name'];
    move_uploaded_file($file_tmp8,"product-images/".$productIcon7Img);
  }else{
    $productIcon7Img = $eData['iconImg7'];
  }

  $productIcon8 = $_POST['productIcon8'];

  $productIcon8Img = $_FILES['productIcon8Img']['name'];
  if($productIcon8Img != ''){
    $file_tmp9 = $_FILES['productIcon8Img']['tmp_name'];
    move_uploaded_file($file_tmp9,"product-images/".$productIcon8Img);
  }else{
    $productIcon8Img = $eData['iconImg8'];
  }
  
  $productIcon9 = $_POST['productIcon9'];

  $productIcon9Img = $_FILES['productIcon9Img']['name'];
  if($productIcon9Img != ''){
    $file_tmp10 = $_FILES['productIcon9Img']['tmp_name'];
    move_uploaded_file($file_tmp10,"product-images/".$productIcon9Img);
  }else{
    $productIcon9Img = $eData['iconImg9'];
  }
  
  $productIcon10 = $_POST['productIcon10'];

  $productIcon10Img = $_FILES['productIcon10Img']['name'];
  if($productIcon10mg != ''){
    $file_tmp11 = $_FILES['productIcon10Img']['tmp_name'];
    move_uploaded_file($file_tmp11,"product-images/".$productIcon10Img);
  }else{
    $productIcon10Img = $eData['iconImg10'];
  }
  
  $productIcon11 = $_POST['productIcon11'];

  $productIcon11Img = $_FILES['productIcon11Img']['name'];
  if($productIcon11mg != ''){
    $file_tmp12 = $_FILES['productIcon11Img']['tmp_name'];
    move_uploaded_file($file_tmp12,"product-images/".$productIcon11Img);
  }else{
    $productIcon11Img = $eData['iconImg11'];
  }
  
  $productIcon12 = $_POST['productIcon12'];

  $productIcon12Img = $_FILES['productIcon12Img']['name'];
  if($productIcon12Img != ''){
    $file_tmp13 = $_FILES['productIcon12Img']['tmp_name'];
    move_uploaded_file($file_tmp13,"product-images/".$productIcon12Img);
  }else{
    $productIcon12Img = $eData['iconImg12'];
  }
  
  $sizeContent = $_POST['sizeContent'];

  $catalogueFile = $_FILES['catalogueFile']['name'];
  if($catalogueFile != ''){
    $file_tmp10 = $_FILES['catalogueFile']['tmp_name'];
    move_uploaded_file($file_tmp10,"product-images/".$catalogueFile);
  }else{
    $catalogueFile = $eData['catalogueFile'];
  }

  $productCategory = $_POST['productCategory'];
  $lastContent = $_POST['lastContent'];

  if($action == 'edit'){
    $uQuery = "UPDATE products SET productTitle='$productTitle', productMainImg='$productMainImg', firstContent='$firstContent', secondContent='$secondContent', iconText1='$productIcon1', iconText2='$productIcon2', iconText3='$productIcon3', iconText4='$productIcon4', iconText5='$productIcon5', iconText6='$productIcon6', iconText7='$productIcon7', iconText8='$productIcon8', iconText8='$productIcon9', iconText10='$productIcon10', iconText11='$productIcon11', iconText12='$productIcon12', iconImg1='$productIcon1Img', iconImg2='$productIcon2Img', iconImg3='$productIcon3Img', iconImg4='$productIcon4Img', iconImg5='$productIcon5Img', iconImg6='$productIcon6Img', iconImg7='$productIcon7Img', iconImg8='$productIcon8Img', iconImg9='$productIcon9Img', iconImg10='$productIcon10Img', iconImg11='$productIcon11Img', iconImg12='$productIcon12Img', availableInfo='$sizeContent', catalogueFile='$catalogueFile', category='$productCategory', lastContent='$lastContent' WHERE id='$pid' ";
    $uSql = mysqli_query($conn, $uQuery);
    //echo $uQuery;
    if($uSql){
      echo '<script>alert("Product updated successfully.");</script>';
    }else{
      echo '<script>alert("Product updated failed.");</script>';
    }
  }else{
    $query = "INSERT INTO products (productTitle, productMainImg, firstContent, secondContent, iconText1, iconText2, iconText3, iconText4, iconText5, iconText6, iconText7, iconText8, iconText9, iconText10, iconText11, iconText12, iconImg1, iconImg2, iconImg3, iconImg4, iconImg5, iconImg6, iconImg7, iconImg8, iconImg9, iconImg10, iconImg11, iconImg12, availableInfo, catalogueFile, category, lastContent) VALUES ('$productTitle', '$productMainImg', '$firstContent', '$secondContent', '$productIcon1', '$productIcon2', '$productIcon3', '$productIcon4', '$productIcon5', '$productIcon6', '$productIcon7', '$productIcon8', '$productIcon9', '$productIcon10', '$productIcon11', '$productIcon12', '$productIcon1Img', '$productIcon2Img', '$productIcon3Img', '$productIcon4Img', '$productIcon5Img', '$productIcon6Img', '$productIcon7Img', '$productIcon8Img', '$productIcon9Img', '$productIcon10Img', '$productIcon11Img', '$productIcon12Img', '$sizeContent', '$catalogueFile', '$productCategory', '$lastContent')";

    $sql = mysqli_query($conn, $query);
    if($sql){
      echo '<script>alert("Product added successfully.");</script>';
    }else{
      echo '<script>alert("Product added failed.");</script>';
    }
  }  
}
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Apollo Pipes ">
  <meta name="author" content="Apollo Pipes">
  <title>Add Products</title>
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
                <label>Product Title</label>
                <input type="text" class="form-control" name="productTitle" placeholder="Product Title" value="<?php echo $eData['productTitle']; ?>">
              </div>
              <div class="col-md-6">
                <label>Product Main Image</label>
                <input type="file" class="form-control" name="productMainImg">
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-12">
                <label>Product First Section Content</label>
                <textarea id="editorFirst" class="form-control" name="firstContent" placeholder="First Section Content"  rows="5"><?php echo $eData['firstContent']; ?></textarea>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-12">
                <label>Product Second Section Content</label>
                <textarea id="editor" class="form-control" name="secondContent" placeholder="Second Section Content"  ><?php echo $eData['secondContent']; ?></textarea>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-12">
                <label>Product Icons Section</label>
                <table class="table table-dark">
                  <thead>
                    <tr>
                      <th>S. No.</th>
                      <th>Icon Name</th>
                      <th>Icon Image</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td><input type="text" class="form-control" name="productIcon1" placeholder="Product Icon 1 Text" value="<?php echo $eData['iconText1']; ?>"></td>
                      <td><input type="file" class="form-control" name="productIcon1Img" ></td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td><input type="text" class="form-control" name="productIcon2" placeholder="Product Icon 2 Text" value="<?php echo $eData['iconText2']; ?>"></td>
                      <td><input type="file" class="form-control" name="productIcon2Img" ></td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td><input type="text" class="form-control" name="productIcon3" placeholder="Product Icon 3 Text" value="<?php echo $eData['iconText3']; ?>"></td>
                      <td><input type="file" class="form-control" name="productIcon3Img" ></td>
                    </tr>
                    <tr>
                      <td>4</td>
                      <td><input type="text" class="form-control" name="productIcon4" placeholder="Product Icon 4 Text" value="<?php echo $eData['iconText4']; ?>"></td>
                      <td><input type="file" class="form-control" name="productIcon4Img" ></td>
                    </tr>
                    <tr>
                      <td>5</td>
                      <td><input type="text" class="form-control" name="productIcon5" placeholder="Product Icon 5 Text" value="<?php echo $eData['iconText5']; ?>"></td>
                      <td><input type="file" class="form-control" name="productIcon5Img" ></td>
                    </tr>
                    <tr>
                      <td>6</td>
                      <td><input type="text" class="form-control" name="productIcon6" placeholder="Product Icon 6 Text" value="<?php echo $eData['iconText6']; ?>"></td>
                      <td><input type="file" class="form-control" name="productIcon6Img" ></td>
                    </tr>
                    <tr>
                      <td>7</td>
                      <td><input type="text" class="form-control" name="productIcon7" placeholder="Product Icon 7 Text" value="<?php echo $eData['iconText7']; ?>"></td>
                      <td><input type="file" class="form-control" name="productIcon7Img" ></td>
                    </tr>
                    <tr>
                      <td>8</td>
                      <td><input type="text" class="form-control" name="productIcon8" placeholder="Product Icon 8 Text" value="<?php echo $eData['iconText8']; ?>"></td>
                      <td><input type="file" class="form-control" name="productIcon8Img" ></td>
                    </tr>  
                    <tr>
                      <td>9</td>
                      <td><input type="text" class="form-control" name="productIcon9" placeholder="Product Icon 9 Text" value="<?php echo $eData['iconText9']; ?>"></td>
                      <td><input type="file" class="form-control" name="productIcon9Img" ></td>
                    </tr>  
                    <tr>
                      <td>10</td>
                      <td><input type="text" class="form-control" name="productIcon10" placeholder="Product Icon 10 Text" value="<?php echo $eData['iconText10']; ?>"></td>
                      <td><input type="file" class="form-control" name="productIcon10Img" ></td>
                    </tr>  
                    <tr>
                      <td>11</td>
                      <td><input type="text" class="form-control" name="productIcon11" placeholder="Product Icon 11 Text" value="<?php echo $eData['iconText11']; ?>"></td>
                      <td><input type="file" class="form-control" name="productIcon11Img" ></td>
                    </tr>  
                    <tr>
                      <td>12</td>
                      <td><input type="text" class="form-control" name="productIcon12" placeholder="Product Icon 12 Text" value="<?php echo $eData['iconText12']; ?>"></td>
                      <td><input type="file" class="form-control" name="productIcon12Img" ></td>
                    </tr>  
                  </tbody>
                </table>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-12">
                <label>Available Sizes/Color/Range</label>
                <textarea id="editor1" class="form-control" name="sizeContent" placeholder="Available Sizes/Color/Range"  style="height: 140px;"><?php echo $eData['availableInfo']; ?></textarea>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-6">
                <label>Catalogue File</label>
                <input type="file" class="form-control" name="catalogueFile" >
              </div>
              <div class="col-md-6">
                <label>Product Category</label>
                <select class="form-select form-control" aria-label="Default select example" name="productCategory">
                  <option selected>Select</option>
                  <option value="Plumbing" <?php if($eData['category']=='Plumbing'){echo 'selected';} ?>>Plumbing</option>
                  <option value="Agriculture" <?php if($eData['category']=='Agriculture'){echo 'selected';} ?>>Agriculture</option>
                  <option value="Sewerage" <?php if($eData['category']=='Sewerage'){echo 'selected';} ?>>Sewerage</option>
                  <option value="Bath Fittings" <?php if($eData['category']=='Bath Fittings'){echo 'selected';} ?>>Bath Fittings</option>
                  <option value="Water Storage" <?php if($eData['category']=='Water Storage'){echo 'selected';} ?>>Water Storage</option>
                  <option value="Home Solutions" <?php if($eData['category']=='Home Solutions'){echo 'selected';} ?>>Home Solutions</option>
                  <option value="Adhesive" <?php if($eData['category']=='Adhesive'){echo 'selected';} ?>>Adhesive</option>
                </select>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-12">
                <label>Last Content</label>
                <textarea class="form-control" name="lastContent" placeholder="Last Section Content"  rows="5"><?php echo $eData['lastContent']; ?></textarea>
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
                    <th>Name</th>
                    <th>Category</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody class="list">
                  <?php
                    $getSr = 1;
                    $getQuery = "SELECT * FROM products";
                    $getSql = mysqli_query($conn, $getQuery);
                    while($getData = mysqli_fetch_array($getSql)){
                      echo'<tr>
                            <td>'.$getSr++.'</td>
                            <td><img src="product-images/'.$getData['productMainImg'].'" width="5%"> '.$getData['productTitle'].'</td>
                            <td>'.$getData['category'].'</td>
                            <td><a href="../single-product.php?id='.$getData['id'].'" class="btn btn-success" target="_blank">View</a> <a href="products?action=edit&id='.$getData['id'].'" class="btn btn-info">Edit</a> <a href="products?action=delete&id='.$getData['id'].'" class="btn btn-danger">Delete</a></td>
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