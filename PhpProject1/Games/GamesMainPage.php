<?php include '../header.php'; 
include '../Nav.php';

 $sql = "SELECT g.Name as game, c.name as company,g.ReleaseDate as rd FROM `Game` g "
         . "join Company c on g.CompanyID = c.CompanyID order by g.Name";

                
$data = $conn->query($sql);
?>

<div class="offset-nav">
<p class="lead">Games Main Page</p>
</div>

<div>
    <a href="AddGame.php">
    <input class="btn btn-md btn-primary" type="button" value="Add A Game">
    </a>
</div>

<table class="table-hover table-striped table">
    
    
                    <th>Game</th>
                    <th>Release Date</th>
                    <th>Company</th>
                    
                    
                    <?php
                    
                    foreach($data as $item)
                        {
                         echo "<tr>";
                            echo"<td>".$item['game']."</td>";
                            echo"<td>".$item['rd']."</td>";
                            echo"<td>".$item['company']."</td>";
                         echo "</tr>";
                        }                 
                    ?>
</table>


<?php include '../footer.php';?>

