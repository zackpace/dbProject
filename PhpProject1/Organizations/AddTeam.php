<?php include '../header.php';  
 $id = $_GET['id'];
$sql = "SELECT * FROM `Game` order by Name asc";    
$data = $conn->query($sql);
$sql2 = "SELECT * FROM `Region` order by Name asc";    
$dataRegion = $conn->query($sql2);

?>

<div class="container">

    <form class="form-signin" action="dbOrg.php" method="post">
        <h2 class="form-signin-heading">Add Team</h2>
        <div class = "form-group">
         <select class = "form-control m-2" id ="Game" name="Game">
            <?php
            foreach($data as $item)
                {
                echo"<option value =".$item['GameID'].">".$item['Name']."</option>";
                }        
            ?>
        </select>
        </div>
        <div class = "form-group">
         <select class = "form-control m-2" id ="Game" name="Region">
            <?php
            foreach($dataRegion as $item)
                {
                echo"<option value =".$item['RegionID'].">".$item['Name']."</option>";
                }        
            ?>
        </select>
        </div>
        <input class="btn btn-md btn-primary" type="submit" value="Add Team">
        <a href="OrganizationList.php">
            <input class="btn btn-md btn-primary" type="button" value="Cancel">
        </a>
        <input type="hidden" name="type" value="team">
        <input type="hidden" name="orgID" value="<?php echo $id?>"> 
      </form>

    </div> 

  



<?php include '../footer.php';?>