<?php include_once 'config/database.php';?> 


<?php include_once 'header.php';?> 

<?php include_once 'aside.php';?> 
<div class="right-Side">
    <table class="table table-bordered table-sm">
<caption class="table-Caption">
    Future Dial,DHL & Print Contract

</caption>
<thead class="thead-light">
<tr>
        <th scope="col">Sr. No.</th>
        <th scope="col">Environment</th>
        <th scope="col">Future Dial</th>
        <th scope="col">DHL</th>
        <th scope="col">Print Contract</th>

    </tr>    
    </thead>

	<?php
        $sql = "SELECT id, Environment,FutureDial, DHL, PrintContract FROM fddPrintContract";
        
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            
            while($row = $result->fetch_assoc()) {
           
                echo "<tr scope='row'> 
                <td> ". $row["id"]."</td>  
                <td>". $row["Environment"]. "</td>
                <td>". $row["FutureDial"]. "</td>
                <td>" . $row["DHL"] . "</td>
                 <td>" . $row["PrintContract"] . "</td>
             
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