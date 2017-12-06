<?php include '../header.php';  ?>

<div class="container">

      <form class="form-signin">
        <h2 class="form-signin-heading">Add Player</h2>
        <label for="Name" class="sr-only">First Name</label>
        <input type="text" id="inputFirstName" class="form-control" placeholder="First Name" required autofocus>
        <label for="Founded" class="sr-only">Last Name</label>
        <input type="text" id="inputLastName" class="form-control" placeholder="Last Name" required>
        <input class="btn btn-md btn-primary" type="submit" value="Add Player">
        <label for="Name" class="sr-only">In Game Name</label>
        <input type="text" id="inputInGameName" class="form-control" placeholder="In Game Name" required>
        <a href="PlayersMainPage.php">
            <input class="btn btn-md btn-primary" type="button" value="Cancel">
        </a>
      </form>

    </div> 

  



<?php include '../footer.php';?>