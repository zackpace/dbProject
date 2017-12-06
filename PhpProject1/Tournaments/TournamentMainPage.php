<?php include '../header.php'; 
include '../Nav.php';?>

<div class="offset-nav">
<p class="lead">Tournament Main Page</p>
</div>


<div>
    <a href="AddTournament.php">
    <input class="btn btn-md btn-primary" type="button" value="Add A Tournament">
    </a>
</div>

<div class="row">
    <div class="col-sm-12">
        <table class="table-hover table-striped table">
           
                
                        <th>Name</th>
                        <th>Start Date</th>
                        <th>End Date</th>
              
                <?php
    	
                    
                    $sql = "SELECT * FROM `Tournament` order by `startDate` asc";

                
                    $data = $conn->query($sql);

                    if(count($data) > 0){
                        foreach($data as $item)
                            {

                                echo "<tr>";
                                echo"<td>".$item['Name']."</td>";
                                echo "<td>".$item['startDate']."</td>";
                                echo "<td>".$item['endDate']."</td>";
                                
                                echo "</tr>";

                            }
                    }
               
    ?>
        </table>  
    </div>
</div>
<?php include '../footer.php';?>