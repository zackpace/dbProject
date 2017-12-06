<?php include '../header.php';  ?>

<div class="container">

      <form class="form-signin">
        <h2 class="form-signin-heading">Add Tournament</h2>
        <label for="Name" class="sr-only">Name</label>
        <input type="text" id="inputEmail" class="form-control" placeholder="Name" required autofocus>
        <label for="Founded" class="sr-only">Sponsor</label>
        <input type="text" id="inputPassword" class="form-control" placeholder="Sponsor" required>
        <label for="Founded" class="sr-only">Location</label>
        <input type="text" id="inputPassword" class="form-control" placeholder="Location" required>
        <label for="Founded" class="sr-only">Start Date yyyy-mm-dd</label>
        <input type="text" id="inputPassword" class="form-control" placeholder="startDate" required>
        <label for="Founded" class="sr-only">End Date yyyy-mm-dd</label>
        <input type="text" id="inputPassword" class="form-control" placeholder="endDate" required>
        <input class="btn btn-md btn-primary" type="submit" value="Add Tournament">
        <a href="TournamentMainPage.php">
            <input class="btn btn-md btn-primary" type="button" value="Cancel">
        </a>
      </form>

    </div> 

  



<?php include '../footer.php';?>