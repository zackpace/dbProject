<?php
include '../header.php'; 
    $id = $_GET['id'];
    $sql = "SELECT * FROM `Organization` where OrganizationID = '$id'";               
    $data = $conn->query($sql);
        foreach($data as $item)
        {
            echo"<h2>".$item['Name']."</h2>";
            echo $item['startDate'];
            echo $item['endDate'];                             
        }
    $sql = "SELECT G.Name as game,R.Name as region FROM Team T join Region R on T.Region = R.RegionID join Game G on T.gameID = G.GameID where organizationID ='$id'"; 
   $teams = $conn->query($sql);
?>   

<a href="OrganizationList.php">
    <input class="btn btn-md btn-primary" type="button" value="Edit Details">
</a>
<a href="OrganizationList.php">
    <input class="btn btn-md btn-primary" type="button" value="Add A Team">
</a>

<table class="table-hover table-striped table">
                          
                        <th>Name</th>
                        <th>Region</th>
                        <?php
                         foreach($teams as $item)
                            {

                                echo "<tr>";
                                echo"<td>".$item['game']."</td>";
                                echo "<td>".$item['region']."</td>";
                                echo "</tr>";
                            }
                                
                            echo "</table>";  
                  
                  
        include '../footer.php';           
                 