<?php include '../header.php';  ?>

<div class="container">

      <form class="form-signin">
        <h2 class="form-signin-heading">Add Organization</h2>
        <label for="Name" class="sr-only">Name</label>
        <input type="text" id="inputEmail" class="form-control" placeholder="Name" required autofocus>
        <label for="Founded" class="sr-only">Founded</label>
        <input type="text" id="inputPassword" class="form-control" placeholder="Founded" required>
        <input class="btn btn-md btn-primary" type="submit" value="Add Organization">
        <a href="OrganizationList.php">
            <input class="btn btn-md btn-primary" type="button" value="Cancel">
        </a>
      </form>

    </div> 

  



<?php include '../footer.php';?>