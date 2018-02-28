<?php //include 'config/database.php'; ?>

<?php
  $servername = "localhost";
  $username = "root";
  $password = "root";
  $dbname = "abacus_url";

  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  // Check connection
  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
  }


  $pName = $_POST['pName'];
  $aType = $_POST['aType'];
  $pCode = $_POST['pCode'];
  $qaUrl = $_POST['qaUrl'];
  $qaRedis = $_POST['qaRedis'];
  $uatUrl = $_POST['uatUrl'];
  $uatRedis = $_POST['uatRedis'];
  $liveUrl = $_POST['liveUrl'];
  $liveRedis = $_POST['liveRedis'];


    $sql = "INSERT INTO webUrl (pName, aType, pCode, qaUrl, qaRedis, uatUrl, uatRedis, liveUrl, liveRedis)
    VALUES ('$pName', '$aType', '$pCode', '$qaUrl', '$qaRedis', '$uatUrl', '$uatRedis', '$liveUrl', '$liveRedis')";

    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);


?>


 
<?php include_once 'header.php';?> 
  <?php include_once 'aside.php';?>

    <div class="right-Side">
<!-- <div class="alert alert-success" role="alert">
  This is a success alert—check it out!
</div> -->
<div class="container"> 
      <div class="col-sm-7">


 <form method="POST">
  <h1>Entry</h1>
 
       <div class="form-group">
           <label>Partner Name</label>
           <input type="text>" name="pName" class="form-control">
       </div>
      <div class="form-group">
           <label>Authentication Type</label>
           <input type="text" name="aType"  class="form-control">
       </div>
      <div class="form-group">
           <label>Partner Code</label>
           <input type="text" name="pCode"  class="form-control">
       </div>
       <div class="form-row">
       <div class="form-group col-md-6">
           <label>QA URL</label>
          
           
           <input type="text" name="qaUrl"  class="form-control">
          
          
       </div>
        <div class="form-group col-md-6">
           <label>QA qaRedis</label>
          
           
           <input type="number" name="qaRedis"  class="form-control">
          
          
       </div>
     </div>
     <div class="form-row">
         <div class="form-group col-md-6">
           <label>UAT URL</label>
          
           
           <input type="text" name="uatUrl"  class="form-control">
          
          
       </div>
         <div class="form-group col-md-6">
           <label>UAT Redis</label>
           
           
           <input type="number" name="uatRedis"  class="form-control">
          
           
           </div>
       </div>
       <div class="form-row">
          <div class="form-group col-md-6">
           <label>Live Url</label>
          
           
           <input type="text" name="liveUrl" value="NA"  class="form-control">
          
          
       </div>
         <div class="form-group col-md-6">
           <label>Live Redis</label>
          
           
           <input type="number" name="liveRedis"  class="form-control">
          
          
       </div>
     </div>
       <div class="form-group">
      <input type="submit" value="Submit" name="submit" class="btn btn-primary">
          
          
       </div>
  



</form> 

</div>
</div>
</div>
</body>
</html>