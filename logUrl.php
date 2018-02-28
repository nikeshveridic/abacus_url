<?php include_once 'config/database.php';?> 

<?php include_once 'header.php';?> 
<?php include_once 'aside.php';?> 
<div class="right-Side">
    <table class="table table-bordered table-sm">
<caption class="table-Caption">
    Logs

</caption>
<thead class="thead-light">
<tr>
        <th scope="col">Sr. No.</th>
        <th scope="col">Environment</th>
        
        <th scope="col">Logs For</th>
        <th scope="col">URL</th>

    </tr>    
    </thead>

	<?php
        $sql = "SELECT id, Environment,logsFor, URL FROM logUrl";
        
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            
            while($row = $result->fetch_assoc()) {
           
                echo "<tr scope='row'> 
                <td> ". $row["id"]."</td>  
                <td>". $row["Environment"]. "</td>
                <td>". $row["logsFor"]. "</td>
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