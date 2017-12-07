<?php include '../header.php';  
 $id = $_GET['id'];
$sql = "SELECT * FROM `Game` order by Name asc";    
$sqlType = "SELECT * FROM TournamentType";
    $data = $conn->query($sql);
    $type = $conn->query($sqlType);
?>

<div class="container">

      <form class="form-signin" action="dbTournament.php" method="post">
        <h2 class="form-signin-heading">Add Game To Tournament</h2>
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
         <select class = "form-control m-2" id ="Type" name="tournyType">
            <?php
            foreach($type as $item)
                {
                echo"<option value =".$item['TournamentTypeID'].">".$item['Type']."</option>";
                }        
            ?>
        </select>
        </div>
        <input class="btn btn-md btn-primary" type="submit" value="Add Tournament Game">
        <a href="OrganizationList.php">
            <input class="btn btn-md btn-primary" type="button" value="Cancel">
        </a>
        <input type="hidden" name="type" value="game">
        <input type="hidden" name="tournamentID" value="<?php echo $id?>"> 
      </form>

    </div> 

  



<?php include '../footer.php';?>