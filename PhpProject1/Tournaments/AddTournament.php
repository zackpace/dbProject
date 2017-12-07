<?php include '../header.php';  ?>

<div class="container">

    <form class="form-signin" action="dbTournament.php" method="post">
        <h2 class="form-signin-heading">Add Tournament</h2>
        <p>
        <input name="Name"type="text" id="inputEmail" class="form-control" placeholder="Name" required autofocus>
        </p>         
        <p>
        <input name="Sponsor"type="text" id="inputPassword" class="form-control" placeholder="Sponsor" required>
        </p>         
        <p>
        <input name="Location" type="text" id="inputPassword" class="form-control" placeholder="Location" required>
       </p>         
        <p>
        <h6>Start Date</h6>
        <input name="startDate" type="date" id="inputPassword" class="form-control" placeholder="startDate" required>
        </p>         
        <p>
            <h6>End Date</h6>
        <input name="endDate" type="date" id="inputPassword" class="form-control" placeholder="endDate" required>   
        </p>         
        <input type="hidden" name="type" value="tournament">
        <input class="btn btn-md btn-primary" type="submit" value="Add Tournament">
        <a href="TournamentMainPage.php">
            <input class="btn btn-md btn-primary" type="button" value="Cancel">
        </a>
      </form>

    </div> 

  



<?php include '../footer.php';?>