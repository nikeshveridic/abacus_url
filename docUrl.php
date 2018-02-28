<?php include_once 'config/database.php';?> 


<?php include_once 'header.php';?> 
<?php include_once 'aside.php';?> 
<div class="right-Side">
    <table class="table table-bordered table-sm">
<caption class="table-Caption">
    Documents

</caption>
<thead class="thead-light">
<tr>
        <th scope="col">Sr. No.</th>
        <th scope="col"> Project</th>
        
        <th scope="col">Documents</th>
        <th scope="col">URL</th>

    </tr>    
    </thead>

	<?php
        $sql = "SELECT id, Project, Documents, URL FROM docUrl";
        
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            
            while($row = $result->fetch_assoc()) {
           
                echo "<tr scope='row'> 
                <td> ". $row["id"]."</td>  
                <td>". $row["Project"]. "</td>
                <td>". $row["Documents"]. "</td>
                <td>" . $row["URL"] . "</td>
             
                </tr>";
            }
        } else {
            echo "0 results";
        }
?>

</table>

</div>
</body>
</html>	