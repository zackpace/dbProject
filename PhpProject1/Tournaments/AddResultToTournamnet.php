<?php include '../header.php';  
$id = $_GET['id'];
$game = $_GET['game'];
$sql = "SELECT o.Name as name, t.teamID as id FROM Zackary_Project.Team t join Organization o on t.organizationID = o.OrganizationID join Game g
on g.GameID = t.gameID where g.GameID = '$game' order by name;";    

    $data = $conn->query($sql);
    $type = $conn->query($sqlType);
?>

<div class="container">

      <form class="form-signin" action="dbTournament.php" method="post">
        <h2 class="form-signin-heading">Add Result</h2>
        <select class = "form-control m-2" id ="Team" name="Team">
            <?php
            foreach($data as $item)
                {
                echo"<option value =".$item['id'].">".$item['name']."</option>";
                }        
            ?>
        </select>
        <input name="place"type="text" id="inputPassword" class="form-control" placeholder="Place" required>
        <input class="btn btn-md btn-primary" type="submit" value="Add Organization">
        <a href="TournamentMainPage.php">
            <input class="btn btn-md btn-primary" type="button" value="Cancel">
        </a>
          <input type="hidden" name="type" value="result">
        <input type="hidden" name="tournamentGameID" value="<?php echo $id?>"> 
      </form>

    </div> 

  



<?php include '../footer.php';?>