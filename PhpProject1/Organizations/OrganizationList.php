<?php include '../header.php'; 
include '../Nav.php';?>


<div>
    <a href="AddOrganization.php">
    <input class="btn btn-md btn-primary" type="button" value="Add An Organization">
    </a>
</div>

<div class="row">
    <div class="col-sm-12">
        <table class="table-hover table-striped table">
                          
                        
                        <th>Name</th>
              
                <?php
    	
                    
                    $sql = "SELECT * FROM `Organization` order by `Name` asc";

                
                    $data = $conn->query($sql);

                 
                        foreach($data as $item)
                            {

                                echo "<tr>";
                                
                                echo "<td>".$item['Name']."</td>";?>
                                <td><a href=OrganizationDetails.php?id=<?php echo $item['OrganizationID']?>>                 
                                <input class='btn btn-md btn-primary' type='button' value='Organization Details'>
                                </a></td>
                               </tr>
                               <?php

                            }
                    
               
    ?>
        </table>  
    </div>
</div>

<?php include '../footer.php'; 