<?php include '../header.php';  ?>

<div class="container">

      <form class="form-signin"  action="dbOrg.php" method="post">
        <h2 class="form-signin-heading">Add Organization</h2>
       
        <input name = "Name" type="text" id="Name" class="form-control" placeholder="Name" required autofocus>
       <h6>Founded</h6>
        <input name = "Founded" type="date" id="inputPassword" class="form-control" placeholder="Founded" required>
        <input class="btn btn-md btn-primary" type="submit" value="Add Organization">
        <a href="OrganizationList.php">
            <input class="btn btn-md btn-primary" type="button" value="Cancel">
        </a>
         <input type="hidden" name="type" value="org">
      </form>

    </div> 

  



<?php include '../footer.php';?>