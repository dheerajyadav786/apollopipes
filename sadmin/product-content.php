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
  
  $specInch1 = $_POST['specInch1'];
  $specMM1 = $_POST['specMM0'];
  $specQty1 = $_POST['specQty1'];

  $specInch2 = $_POST['specInch2'];
  $specMM2 = $_POST['specMM2'];
  $specQty2 = $_POST['specQty2'];

  $specInch3 = $_POST['specInch3'];
  $specMM3 = $_POST['specMM3'];
  $specQty3 = $_POST['specQty3'];

  $specInch4 = $_POST['specInch4'];
  $specMM4 = $_POST['specMM4'];
  $specQty4 = $_POST['specQty4'];

  $specInch5 = $_POST['specInch5'];
  $specMM5 = $_POST['specMM5'];
  $specQty5 = $_POST['specQty5'];

  $specInch6 = $_POST['specInch6'];
  $specMM6 = $_POST['specMM6'];
  $specQty6 = $_POST['specQty6'];

  $specInch7 = $_POST['specInch7'];
  $specMM7 = $_POST['specMM7'];
  $specQty7 = $_POST['specQty7'];

  $specInch8 = $_POST['specInch8'];
  $specMM8 = $_POST['specMM8'];
  $specQty8 = $_POST['specQty8'];

  $specInch9 = $_POST['specInch9'];
  $specMM9 = $_POST['specMM9'];
  $specQty9 = $_POST['specQty9'];

  $specInch10 = $_POST['specInch10'];
  $specMM10 = $_POST['specMM10'];
  $specQty10 = $_POST['specQty10'];

  $specInch11 = $_POST['specInch11'];
  $specMM11 = $_POST['specMM11'];
  $specQty11 = $_POST['specQty11'];

  $specInch12 = $_POST['specInch12'];
  $specMM12 = $_POST['specMM12'];
  $specQty12 = $_POST['specQty12'];

  $specInch13 = $_POST['specInch13'];
  $specMM13 = $_POST['specMM13'];
  $specQty13 = $_POST['specQty13'];

  $specInch14 = $_POST['specInch14'];
  $specMM14 = $_POST['specMM14'];
  $specQty14 = $_POST['specQty14'];

  $specInch15 = $_POST['specInch15'];
  $specMM15 = $_POST['specMM15'];
  $specQty15 = $_POST['specQty15'];

  $specInch16 = $_POST['specInch16'];
  $specMM16 = $_POST['specMM16'];
  $specQty16 = $_POST['specQty16'];

  $specInch17 = $_POST['specInch17'];
  $specMM17 = $_POST['specMM17'];
  $specQty17 = $_POST['specQty17'];

  $specInch18 = $_POST['specInch18'];
  $specMM18 = $_POST['specMM18'];
  $specQty18 = $_POST['specQty18'];

  $specInch19 = $_POST['specInch19'];
  $specMM19 = $_POST['specMM19'];
  $specQty19 = $_POST['specQty19'];

  $specInch20 = $_POST['specInch20'];
  $specMM20 = $_POST['specMM20'];
  $specQty20 = $_POST['specQty20'];

  if($productImage != ''){
    $file_tmp1 = $_FILES['productImage']['tmp_name'];
    move_uploaded_file($file_tmp1,"product-images/".$productImage);
  }else{
    $productImage = $eData['productImg'];
  }

  if($action == 'edit'){
    $query = "UPDATE productTabContent SET productName='$productTitle', productImg='$productImage', productTab='$productTab', productSubTab='$productSubTab', productId='$productId', specInch1='$specInch1', specInch2='$specInch2', specInch3='$specInch3', specInch4='$specInch4', specInch5='$specInch5', specInch6='$specInch6', specInch7='$specInch7', specInch8='$specInch8', specInch9='$specInch9', specInch10='$specInch10', specInch11='$specInch11', specInch12='$specInch12', specInch13='$specInch13', specInch14='$specInch14', specInch15='$specInch15', specInch16='$specInch16', specInch17='$specInch17', specInch18='$specInch18', specInch19='$specInch19', specInch20='$specInch20', specMM1='$specMM1', specMM2='$specMM2', specMM3='$specMM3', specMM4='$specMM4', specMM5='$specMM5', specMM6='$specMM6', specMM7='$specMM7', specMM8='$specMM8', specMM9='$specMM9', specMM10='$specMM10', specMM11='$specMM11', specMM12='$specMM12', specMM13='$specMM13', specMM14='$specMM14', specMM15='$specMM15', specMM16='$specMM16', specMM17='$specMM17', specMM18='$specMM18', specMM19='$specMM19', specMM20='$specMM20', specQty1='$specQty1', specQty2='$specQty2', specQty3='$specQty3', specQty4='$specQty4', specQty5='$specQty5', specQty5='$specQty5', specQty6='$specQty6', specQty7='$specQty7', specQty8='$specQty8', specQty9='$specQty9', specQty10='$specQty10', specQty11='$specQty11', specQty12='$specQty12', specQty13='$specQty13', specQty14='$specQty14', specQty15='$specQty15', specQty16='$specQty16', specQty17='$specQty17', specQty18='$specQty18', specQty19='$specQty19', specQty20='$specQty20' WHERE id='$pid' ";
    //echo $query;
    $sql = mysqli_query($conn, $query);
    if($sql){
      echo '<script>alert("Tab content updated successfully.");</script>';
    }else{
      echo '<script>alert("Tab content update failed.");</script>';
    }
  }else{
    $query = "INSERT INTO productTabContent (productName, productImg, productTab, productSubTab, productId, specInch1, specInch2, specInch3, specInch4, specInch5, specInch6, specInch7, specInch8, specInch9, specInch10, specInch11, specInch12, specInch13, specInch14, specInch15, specInch16, specInch17, specInch18, specInch19, specInch20, specMM1, specMM2, specMM3, specMM4, specMM5, specMM6, specMM7, specMM8, specMM9, specMM10, specMM11, specMM12, specMM13, specMM14, specMM15, specMM16, specMM17, specMM18, specMM19, specMM20, specQty1, specQty2, specQty3, specQty4, specQty5, specQty6, specQty7, specQty8, specQty9, specQty10, specQty11, specQty12, specQty13, specQty14, specQty15, specQty16, specQty17, specQty18, specQty19, specQty20) VALUES ('$productTitle', '$productImage', '$productTab', '$productSubTab', '$productId', '$specInch1', '$specInch2', '$specInch3', '$specInch4', '$specInch5', '$specInch6', '$specInch7', '$specInch8', '$specInch9', '$specInch10', '$specInch11', '$specInch12', '$specInch13', '$specInch14', '$specInch15', '$specInch16', '$specInch17', '$specInch18', '$specInch19', '$specInch20', '$specMM1', '$specMM2', '$specMM3', '$specMM4', '$specMM5', '$specMM6', '$specMM7', '$specMM8', '$specMM9', '$specMM10', '$specMM11', '$specMM12', '$specMM13', '$specMM14', '$specMM15', '$specMM16', '$specMM17', '$specMM18', '$specMM19', '$specMM20', '$specQty1', '$specQty2', '$specQty3', '$specQty4', '$specQty5', '$specQty6', '$specQty7', '$specQty8', '$specQty9', '$specQty10', '$specQty11', '$specQty12', '$specQty13', '$specQty14', '$specQty15', '$specQty16', '$specQty17', '$specQty18', '$specQty19', '$specQty20')";
    //echo $query; die;
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
                  <option <?php if($eData['productSubTab'] == 'Faucets Dazzle'){ echo 'selected';} ?> value="Faucets Dazzle">Faucets Dazzle</option>
                  <option <?php if($eData['productSubTab'] == 'Faucets Elegence'){ echo 'selected';} ?> value="Faucets Elegence">Faucets Elegence</option>
                  <option <?php if($eData['productSubTab'] == 'Faucets Flora'){ echo 'selected';} ?> value="Faucets Flora">Faucets Flora</option>
                  <option <?php if($eData['productSubTab'] == 'Faucets Glory'){ echo 'selected';} ?> value="Faucets Glory">Faucets Glory</option>
                  <option <?php if($eData['productSubTab'] == 'Faucets Grace'){ echo 'selected';} ?> value="Faucets Grace">Faucets Grace</option>
                  <option <?php if($eData['productSubTab'] == 'Faucets Poise'){ echo 'selected';} ?> value="Faucets Poise">Faucets Poise</option>
                  <option <?php if($eData['productSubTab'] == 'Faucets Floret'){ echo 'selected';} ?> value="Faucets Floret">Faucets Floret</option>
                  <option <?php if($eData['productSubTab'] == 'Faucets Xtreme'){ echo 'selected';} ?> value="Faucets Xtreme">Faucets Xtreme</option>
                  <option <?php if($eData['productSubTab'] == 'Faucets Prime Pillar Taps'){ echo 'selected';} ?> value="Faucets Prime Pillar Taps">Faucets Prime Pillar Taps</option>
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
                  <option <?php if($eData['productSubTab'] == 'Solvent Cement'){ echo 'selected';} ?> value="Solvent Cement">Solvent Cement</option>
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
            
            <div class="row">
              <div class="col-md-12">
                <label>Specification Table</label>
                <table class="table table-bordered table-striped">
                  <thead class="thead-light">
                      <tr>
                          <th rowspan="2" class="align-middle">S.No.</th>
                          <th colspan="2" class="align-middle text-center">Size</th>
                          <th rowspan="2" class="align-middle">Standard Packaging Quantity</th>
                      </tr>
                      <tr>
                          <th class="align-middle">Inches</th>
                          <th class="align-middle">mm</th>
                      </tr>
                  </thead>
                  <tbody>
                      <tr>
                          <td>1</td>
                          <td><input type="text" class="form-control" name="specInch1" placeholder="Inches" value="<?php echo $eData['specInch1']; ?>"></td>
                          <td><input type="text" class="form-control" name="specMM0" placeholder="mm" value="<?php echo $eData['specMM1']; ?>"></td>
                          <td><input type="text" class="form-control" name="specQty1" placeholder="Quantity" value="<?php echo $eData['specQty1']; ?>"></td>
                      </tr>
                      <tr>
                          <td>2</td>
                          <td><input type="text" class="form-control" name="specInch2" placeholder="Inches" value="<?php echo $eData['specInch2']; ?>"></td>
                          <td><input type="text" class="form-control" name="specMM2" placeholder="mm" value="<?php echo $eData['specMM2']; ?>"></td>
                          <td><input type="text" class="form-control" name="specQty2" placeholder="Quantity" value="<?php echo $eData['specQty2']; ?>"></td>
                      </tr>
                      <tr>
                          <td>3</td>
                          <td><input type="text" class="form-control" name="specInch3" placeholder="Inches" value="<?php echo $eData['specInch3']; ?>"></td>
                          <td><input type="text" class="form-control" name="specMM3" placeholder="mm" value="<?php echo $eData['specMM3']; ?>"></td>
                          <td><input type="text" class="form-control" name="specQty3" placeholder="Quantity" value="<?php echo $eData['specQty3']; ?>"></td>
                      </tr>
                      <tr>
                          <td>4</td>
                          <td><input type="text" class="form-control" name="specInch4" placeholder="Inches" value="<?php echo $eData['specInch4']; ?>"></td>
                          <td><input type="text" class="form-control" name="specMM4" placeholder="mm" value="<?php echo $eData['specMM4']; ?>"></td>
                          <td><input type="text" class="form-control" name="specQty4" placeholder="Quantity" value="<?php echo $eData['specQty4']; ?>"></td>
                      </tr>
                      <tr>
                          <td>5</td>
                          <td><input type="text" class="form-control" name="specInch5" placeholder="Inches" value="<?php echo $eData['specInch5']; ?>"></td>
                          <td><input type="text" class="form-control" name="specMM5" placeholder="mm" value="<?php echo $eData['specMM5']; ?>"></td>
                          <td><input type="text" class="form-control" name="specQty5" placeholder="Quantity" value="<?php echo $eData['specQty5']; ?>"></td>
                      </tr>
                      <tr>
                          <td>6</td>
                          <td><input type="text" class="form-control" name="specInch6" placeholder="Inches" value="<?php echo $eData['specInch6']; ?>"></td>
                          <td><input type="text" class="form-control" name="specMM6" placeholder="mm" value="<?php echo $eData['specMM6']; ?>"></td>
                          <td><input type="text" class="form-control" name="specQty6" placeholder="Quantity" value="<?php echo $eData['specQty6']; ?>"></td>
                      </tr>
                      <tr>
                          <td>7</td>
                          <td><input type="text" class="form-control" name="specInch7" placeholder="Inches" value="<?php echo $eData['specInch7']; ?>"></td>
                          <td><input type="text" class="form-control" name="specMM7" placeholder="mm" value="<?php echo $eData['specMM7']; ?>"></td>
                          <td><input type="text" class="form-control" name="specQty7" placeholder="Quantity" value="<?php echo $eData['specQty7']; ?>"></td>
                      </tr>
                      <tr>
                          <td>8</td>
                          <td><input type="text" class="form-control" name="specInch8" placeholder="Inches" value="<?php echo $eData['specInch8']; ?>"></td>
                          <td><input type="text" class="form-control" name="specMM8" placeholder="mm" value="<?php echo $eData['specMM8']; ?>"></td>
                          <td><input type="text" class="form-control" name="specQty8" placeholder="Quantity" value="<?php echo $eData['specQty8']; ?>"></td>
                      </tr>
                      <tr>
                          <td>9</td>
                          <td><input type="text" class="form-control" name="specInch9" placeholder="Inches" value="<?php echo $eData['specInch9']; ?>"></td>
                          <td><input type="text" class="form-control" name="specMM9" placeholder="mm" value="<?php echo $eData['specMM9']; ?>"></td>
                          <td><input type="text" class="form-control" name="specQty9" placeholder="Quantity" value="<?php echo $eData['specQty9']; ?>"></td>
                      </tr>
                      <tr>
                          <td>10</td>
                          <td><input type="text" class="form-control" name="specInch11" placeholder="Inches" value="<?php echo $eData['specInch11']; ?>"></td>
                          <td><input type="text" class="form-control" name="specMM11" placeholder="mm" value="<?php echo $eData['specMM11']; ?>"></td>
                          <td><input type="text" class="form-control" name="specQty11" placeholder="Quantity" value="<?php echo $eData['specQty11']; ?>"></td>
                      </tr>
                      <tr>
                          <td>11</td>
                          <td><input type="text" class="form-control" name="specInch11" placeholder="Inches" value="<?php echo $eData['specInch11']; ?>"></td>
                          <td><input type="text" class="form-control" name="specMM11" placeholder="mm" value="<?php echo $eData['specMM11']; ?>"></td>
                          <td><input type="text" class="form-control" name="specQty11" placeholder="Quantity" value="<?php echo $eData['specQty11']; ?>"></td>
                      </tr>
                      <tr>
                          <td>12</td>
                          <td><input type="text" class="form-control" name="specInch12" placeholder="Inches" value="<?php echo $eData['specInch1']; ?>"></td>
                          <td><input type="text" class="form-control" name="specMM1" placeholder="mm" value="<?php echo $eData['specMM12']; ?>"></td>
                          <td><input type="text" class="form-control" name="specQty12" placeholder="Quantity" value="<?php echo $eData['specQty12']; ?>"></td>
                      </tr>
                      <tr>
                          <td>13</td>
                          <td><input type="text" class="form-control" name="specInch13" placeholder="Inches" value="<?php echo $eData['specInch13']; ?>"></td>
                          <td><input type="text" class="form-control" name="specMM13" placeholder="mm" value="<?php echo $eData['specMM13']; ?>"></td>
                          <td><input type="text" class="form-control" name="specQty13" placeholder="Quantity" value="<?php echo $eData['specQty13']; ?>"></td>
                      </tr>
                      <tr>
                          <td>14</td>
                          <td><input type="text" class="form-control" name="specInch14" placeholder="Inches" value="<?php echo $eData['specInch14']; ?>"></td>
                          <td><input type="text" class="form-control" name="specMM14" placeholder="mm" value="<?php echo $eData['specMM14']; ?>"></td>
                          <td><input type="text" class="form-control" name="specQty14" placeholder="Quantity" value="<?php echo $eData['specQty14']; ?>"></td>
                      </tr>
                      <tr>
                          <td>15</td>
                          <td><input type="text" class="form-control" name="specInch15" placeholder="Inches" value="<?php echo $eData['specInch15']; ?>"></td>
                          <td><input type="text" class="form-control" name="specMM15" placeholder="mm" value="<?php echo $eData['specMM15']; ?>"></td>
                          <td><input type="text" class="form-control" name="specQty15" placeholder="Quantity" value="<?php echo $eData['specQty15']; ?>"></td>
                      </tr>
                      <tr>
                          <td>16</td>
                          <td><input type="text" class="form-control" name="specInch16" placeholder="Inches" value="<?php echo $eData['specInch16']; ?>"></td>
                          <td><input type="text" class="form-control" name="specMM16" placeholder="mm" value="<?php echo $eData['specMM16']; ?>"></td>
                          <td><input type="text" class="form-control" name="specQty16" placeholder="Quantity" value="<?php echo $eData['specQty16']; ?>"></td>
                      </tr>
                      <tr>
                          <td>17</td>
                          <td><input type="text" class="form-control" name="specInch17" placeholder="Inches" value="<?php echo $eData['specInch17']; ?>"></td>
                          <td><input type="text" class="form-control" name="specMM17" placeholder="mm" value="<?php echo $eData['specMM17']; ?>"></td>
                          <td><input type="text" class="form-control" name="specQty17" placeholder="Quantity" value="<?php echo $eData['specQty17']; ?>"></td>
                      </tr>
                      <tr>
                          <td>18</td>
                          <td><input type="text" class="form-control" name="specInch18" placeholder="Inches" value="<?php echo $eData['specInch18']; ?>"></td>
                          <td><input type="text" class="form-control" name="specMM18" placeholder="mm" value="<?php echo $eData['specMM18']; ?>"></td>
                          <td><input type="text" class="form-control" name="specQty18" placeholder="Quantity" value="<?php echo $eData['specQty18']; ?>"></td>
                      </tr>
                      <tr>
                          <td>19</td>
                          <td><input type="text" class="form-control" name="specInch19" placeholder="Inches" value="<?php echo $eData['specInch19']; ?>"></td>
                          <td><input type="text" class="form-control" name="specMM19" placeholder="mm" value="<?php echo $eData['specMM19']; ?>"></td>
                          <td><input type="text" class="form-control" name="specQty19" placeholder="Quantity" value="<?php echo $eData['specQty19']; ?>"></td>
                      </tr>
                      <tr>
                          <td>20</td>
                          <td><input type="text" class="form-control" name="specInch20" placeholder="Inches" value="<?php echo $eData['specInch20']; ?>"></td>
                          <td><input type="text" class="form-control" name="specMM20" placeholder="mm" value="<?php echo $eData['specMM20']; ?>"></td>
                          <td><input type="text" class="form-control" name="specQty20" placeholder="Quantity" value="<?php echo $eData['specQty20']; ?>"></td>
                      </tr>

                  </tbody>
                  
              </table>
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
            <div class="copyright text-center text-lg-left text-muted">
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