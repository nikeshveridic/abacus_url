<?php include_once 'config/database.php';?> 

<?php
    error_reporting(0);
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "abacus_url";
    $datatable = "webUrl"; // MySQL table name
    $results_per_page = 33; // number of results per page
     
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 

    // sql to delete a record
    // $sql = "DELETE FROM webUrl WHERE id=59";

    // if ($conn->query($sql) === TRUE) {
    //     echo "Record deleted successfully";
    // } else {
    //     echo "Error deleting record: " . $conn->error;
    // }

   
 

?>



<?php include_once 'header.php';?> 
<?php include_once 'aside.php';?> 
<div class="right-Side">
   
    <table class="table table-bordered table-sm">
<caption class="table-Caption">
    Projects

</caption>
<thead class="thead-light">
<tr>
        <th scope="col">Sr. No.</th>
        <th scope="col">Partner Name</th>
        <th scope="col">Authentication Type</th>
        <th scope="col">Partner Code</th>
        <th scope="col">Qa URL</th>
        <th scope="col">Redis</th>
        <th scope="col">Uat URL</th>
        <th scope="col">Redis</th>
        <th scope="col">Live URL</th>
        <th scope="col">Redis</th>
    </tr>    
    </thead>


<?php
    if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };
    $start_from = ($page-1) * $results_per_page;
    $sql = "SELECT * FROM ".$datatable." ORDER BY Id ASC LIMIT $start_from, ".$results_per_page;
    $rs_result = $conn->query($sql);


    while($row = $rs_result->fetch_assoc()) {
?> 
    <tr>
        <td><?php echo $row["Id"]; ?></td>
        <td><?php echo $row["pName"]; ?></td>
        <td><?php echo $row["aType"]; ?></td>
        <td><?php echo $row["pCode"]; ?></td>
        <td><?php echo $row["qaUrl"]; ?></td>
        <td><?php echo $row["qaRedis"]; ?></td>
        <td><?php echo $row["uatUrl"]; ?></td>
        <td><?php echo $row["uatRedis"]; ?></td>
        <td><?php echo $row["liveUrl"]; ?></td>
        <td><?php echo $row["liveRedis"]; ?></td>
    </tr>
<?php 
}; 
?> 



</table>
<nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
<?php 
    $sql = "SELECT COUNT(ID) AS total FROM ".$datatable;
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $total_pages = ceil($row["total"] / $results_per_page); // calculate total pages with results
      
    for ($i=1; $i<=$total_pages; $i++) {  // print links for all pages
                echo "<li class='page-item'><a class='page-link' href='index.php?page=".$i."'";
                if ($i==$page)  echo " class='page-link'";
                echo ">".$i."</a></li> "; 
    }; 
?>
</ul>
</nav>


</div>
</body>
</html>	