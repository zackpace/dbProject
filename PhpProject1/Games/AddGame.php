<?php include '../header.php';  
$sql = "SELECT * FROM `Company` order by Name asc"; 
 $data = $conn->query($sql);
?>

<div class="container">

    <form class="form-signin" id="addGame" action="dbGames.php" method="post">
        <h2 class="form-signin-heading">Add Game</h2>
        <p>
        <label for="Name" class="sr-only">Name</label>
        <input name="Name" type="text" id="Name" class="form-control" placeholder="Name" required autofocus>
        </p>
        <p>
        
        <label for="Release" class="sr-only">Release Date</label>
        Release Date
        <input name="Release" type="date" id="Release" class="form-control" placeholder="Release Date yyyy-mm-dd" required>
        </p>
        <p>
        <label for="Game" class="sr-only">Game</label>
         <select class = "form-control m-2" id ="Game" name="Company">
            <?php
            foreach($data as $item)
                {
                echo"<option value =".$item['CompanyID'].">".$item['Name']."</option>";
                }        
            ?>
        </select>
        </p>
        <input class="btn btn-md btn-primary" type="submit" value="Add Game">
        <a href="GamesMainPage.php">
            <input class="btn btn-md btn-primary" type="button" value="Cancel">
        </a>
      </form>
</div> 
<div class="container">

      <form class="form-signin" id="addGame" action="dbGames.php" method="post">
        <h2 class="form-signin-heading">Add Company</h2>
        <label for="Company" class="sr-only">Name</label>
        <input name="Company"type="text" id="Company" class="form-control" placeholder="Company" required autofocus>
        <input class="btn btn-md btn-primary" type="submit" value="Add Company">
      </form>
</div> 

  



<?php include '../footer.php';?>