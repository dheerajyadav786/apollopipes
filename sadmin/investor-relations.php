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
  $dquery = "DELETE FROM investorRelation WHERE id='$pid' ";
  $dSql = mysqli_query($conn, $dquery);
  if($dSql){
    echo '<script>alert("Investor relation content deleted successfully.");</script>';
    //header('Location: products');
  }else{
    echo '<script>alert("Investor relation content deleted error.");</script>';
  }
}
if($action == 'edit'){
  $equery = "SELECT * FROM investorRelation WHERE id='$pid' ";
  $eSql = mysqli_query($conn, $equery);
  $eData = mysqli_fetch_assoc($eSql);
}

if(isset($_POST['submit'])){
  $title = $_POST['investorTitle'];
  $document = $_FILES['investorDocument']['name'];
  if($document != ''){
    $file_tmp1 = $_FILES['investorDocument']['tmp_name'];
    move_uploaded_file($file_tmp1,"../media/product/".$document);
  }else{
    $document = $eData['document'];
  }
  $year = $_POST['investorYear'];
  $type = $_POST['investorType'];

  if($action == 'edit'){
    $query = "UPDATE investorRelation SET title='$title', document='$document', year='$year', type='$type' WHERE id='$pid' ";
    $sql = mysqli_query($conn, $query);
    if($sql){
      echo '<script>alert("Document updated successfully.");</script>';
    }else{
      echo '<script>alert("Document updated failed.");</script>';
    }
  }else{
    $query = "INSERT INTO investorRelation (title, document, year, type) VALUES ('$title', '$document', '$year', '$type') ";
    $sql = mysqli_query($conn, $query);
    if($sql){
      echo '<script>alert("Document added successfully.");</script>';
    }else{
      echo '<script>alert("Document added failed.");</script>';
    }
  }
}
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Add Investor Relations</title>
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
                <label>Title</label>
                <input type="text" class="form-control" name="investorTitle" placeholder="Product Title" required="" value="<?php echo $eData['title']; ?>">
              </div>
              <div class="col-md-6">
                <label>Document</label>
                <input type="file" class="form-control" name="investorDocument">
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-6">
                <label>Choose Year</label>
                <select class="form-select form-control" aria-label="Default select example" name="investorYear">
                  <option selected disabled="">Select</option>
                  <option <?php if($eData['year'] == 'FY 2016-17'){ echo 'selected';} ?> value="FY 2016-17">FY 2016-17</option>
                  <option <?php if($eData['year'] == 'FY 2017-18'){ echo 'selected';} ?> value="FY 2017-18">FY 2017-18</option>
                  <option <?php if($eData['year'] == 'FY 2018-19'){ echo 'selected';} ?> value="FY 2018-19">FY 2018-19</option>
                  <option <?php if($eData['year'] == 'FY 2019-20'){ echo 'selected';} ?> value="FY 2019-20">FY 2019-20</option>
                  <option <?php if($eData['year'] == 'FY 2020-21'){ echo 'selected';} ?> value="FY 2020-21">FY 2020-21</option>
                  <option <?php if($eData['year'] == 'FY 2021-22'){ echo 'selected';} ?> value="FY 2021-22">FY 2021-22</option>
                </select>
              </div>
              <div class="col-md-6">
                <label>Investor Type</label>
                <select class="form-select form-control" aria-label="Default select example" name="investorType">
                  <option selected disabled="">Select</option>
                  <option <?php if($eData['type'] == 'Press/Stock Exchange Release'){ echo 'selected';} ?> value="Press/Stock Exchange Release">Press/Stock Exchange Release (Announcemnet)</option>
                  <option <?php if($eData['type'] == 'Closure of Trading Window'){ echo 'selected';} ?> value="Closure of Trading Window">Closure of Trading Window (Announcemnet)</option>
                  <option <?php if($eData['type'] == 'Extract of Annual Return'){ echo 'selected';} ?> value="Extract of Annual Return">Extract of Annual Return (Announcemnet)</option>
                  <option <?php if($eData['type'] == 'Board Meetings'){ echo 'selected';} ?> value="Board Meetings">Board Meetings (Announcemnet)</option>
                  <option <?php if($eData['type'] == 'AGM'){ echo 'selected';} ?> value="AGM">AGM (Announcemnet)</option>
                  <option <?php if($eData['type'] == 'Newspaper Advertisement'){ echo 'selected';} ?> value="Newspaper Advertisement">Newspaper Advertisement (Announcemnet)</option>
                  <option <?php if($eData['type'] == 'Others'){ echo 'selected';} ?> value="Others">Others (Announcemnet)</option>
                  <option <?php if($eData['type'] == 'Financial Results'){ echo 'selected';} ?> value="Financial Results">Financial Results (Financial)</option>
                  <option <?php if($eData['type'] == 'Annual Report'){ echo 'selected';} ?> value="Annual Report">Annual Report (Financial)</option>
                  <option <?php if($eData['type'] == 'Postal Ballot results'){ echo 'selected';} ?> value="Postal Ballot results">Postal Ballot results (Financial)</option>
                  <option <?php if($eData['type'] == 'Conference Call Transcript'){ echo 'selected';} ?> value="Conference Call Transcript">Conference Call Transcript (Financial)</option>
                  <option <?php if($eData['type'] == 'Conference Call Invitation'){ echo 'selected';} ?> value="Conference Call Invitation">Conference Call Invitation (Financial)</option>
                  <option <?php if($eData['type'] == 'Investor Presentations'){ echo 'selected';} ?> value="Investor Presentations">Investor Presentations (Presentations)</option>
                  <option <?php if($eData['type'] == 'Shareholding Pattern'){ echo 'selected';} ?> value="Shareholding Pattern">Shareholding Pattern (General Information)</option>
                  <option <?php if($eData['type'] == 'Committees Composition'){ echo 'selected';} ?> value="Committees Composition">Committees Composition (General Information)</option>
                  <option <?php if($eData['type'] == 'Related Party Transactions'){ echo 'selected';} ?> value="Related Party Transactions">Related Party Transactions (General Information)</option>
                  <option <?php if($eData['type'] == 'Unpaid and Unclaimed Amount'){ echo 'selected';} ?> value="Unpaid and Unclaimed Amount">Unpaid and Unclaimed Amount (General Information)</option>
                  <option <?php if($eData['type'] == 'Grievance Management'){ echo 'selected';} ?> value="Grievance Management">Grievance Management (General Information)</option>
                  <option <?php if($eData['type'] == 'Amalgamation/Merger'){ echo 'selected';} ?> value="Amalgamation/Merger">Amalgamation/Merger (General Information)</option>
                  <option <?php if($eData['type'] == 'Company Policies'){ echo 'selected';} ?> value="Company Policies">Company Policies (General Information)</option>
                  <option <?php if($eData['type'] == 'Secretarial Compliance Report'){ echo 'selected';} ?> value="Secretarial Compliance Report">Secretarial Compliance Report (General Information)</option>
                  <option <?php if($eData['type'] == 'Moa and AoA'){ echo 'selected';} ?> value="Moa and AoA">Moa and AoA (Downloads)</option>
                  <option <?php if($eData['type'] == 'Credit Ratings'){ echo 'selected';} ?> value="Credit Ratings">Credit Ratings (Downloads)</option>
                  <option <?php if($eData['type'] == 'Insider Trading General Notice'){ echo 'selected';} ?> value="Insider Trading General Notice">Insider Trading General Notice (Downloads)</option>
                </select>
              </div>
            </div>
            <br>
            <div class="row text-center">
              <div class="col-md-12">  
                <input type="submit" class="btn btn-primary my-4" name="submit" value="Submit" style="width: 100%;">
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
              <h3 class="mb-0">List of Investor Relations</h3>
            </div>
            <!-- Light table -->
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">S. No</th>
                    <th scope="col" style="max-width: 80px;">Title</th>
                    <th scope="col">Document</th>
                    <th scope="col">Year</th>
                    <th scope="col">Type</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody class="list">
                  <?php
                    $sno = 1;
                    $get = "SELECT * from investorRelation";
                    $getSql = mysqli_query($conn, $get);
                    while($data = mysqli_fetch_array($getSql)){
                      echo '<tr>';
                      echo '<td>'.$sno++.'</td>';
                      echo '<td>'.$data['title'].'</td>';
                      echo '<td>'.$data['document'].'</td>';
                      echo '<td>'.$data['year'].'</td>';
                      echo '<td>'.$data['type'].'</td>';
                      echo '<td><a href="investor-relations?action=edit&id='.$data['id'].'" class="btn btn-info">Edit</a> <a href="investor-relations?action=delete&id='.$data['id'].'" class="btn btn-danger">Delete</a></td>';
                      echo '</tr>';
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