<?php include '../header.php'; 
include '../Nav.php';

 $sql = "SELECT * FROM `Game` order by `Name` asc";

                
$data = $conn->query($sql);
?>

<div class="offset-nav">
<p class="lead">Games Main Page</p>
</div>

<table class="table-hover table-striped table">
    
    
                    <th>Game</th>
                    <th>Details</th>
                    
                    <?php
                    
                    foreach($data as $item)
                        {
                         echo "<tr>";
                            echo"<td>".$item['Name']."</td>";
                         echo "</tr>";
                        }                 
                    ?>
</table>


<?php include '../footer.php';?>

