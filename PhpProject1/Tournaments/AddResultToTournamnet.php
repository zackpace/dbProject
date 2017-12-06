<?php include '../header.php';  
$id = $_GET['id'];
$game = $_GET['game'];
$sql = "SELECT o.Name as name, t.teamID as id FROM Zackary_Project.Team t join Organization o on t.organizationID = o.OrganizationID join Game g
on g.GameID = t.gameID where g.GameID = '$game' order by name;";    

    $data = $conn->query($sql);
    $type = $conn->query($sqlType);
?>

<div class="container">

      <form class="form-signin">
        <h2 class="form-signin-heading">Add Result</h2>
        <label for="Team" class="sr-only">Team</label>
        <select class = "form-control m-2" id ="Team" name="Team">
            <?php
            foreach($data as $item)
                {
                echo"<option value =".$item['id'].">".$item['name']."</option>";
                }        
            ?>
        </select>
        
        <label for="Place" class="sr-only">Place</label>
        <input type="Place" id="inputPassword" class="form-control" placeholder="Place" required>
        <input class="btn btn-md btn-primary" type="submit" value="Add Organization">
        <a href="OrganizationList.php">
            <input class="btn btn-md btn-primary" type="button" value="Cancel">
        </a>
      </form>

    </div> 

  



<?php include '../footer.php';?>