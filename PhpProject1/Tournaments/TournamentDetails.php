<?php
include '../header.php'; 
    $id = 5;
                    
    $sql = "SELECT * FROM `Tournament` where tournamentID =1";               
    $data = $conn->query($sql);
foreach($data as $org)
    {
        echo "<h2>".$org['Name']."</h2>";
        echo "<h2>".$org['Founded']."</h2>";
    }            
?>   
<a href="TournamentMainPage.php">
    <input class="btn btn-md btn-primary" type="button" value="Add Game">
</a>
<a href="TournamentMainPage.php">
    <input class="btn btn-md btn-primary" type="button" value="Add A Result">
</a>
<?php include '../footer.php';